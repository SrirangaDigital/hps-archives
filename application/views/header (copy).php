<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if($pageTitle) echo $pageTitle . ' | '; ?>HPS</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" id="royal_enqueue_Lato-css" href="https://fonts.googleapis.com/css?family=Lato%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&amp;ver=1.0.0" type="text/css" media="all">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,300,600" rel="stylesheet" type="text/css">

    <!-- Javascript calls
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 
    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/normalize.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- <link rel="stylesheet" href="css/skeleton.css"> -->

    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/navbar.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/carousel.css?v=1.2">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/page.css?v=1.4">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/archive.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/general.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/flat.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/form.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/aux.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/social.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/viewer.css">
    <script type="text/javascript">var base_url = "<?= BASE_URL?>";</script>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/hpslogonew.png">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
</head>
<style type="text/css">
    .navbar-brand img {
  width: 100px;
}

.navbar-nav {
  align-items: center;
}
.dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
}
</style>
<body oncontextmenu="return false;" >
<?php // echo file_get_contents( BASE_URL . 'vendor/analyticstracking.php' ); ?>
    <!-- Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <!--  <nav class="navbar navbar-default navbar-fixed-top wider">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-primary-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?=BASE_URL?>#home">Home</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>About">About</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>#collection">Gallery</a></li>
                    <li><a href="#"><img src="<?=PUBLIC_URL?>images/hpslogonew.png" alt="HPS" class="img-circle logo"></a></li>
                    <li><a href="<?=BASE_URL?>Contact_info">Contact</a></li>
                    
                    <li>
                    <li>
                        <form class="navbar-form" role="search" action="<?=BASE_URL?>search/field/" method="get">
                        <div class="input-group add-on">
                            <input type="text" class="form-control" placeholder="Search" name="term" id="term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                <div class="checkbox" id="toggleSearchType">
                                </div>
                            </div>
                        </div>
                    </form>
                    </li>
                    <li>
                        <?php
                        if(isset($_SESSION['login']))
                        {
                            echo ($_SESSION['login'] == 1) ? '<a href="' . BASE_URL . 'user/logout">Logout</a>' : '<a href="' . BASE_URL . 'user/login">Login</a>';

                            echo ($_SESSION['login'] == 1) ? '<a href="' . BASE_URL . 'user/changePassword">ChangePassword</a>' : '<a href="' . BASE_URL . 'user/login">Login</a>';

                        }
                        else
                        {
                            echo '<a href="' . BASE_URL . 'user/login">Login-nn</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->


    <nav class="navbar navbar-default navbar-expand-lg ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                <ul class="navbar-nav  justify-content-center">
                    <li class="nav-item p-3">
                        <a class="nav-link active" aria-current="page" href="<?=BASE_URL?>#home">Home</a>
                    </li>
                    <li><a>·</a></li>
                    <li class="nav-item p-3">
                        <a class="nav-link "  href="<?=BASE_URL?>About">About</a>
                    </li>
                    <li><a>·</a></li>

                    <li class="nav-item p-3">
                        <a class="nav-link " href="<?=BASE_URL?>#collection">Gallery</a>
                    </li>
                     <li><a>·</a></li>
                     <li class="nav-item">
                        <a class="nav-link"  href="<?=BASE_URL?>Contact_info">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >
                          <img style="height: 120px;" class="img-fluid" src="<?=PUBLIC_URL?>images/hpslogonew.png"  alt="Navbar_image">
                      </a>
                  </li>
                   
                    <!-- <li><a>·</a></li> -->
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
                    <li><a>·</a></li>
                    <li class="nav-item p-3 text-end">
                        <?php
                        if(isset($_SESSION['login']))
                        {
                            echo ($_SESSION['login'] == 1) ? '<a href="' . BASE_URL . 'user/logout">Logout</a>' : '<a href="' . BASE_URL . 'user/login">Login</a>';

                            // echo ($_SESSION['login'] == 1) ? '<a href="' . BASE_URL . 'user/changePassword">ChangePassword</a>' : '<a href="' . BASE_URL . 'user/login">Login</a>';

                        }
                        else
                        {
                            echo '<a href="' . BASE_URL . 'user/login">Login</a>';
                        }
                        ?>


                    </li>
                     <li><a>·</a></li>
                    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Help
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=PUBLIC_URL?>help.pdf" target="_blank">Advanced Search Manual</a></li>
            <li><a class="dropdown-item" href="<?=PUBLIC_URL?>Users_Manual.pdf" target="_blank">User Manual</a></li>
            <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
                </ul>
                
            </div>
        </div>
    </nav>
    <!-- End Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
