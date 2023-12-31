<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=PUBLIC_URL?>js/jquery-1.11.0.min.js"></script>
 
    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="css/skeleton.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> -->
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
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.png">
</head>
<body>
<?php // echo file_get_contents( BASE_URL . 'vendor/analyticstracking.php' ); ?>
    <!-- Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav class="navbar navbar-default navbar-fixed-top wider">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
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
                    <!-- <li><a href="<?=BASE_URL?>#physical">Physical Space</a></li> -->
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>Contact_info">Contact</a></li>
                    <!-- <li><a>·</a></li> -->
                    <li>
                    <li>
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
<!-- <?php
if(isset($_SESSION['login']))
{
    echo ($_SESSION['login'] == 1) ? '<a href="' . BASE_URL . 'user/logout">Logout</a>' : '<a href="' . BASE_URL . 'user/login">Login</a>';
}
else
{
    echo '<a href="' . BASE_URL . 'user/login">Login</a>';
}
?> -->
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
