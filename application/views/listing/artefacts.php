<?php
    $auxiliary = array_pop($data);
    $parentType = $data[0]['Type'];
    $filter = $auxiliary['filter'];
?>
<style type="text/css">
    .row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}
</style>
<script>
$(document).ready(function(){

    // $('.post.no-border').prepend('<div class="albumTitle <?=$parentType?>"><span><?=$parentType?></span></div>');

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
</script><br /><br />
<script type="text/javascript">
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>
<div class="post no-border p-2">
            <div style="background-color: orange;" class="albumTitle <?=$parentType?>">
                <strong><span  class="head"><?=$parentType?></span></strong><br />
<?php foreach (array_reverse($filter) as $key => $value) { ?>
                <span class="select"><em><?=preg_replace('/([A-Z])/', " $1", $key)?>:</em> <?=$value?></span><br />
<?php } ?>
        </div>

<?php
    if($parentType == "Magazine" ){ ?>

        <div id="grid" class="container text-center" data-page="1" data-go="1">
    <div class="row  ms-5 me-5 text-center" id="posts">
        <!-- <div class="post no-border p-2"> -->
            <!-- <div style="background-color: orange;" class="albumTitle <?=$parentType?>">
                <strong><span  class="head"><?=$parentType?></span></strong><br />
<?php foreach (array_reverse($filter) as $key => $value) { ?>
                <span class="select"><em><?=preg_replace('/([A-Z])/', " $1", $key)?>:</em> <?=$value?></span><br />
<?php } ?>
        </div> -->
<?php foreach ($data as $row) { ?>
        <div class="post no-border ms-5 me-5">
            <a href="<?=BASE_URL?>describe/magazine/<?=$row['idURL']?>?<?=$auxiliary['filterString']?>" title="View Details">
                <!-- <img src="<?=$row['thumbnailPath']?>" height="250px;" width="300px;"> -->
                <strong><p style="font-size: 20px" class="card-title image-desc"><?=$row['cardName']?></p></strong>
            </a>
        </div>
<?php } ?>
    </div>
</div>

<?php } ?>
<?php if ($parentType == "Photograph" || $parentType == "Newspaper" || $parentType == "CentenaryPhotograph"){ ?>
    <div id="grid" class="container-fluid text-center" data-page="1" data-go="1">
    <div class="row  ms-5 me-5 text-center" id="posts">
        <!-- <div class="post no-border p-2">
            <div style="background-color: orange;" class="albumTitle <?=$parentType?>">
                <span class="head"><?=$parentType?></span><br />
<?php foreach (array_reverse($filter) as $key => $value) { ?>
                <span class="select"><em><?=preg_replace('/([A-Z])/', " $1", $key)?>:</em> <?=$value?></span><br />
<?php } ?>
        </div> -->
<?php foreach ($data as $row) { ?>
        <div class="post no-border ms-3 me-3">
            <a href="<?=BASE_URL?>describe/artefact/<?=$row['idURL']?>?<?=$auxiliary['filterString']?>" title="View Details">
                <img class="card-img-top img-fluid" src="<?=$row['thumbnailPath']?>">
                <p class="card-title image-desc col"><?=$row['cardName']?> </p>
            </a>
        </div>
<?php  } ?>
    </div>
</div>
<?php } ?>

<!-- <div id="loader-icon">
    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><br />
    Loading more items
</div>
 -->