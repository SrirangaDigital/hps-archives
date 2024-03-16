<link href="<?=BASE_URL?>application/views/describe/dflip/css/dflip.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
  .left{
    float: left;
  }
  .df-ui-prev{
    /*background-color: red;*/
    value: "hloo";
  }
  .df-ui-prev:before {
  content: "<<";
  color: red;
}
.df-ui-next:before{
  content: ">>";
  color: red;
}
.df-ui-thumbnail:before{
  content: "Toggle";
  color: red;
}
 .df-ui-zoomin:before{
  content: "+";
  color: red;
 }
 .df-ui-zoomout:before{
  content: "-";
  color: red;
 }
 .df-ui-fullscreen:before{
  content: "[ ]";
  color: red;
 }
 .df-ui-share:before{
  content: "Share";
  color: red;
 }
 .df-ui-more:before{
  content: "^";
  color: red;
 }
 .df-ui-download{
  color: red;
 }
 .df-ui-pagemode{
  color: red;
 }
 .df-ui-start{
  color:red;
 }
 .df-ui-end{
  color:red;
 }
 .df-ui-sound{
  color: red;
}
._df_thumb{
  margin: 40px;
}
.title{
  float: right;
}
</style>
<!-- <script>
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
</script> -->
<div class="container">
    <div class="row gap-above-med">
        <div class="col-md-8">

            <ul class="pager">
                <?php if($data['neighbours']['prevID']) {?> 
                <li class="previous text-start"><a href="<?=BASE_URL?>describe/magazine/<?=$data['neighbours']['prevID']?>?<?=$data['filter']?>">&lt; Previous</a></li>
                <?php } ?>
                <?php if($data['neighbours']['nextID']) {?> 
                <li style="margin-top: -25px" class="next text-end"><a href="<?=BASE_URL?>describe/magazine/<?=$data['neighbours']['nextID']?>?<?=$data['filter']?>">Next &gt;</a></li>
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


                            // var_dump(DATA_URL . $data['details']['id'] . '/' . "001.pdf");

                            if ($class == 'img-center ') $imageThumbPath = $imagePath;

                            $imageID = str_replace(DATA_URL . $data['details']['id'] . '/', '', $imagePath);

                            // var_dump($imagePath);exit(0);
                            $imageID = 'image_' . intval(str_replace(PHOTO_FILE_EXT, '', $imageID));

                            // echo "<img  src='$imagePath' height='500px;'>";
                        }
                    }
                ?>

            </div>
            
            <div id="viewletterimages" class="letter_thumbnails">
                <!-- <img  src="<?=BASE_URL?>application/views/flat/Magazine/001.jpg" title="Get E_Book From Google Play Book"/><br /> -->
                <a style="text-decoration: none; color: Black; font-size: 20px;" class="_df_custom" href="#"  source="<?=DATA_URL?><?=$data['details']['id'] . '/' . "001.pdf"?>"><center>
                <br />
                    <img  src='<?=DATA_URL?><?=$data['details']['id'] . '/' . "0001.JPG"?>' height='300px;'>
                </a> </center> 
            </div>
        </div>            
        <div class="col-md-4">
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

<script src="<?=BASE_URL?>application/views/describe/dflip/js/libs/jquery.min.js" type="text/javascript"></script>
<script src="<?=BASE_URL?>application/views/describe/dflip/js/dflip.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>
