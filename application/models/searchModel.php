<?php

class searchModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function getSearchResults($data, $page){
	
		$db = $this->db->useDB();
		$collection = $this->db->selectCollection($db, ARTEFACT_COLLECTION);

		$dataFilter = [];
		$displayString = '';

		$dataFilter['DataExists'] = $this->dataShowFilter;

		if(isset($data['term'])) {
		
			$term = $data['term'];
			$term = preg_quote($term, '/');
			$dataFilter['$text'] = ['$search' => $term ];
			$displayString = $term;
		}
		else {

			$term = '';

			foreach ($data as $key => $value) {

				$dataFilter[$key] = ['$regex' => $value, '$options' => 'i'];
				$displayString .= $key . ': ' . $value . '<br />';
			}

			$term = implode(' ', $data);
		}
		// var_dump($term ); exit(0);	
	
		$skip = ($page - 1) * PER_PAGE;
		$limit = PER_PAGE;
		// var_dump($dataFilter); exit(0);
		
		$iterator = $collection->find(
			$dataFilter,
			[
				// 'projection' => [
				// 	'score' => [
				// 		'$meta' => 'textScore'
				// 	],
				// ],
				// 'sort' => [
				// 	'score' => [
				// 		'$meta' => 'textScore'
				// 	]
				// ],
				'skip' => $skip,
				'limit' => $limit
			]
		);
	
		$data = [];
	
		$result = iterator_to_array($iterator, true);
	
		foreach ($result as $row) {
	
			$row['idURL'] = str_replace('/', '_', $row['id']);
			$row['cardName'] = $this->getMatchingFieldsHTML($row->getArrayCopy(), $term);
			$row['thumbnailPath'] = $this->getThumbnailPath($row['id']);
	
			array_push($data, $row);
		}
	
		if(!empty($data))
			$data['displayString'] = $displayString;
		else
			$data = 'noData';
	
		return $data;
	}

	public function getFullTextSearchResults($data, $page){
	
		$db = $this->db->useDB();
		$collection = $this->db->selectCollection($db, FULLTEXT_COLLECTION);
	
		$term = $data['term'];
		$term = preg_quote($term, '/');
	
		$skip = ($page - 1) * PER_PAGE;
		$limit = PER_PAGE;
		
		$match = [ '$text' => [ '$search' => $term ] ];

		$iterator = $collection->aggregate(
			[
				[ '$match' => $match ],
				[ '$group' => [ '_id' => '$id', 'pages' => [ '$push' => '$page' ] ] ],
				[ '$sort' => [ '_id' => 1 ] ],
				[ '$skip' => $skip ],
				[ '$limit' => $limit ]
			]
		);
	
		$data = [];
	
		$result = iterator_to_array($iterator, true);
	
		foreach ($result as $row) {

			$row['id'] = $row['_id'];
			$row['pages'] = (array) $row['pages'];
			$row['idURL'] = str_replace('/', '_', $row['id']);
			$type = $this->getTypeByID($row['id']);

			$row['cardName'] = '<strong>Type : ' . $type . '</strong><br/>';
			$row['cardName'] .= '<span class="fulltextSnippet">';
			$row['cardName'] .= '<strong>Found at page(s): </strong>';

			sort($row['pages']);

			foreach ($row['pages'] as $page) {
				
				$pdfPath = (isset($_SESSION['login']) || SHOW_PDF) ?  BASE_URL . 'artefact/fulltext/' . $row['idURL'] . '/#page=' . preg_replace('/^0+/', '', $page) . '&search=' . $term : 'javascript:void()';
				$row['cardName'] .= '<span><a href="' . $pdfPath . '" target="_blank">' . preg_replace('/^0+/', '', $page) . '</a></span>';
			}

			$row['cardName'] .= '</span>';

			$row['thumbnailPath'] = $this->getThumbnailPath($row['id']);

			array_push($data, $row);
		}
	
		if(!empty($data))
			$data['term'] = $term;
		else
			$data = 'noData';
	
		return $data;
	}

	public function getFulltextSnippet($text, $term){

		// Considering only the first word in the search term
		$term = preg_replace('/(.*?) .*/', "$1", $term);
	
		$words = explode(' ', $text);
		$matches = preg_grep('/.*' . $term . '.*/i', $words);
		$matchedKey = array_keys($matches)[0];
		
		$left = $matchedKey - FULLTEXT_SNIPPET_SIZE;
		$left = ($left < 0) ? 0 : $left;

		$right = $matchedKey + FULLTEXT_SNIPPET_SIZE;
		$right = ($right > sizeof($words)) ? sizeof($words) : $right;

		$text = '<span class="fulltextSnippet">' . implode(' ', array_slice($words, $left, $right - $left)) . '</span>';
		$text = preg_replace("/($term)/i", "<span class=\"highlight\">$1</span>", $text);
		
		return $text;
	}	

	public function getMatchingFieldsHTML($descArray, $searchTerm){

		// Toc fields are excluded here
		if(isset($descArray['Toc'])) unset($descArray['Toc']);
		
		$searchTerm = $searchTerm;
		$terms = explode(' ', $searchTerm);
		$termsRegex = implode('|', $terms);
		$allWords = array_map('strtolower', $terms);

		// if(array_search(strtolower($descArray['Type']), $allWords))
		// 	unset($allWords[array_search(strtolower($descArray['Type']))]);

		$matches = [];
		if(isset($descArray['Type'])) array_push($matches, '<strong>Type</strong> : ' . $descArray['Type']);

		foreach ($terms as $term) {
			
			foreach ($descArray as $key => $value) {

				if(preg_match('/' . $term . '/i', $value)){

					$value = preg_replace("/($termsRegex)/i", "<span class=\"highlight\">$1</span>", $value);
					// if(isset($descArray['Type']) && $term != $descArray['Type'])
					array_push($matches, '<strong>' . $key . '</strong> : ' . $value);
					unset($descArray{$key});
				}
				// if($key == 'Toc'){

				// 	$tocPages = "";
				// 	for($tocindex = 0; $tocindex < sizeof($value); $tocindex++){

				// 		foreach($value[$tocindex] as $tockey => $tocvalue){

				// 			if(preg_match('/' . $term . '/i', $tocvalue)){

				// 				$tocPages = $tocPages . "; " . $value[$tocindex]['Title'] . '(' . $value[$tocindex]['Page'] . ')';
				// 			}
				// 		}
				// 	}

				// 	$tocPages = preg_replace('/^;/', "", $tocPages);
				// 	if($tocPages != "")
				// 		array_push($matches, '<strong>' . $key . '(in Articles)</strong> : ' . $tocPages);
				// }
			}
		}

		$index = preg_grep('/<strong>Type<\/strong>/', $matches);

		if(sizeof($index) > 1)
			unset($matches[0]);

		$html = implode($matches, '<br />');

		preg_match_all('/<span class="highlight">(.*?)<\/span>/', $html, $matches);
		$removedWords = array_unique(array_map('strtolower', $matches[1]));

		$remainigWords = array_map('ucwords', array_diff($allWords, $removedWords));
		$remainingWordsString = '<span class="term-not-exists">' . implode('</span> <span class="term-not-exists">', $remainigWords) . '</span>';

		return ($remainigWords) ? $html . '<br />' . $remainingWordsString : $html;
	}

	public function getUniqueKeysNew(){

		$db = $this->db->useDB();
		$collection = $this->db->selectCollection($db, ARTEFACT_COLLECTION);


		$aggregatePipeline = [
				[ '$project' => [ 'arrayofkeyvalue' => [ '$objectToArray' => '$$ROOT' ] ] ], 
				[ '$unwind' => '$arrayofkeyvalue' ], 			
				[ '$group' => ['_id' => null, 'allkeys' => [ '$addToSet' => '$arrayofkeyvalue.k' ] ] ] 
			];

		$iterator = $collection->aggregate($aggregatePipeline);

		$result = iterator_to_array($iterator, true);
		//var_dump($result[0]['allkeys']); exit(0);
	
		if(sizeof($result[0]['allkeys']) > 0 )
			return $result[0]['allkeys'];
		else
			return '';

	}
}
?>
