<div class="container">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <p>&nbsp;</p>    
        </div>
    </div>
</div>
<div class="container gap-above">
    <div class="row">
        <div class="col-md-12 main">
            <h1>Magazines</h1>
            
        </div>
    </div>
</div><br />
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Basic HTML Template</title>

<!-- Flipbook StyleSheets -->
<link href="dflip/css/dflip.min.css" rel="stylesheet" type="text/css">

</head>
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
<body>
    <div class="container">
        <a  href="<?=BASE_URL?>Magazine/first" ><img  src="<?=BASE_URL?>application/views/flat/Magazine/two.jpg" height="400px;" alt="image" />
        </a>
        <a  href="<?=BASE_URL?>Magazine/first" ><img  src="<?=BASE_URL?>application/views/flat/Magazine/one.jpg" height="400px;" alt="image"/>
        </a>
        
        
    </div>

	
							

<!-- Scripts -->
<script src="dflip/js/libs/jquery.min.js" type="text/javascript"></script>
<script src="dflip/js/dflip.min.js" type="text/javascript"></script>

</body>
</html>
