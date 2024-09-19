<div class="container mt-5 text-center">
    <div class="row">
        <div class="col-md-12 justify-content-center">
            <ul class="list-unstyled">
                <li class="d-inline p-3"> <a class="link-secondary sub-nav" href="<?=BASE_URL?>listing/Categories/Photograph?select=Event">
                    Photographs
                </a></li>
                <li class="d-inline p-3"><a class="link-secondary sub-nav" href="<?=BASE_URL?>listing/Categories/Magazine?select=Name">
                    Magazine
                </a></li>

                <?php
                if(isset($_SESSION['login']))
                {
                    echo"<li class='d-inline'> <a href='listing/categories/Newspaper?select=Year'>
                </a>News Paper Clippings</li>";
                }
                ?>
                <li class="d-inline p-3"><a class="link-secondary sub-nav" href="<?=BASE_URL?>listing/categories/CentenaryPhotograph?select=Event">Centenary Photographs</a></li>

                <li class="d-inline"><a class="link-secondary sub-nav" href="<?=BASE_URL?>search/advanced">Advanced Search</a></li><br />
                <li class="d-inline p-3 mt-3">
                    <form class="form-search " role="search" action="<?=BASE_URL?>search/field/" method="get">
                        <div class="input-group add-on">
                            <input type="text" class="form-control" placeholder="Search" name="term" id="term">
                            <div class="input-group-btn ">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                <div class="checkbox" id="toggleSearchType">
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
                
            </ul>
        </div>
    </div>
</div>

        <!-- Column 1 -->
        <!-- <div class="col-md-12 list-inline text-center">
            <ul>
                <li>
           
          </li>
          
          
          <li class="nav-item p-3">
                        <form class="navbar-form d-flex" role="search" action="<?=BASE_URL?>search/field/" method="get">
                            <div class="input-group add-on">
                                <input type="text" class="form-control" placeholder="Search" name="term" id="term">
                                <div class="input-group-btn ">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <div class="checkbox" id="toggleSearchType">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
        <a class="link-secondary sub-nav" href="<?=BASE_URL?>search/advanced">Advanced Search</a>



            <ul class="list-inline sub-nav">
                <li><a href="<?=BASE_URL?>listing/Categories/Photograph?select=Event">Photographs</a></li>
                <!-- <li><a>·</a></li> -->
                <!-- <li><a href="<?=BASE_URL?>listing/Categories/Magazine?select=Name">Magazine</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>listing/Categories/Newspaper?select=Year">News Paper Clippings</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>listing/artefacts/Multimedia%20File?Category=Oral+History+Archives">Oral History Archives</a></li>
                <li><a>·</a></li>
		<li><a href="<?=BASE_URL?>listing/artefacts/Miscellaneous%20Video?Category=Videos">Videos</a></li>
                <li id="searchForm">
                    <form class="navbar-form" role="search" action="<?=BASE_URL?>search/field/" method="get">
                        <div class="input-group add-on">
                            <input type="text" class="form-control" placeholder="Search" name="term" id="term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                <div class="checkbox" id="toggleSearchType">
                                    <label>
                                        <input type="checkbox"> Fulltext search
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
				</li>
                
                <li><a href="<?=BASE_URL?>search/advanced">Advanced Search</a></li>                
            </ul>
        </div>
    </div>
</div> -->


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
