<div class="container gap-above-med">
	<div class="row">
		<!-- <div class="col-md-2"><a target="_blank" href="<?=PUBLIC_URL?>help.pdf"><button style="text-decoration: none; color: black">Advanced Search - Help</button></a></div> -->
		<div class="col-md-8">
			<h2>Advanced Search</h2>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row gap-above-med">
		<div class="col-md-2">
			<!-- <a target="_blank" href="<?=PUBLIC_URL?>help.pdf"><button style="text-decoration: none; color: black">Help</button></a> -->
		</div>
		<div class="col-md-8">
			<form method="GET" class="form-inline updateDataArchive" role="form" id="updateData" action="<?=BASE_URL?>search/field" onsubmit="return validate()">
				<div class="form-group">
					<label class="selecttype" for="Type">Select Type</label>
					<select class="form-control selecttypevalue" name="Type">
						<option value="Photograph">Photograph</option>
						<option value="Magazine">Magazine</option>
						<!-- <option value="Newspaper">Newspaper</option> -->
						<option value="CentenaryPhotograph">CentenaryPhotograph</option>
					</select><br />
				</div>

				  <?php 
				  unset($data[0]); 
				  unset($data[2]);
				  unset($data[5]); 
				  unset($data[3]);
				  unset($data[7]); 
				  unset($data[12]);  
				  unset($data[16]);
				  unset($data[21]);  
				  unset($data[1]); 
				  unset($data[6]); 

				  unset($data[22]);
				 // var_dump($data);exit(0); 
				 ?>
				<div class="keyValuePair">	
					<div class="form-group">
						<select class="keySelect form-control">
							<option value="">Select Key</option>
							<?php 	foreach ($data as $key) {	?>

							<option value="<?=$key?>"><?=$key?></option>
							<?php } ?>
						</select>
						<input type="text" class="form-control edit value" placeholder="Enter Value" />
					</div>					
				</div>

				<i class="fa fa-plus" title="Add new field" id="addKeyValue"></i>
				<input class="updateSubmit" type="submit" id="submit" value="Search" />
			</form>    
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<script>
$(document).ready(function() {

	$('body').on('click', '#addKeyValue', function(){

		$(".keyValuePair").append('<div class="form-group">' + $('.keyValuePair .form-group').first().html() + '</div>');
	});

	$('body').on('change', '.keySelect', function(){

		var key = $(this).val();
		$(this).next('input.edit.value').attr('name', key);
	});
});	
</script>
