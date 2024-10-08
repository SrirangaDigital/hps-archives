<?php 
    $auxiliary = array_pop($data);
    $parentType = $auxiliary['parentType'];
    $filter = $auxiliary['filter'];
?>

<style type="text/css">
    .capital{
        text-transform: uppercase;
    }
</style>
<div class="gap-above-med">
</div>

<?php
    if($parentType == "Magazine" ){ ?>
        <div id="grid" class="container" data-page="1" data-go="1">
            <div class="row  ms-5 me-4 mt-5" id="posts">
                <div class="post no-border p-2">
                    <div style="background-color: orange;"class="albumTitle <?=$parentType?>">
                        <span class="head"><?=$parentType?>S</span><br />
        <?php foreach ($filter as $key => $value) { ?>
                        <span class="select"><em><?=preg_replace('/([A-Z])/', " $1", $key)?>:</em> <?=$value?></span><br />
        <?php } ?>
                        <span class="select"><?=preg_replace('/([A-Z])/', " $1", $auxiliary['selectKey'])?><em> - wise</em></span>
                    </div>
                </div>
        <?php foreach ($data as $row) {  ?>
                <div class="post">
                    <a href="<?=$row['nextURL']?>" title="<?=$row['name']?>">
                        <div class="fixOverlayDiv">
                            <img class="img-responsive" src="<?=$row['thumbnailPath']?>">
                            <div class="OverlayText"><?=$row['leafCount']?> <?=$row['parentType']?><?php if($row['leafCount'] > 1) echo 's'; ?><br /><span class="link"><i class="fa fa-link"></i></span></div>
                        </div>
                        <p class="image-desc"><strong><?=$row['name']?></strong></p>
                    </a>
                </div>
        <?php } ?>
            </div>
        </div>
<?php } else if ($parentType == "Photograph" || $parentType == "Newspaper" || $parentType == "CentenaryPhotograph"){ ?>

<div  id="grid" class="container" data-page="1" data-go="1">
    <div class="row  ms-5 me-4 mt-5" id="posts">
<?php foreach ($data as $row) {  ?>
        <div class="post no-border p-2">
            <a href="<?=$row['nextURL']?> " title="<?=$row['name'] ?>">
                <div style="background-color: lightgray;" class="border card w-100 rounded">
                    <div class="card-body">
                        <p style="text-align: center; font-size: 16px;"class=" card-title"><strong class="capital"><?=$row['name']?></strong></p><br />
                        <div style="padding: 10px;">
                            <?php echo $row['leafCount'] ; echo ' '; echo $row['parentType']; ?><br /><span class="link card-text"></span>
                        </div>
                    </div>
                </div>
            </a>  
        </div>
<?php } ?>
    </div>
   
    </div>
<?php } ?>

<div id="loader-icon">
    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><br />
    Loading more items
</div>

<script>
$(document).ready(function(){

    if($('.post').length < <?=PER_PAGE?>) {

        $('#grid').attr('data-go', '0');
        // $('#grid').append('<div id="no-more-icon">No more<br />items<br />to show</div>');
    }

    $(window).scroll(function(){

        if ($(window).scrollTop() >= ($(document).height() - $(window).height())* 0.75){

            if($('#grid').attr('data-go') == '1') {

                var pagenum = parseInt($('#grid').attr('data-page')) + 1;
                $('#grid').attr('data-page', pagenum);

                var nextURL = window.location.href + '&page=' + pagenum;
                getresult(nextURL);
            }
        }
    });
});     
</script>



<!-- div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div> -->