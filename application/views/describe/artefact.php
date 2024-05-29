<?php 
    $auxiliary = array_pop($data);
    $parentType = $auxiliary['parentType'];
    $filter = $auxiliary['filter'];
?>

<style>
img {
/*  border: 1px solid #ddd; /* Gray border */*/
/*  border-radius: 4px;  /* Rounded border */*/
/*  padding: -12px; /* Some padding */*/

/*  width: 100px; /* Set a small width */*/
}

/* Add a hover effect (blue shadow) */
/*img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}*/
</style>

<script>
$(document).ready(function(){

    var bgColor = $('.albumTitle').css('background-color');
    var fgColor = $('.albumTitle span').css('color');

    $('.albumTitle span').css('color', bgColor);
    $('.albumTitle').css('background-color', fgColor);

    // Triggering a click event on page which has to be opened
    $('.toc a').on('click', function(e){

        var imageID = $(this).attr('data-href');
        $('#' + imageID).trigger('click');
    });
});
</script>


<div class="container">
    <div class="row gap-above-med">
        <div class="col-md-9">
            <ul class="pager">
                <?php if($data['neighbours']['prevID']) {  ?> 
                 <li class="previous text-start"><a href="<?=BASE_URL?>describe/artefact/<?=$data['neighbours']['prevID']?>?<?=$data['filter']?>">&lt; Previous</a></li>
                <?php } ?>
                <?php if($data['neighbours']['nextID']) {?> 
                <li style="margin-top: -25px" class="next text-end "><a href="<?=BASE_URL?>describe/artefact/<?=$data['neighbours']['nextID']?>?<?=$data['filter']?>">Next &gt;</a></li>
                <?php } ?>
            </ul>
            <div id="viewletterimages" class="letter_thumbnails">
                <?php

                    if(isset($data['external'])){

                        echo '<div class="iframeHolder">';
                        include $data['external']['fileName'];
                        echo '</div>';
                    }
                    else{

                        $numberOfImages = sizeof($data['images']);

                        $class = ($numberOfImages > 1) ? 'img-small ' : 'img-center ';

                        foreach ($data['images'] as $imageThumbPath ) {
                                
                            $imagePath = str_replace('thumbs/', '', $imageThumbPath);

                            if ($class == 'img-center ') $imageThumbPath = $imagePath;

                            $imageID = str_replace(DATA_URL . $data['details']['id'] . '/', '', $imagePath);
                            $imageID = 'image_' . intval(str_replace(PHOTO_FILE_EXT, '', $imageID));

                            echo '<img id="' . $imageID . '" class="' . $class . 'img-fluid" data-original="' . $imagePath . '" src="' . $imageThumbPath . '">';

                            // echo '<a href="' . $imageThumbPath . '"><img id="' . $imageID . '" class="' . $class . 'img-fluid" data-original="' . $imagePath . '" src="' . $imageThumbPath . '"></a>';

                           
                        }
                    }
                ?>
            </div>
        </div>            
        <div class="col-md-3">
            <div class="image-desc-full">
                <div class="albumTitle <?=$data['details']['Type']?>"><span class="head"><?=$data['details']['Type']?></span></div>
                <ul class="list-unstyled">
                <?php

                    // Bring AccessionCards to the last row
                    $accessionCards = [];
                    if (isset($data['details']['AccessionCards'])) {

                        $accessionCards = $data['details']['AccessionCards'];
                        unset($data['details']['AccessionCards']);
                        $data['details']['AccessionCards'] = $accessionCards;
                    }

                    $idURL = str_replace('/', '_', $data['details']['id']);

                    $toc = $data['details']['Toc'] = (isset($data['details']['Toc'])) ? $data['details']['Toc'] : '';
                    unset($data['details']['Toc']);

                    foreach ($data['details'] as $key => $value) {

                        echo '<li><strong>' . $key . ':</strong><span class="image-desc-meta">' . $viewHelper->formatDisplayString($value) . '</span></li>';
                    }
                ?>
                <?php if(isset($_SESSION['login']) || SHOW_PDF) {?>
                    <?=$viewHelper->linkPDFIfExists($data['details']['id'])?>
                <?php } ?>
                <?php if(isset($_SESSION['login'])) {?>
                    <li><a class="editDetails" href="<?=BASE_URL?>edit/artefact/<?=$idURL?>">Edit Details</a></li>
                <?php } ?>
                </ul>
                <?php if($accessionCards) echo $viewHelper->includeAccessionCards($accessionCards); ?>
                <?php if($toc) echo $viewHelper->displayToc($toc); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


