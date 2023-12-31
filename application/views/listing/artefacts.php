<?php
    $auxiliary = array_pop($data);
    $parentType = $data[0]['Type'];
    $filter = $auxiliary['filter'];

?>
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
</script>

<div id="grid" class="container-fluid" data-page="1" data-go="1">
    <div id="posts">
        <div class="post no-border">
            <div style="background-color: orange;" class="albumTitle <?=$parentType?>">
                <span class="head"><?=$parentType?></span><br />
<?php foreach (array_reverse($filter) as $key => $value) { ?>
                <span class="select"><em><?=preg_replace('/([A-Z])/', " $1", $key)?>:</em> <?=$value?></span><br />
<?php } ?>
            <!-- </div> -->
        </div>
<?php foreach ($data as $row) { ?>
        <div class="post">
            <a href="<?=BASE_URL?>describe/artefact/<?=$row['idURL']?>?<?=$auxiliary['filterString']?>" title="View Details">
                <img src="<?=$row['thumbnailPath']?>">
                <p class="image-desc"><?=$row['cardName']?></p>
            </a>
        </div>
<?php } ?>
    </div>
</div>
<div id="loader-icon">
    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><br />
    Loading more items
</div>
