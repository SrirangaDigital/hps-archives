<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <ul class="list-inline sub-nav">
                <li><a href="<?=BASE_URL?>listing/Categories/Photograph?select=Event">Photographs</a></li>
                <!-- <li><a>·</a></li> -->
                <li><a href="<?=BASE_URL?>listing/Categories/Magazine?select=Name">Magazine</a></li>
                <!-- <li><a>·</a></li> -->
                <li><a href="<?=BASE_URL?>listing/Categories/Newspaper?select=Year">News Paper Clippings</a></li>
                <!-- <li><a>·</a></li> -->
                <!-- <li><a href="<?=BASE_URL?>listing/artefacts/Multimedia%20File?Category=Oral+History+Archives">Oral History Archives</a></li> -->
                <!-- <li><a>·</a></li> -->
		<!-- <li><a href="<?=BASE_URL?>listing/artefacts/Miscellaneous%20Video?Category=Videos">Videos</a></li> -->
                <li id="searchForm">
                    <form class="navbar-form" role="search" action="<?=BASE_URL?>search/field/" method="get">
                        <div class="input-group add-on">
                            <input type="text" class="form-control" placeholder="Search" name="term" id="term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                <div class="checkbox" id="toggleSearchType">
                                    <!-- <label>
                                        <input type="checkbox"> Fulltext search
                                    </label> -->
                                </div>
                            </div>
                        </div>
                    </form>
				</li>
                <!-- <li><a>·</a></li> -->
                <li><a href="<?=BASE_URL?>search/advanced">Advanced Search</a></li>                
            </ul>
        </div>
    </div>
</div>


<?php

if(file_exists('application/views/' . $actualPath . '.php')) {
    require_once 'application/views/' . $actualPath . '.php';
}
elseif(file_exists('application/views/' . $actualPath . '/index.php')) {
    require_once 'application/views/' . $actualPath . '/index.php';
}
else{
    require_once 'application/views/error/index.php';
}

?>
