<script src='https://www.google.com/recaptcha/api.js'></script>
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

<!-- <style type="text/css">
    .carousel > .carousel-inner > .carousel-item > img{
    width:240px; /* Yeap you can change the width and height*/
    height:160px;
}
</style> -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img id="imght" src="<?=PUBLIC_URL?>images/stock/slidenew.jpg" class="d-block w-100 p-0" alt="backgroundimage">

            <div class="OverlayTextMain" >
                <h1>Hyderabad Public School</h1>
                <p>
                    The Journey of a Century , Established in 1923
                </p>
</div>
</div>
</div>
</div>

<div class="container-fluid blue text-center">
    <h1 class='mt-1'>About</h1>
    <p>The Hyderabad Public School is a co-educational, day & residential school in Hyderabad. One of the oldest educational institutions in the youngest state of the country – it is this range that best defines The Hyderabad Public School</p>
    <p>In 1919, a proposal was presented to the Seventh Nizam, H.E.H. Mir Osman Ali Khan by the Hon’ble H. Weikfield, Director General of the Court of Wards (Department of Revenue) to establish a fully residential school on the lines of Eton College, London, to give the sons of Jagirdars an enriching learning experience. &nbsp;&nbsp;&nbsp;<a style="color: white; "href="<?=BASE_URL?>About">Read more...</a></p>
</div>
<hr class="border border-primary border-3 opacity-75">





<!-- <div id="carouselExample" class="carousel slide ">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?=PUBLIC_URL?>images/stock/slidenew.jpg" class="d-block w-100" alt="Building_image">
            <div class="OverlayTextMain">
                <div class="mainpage">
                    <h2>Hyderabad Public School</h2>
                    <p>The Journey of a Century , Established in 1923</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="container-fluid stats text-center">
    <div class="row"><br />
        <h1 class="mt-5">Gallery</h1>
        <div class="col-20 col"></div>
        <div class="col-20 col stat-elem mt-5 ">
            <a href="<?=BASE_URL?>listing/categories/Photograph?select=Event">
                <h2><i class="fa fa-image"></i></h2>
                <p class="">Photographs</p>
            </a>
        </div>
        <div class="col-20 col stat-elem mt-5">
            <a href="<?=BASE_URL?>listing/Categories/Magazine?select=Name">
                <h2><i class="fa fa-book"></i></h2>
                <p>Magazine</p>
            </a>
        </div>

        <div class="col-20 col stat-elem mt-5 ">
            <a href="<?=BASE_URL?>listing/categories/CentenaryPhotograph?select=Event">
                <h2><i class="fa fa-image"></i></h2>
                <p class="">Centenary Photographs</p>
            </a>
        </div>
        <div class="col-20 col" ></div>
    </div><br />
    <div class="mt-5">&nbsp;</div>
</div> -->

<?php
        if(!isset($_SESSION['login']))
        {
            echo"

<div class='container-fluid stats p-2 text-center'>
<h1 id='collection' class='mt-5'>Gallery</h1>
  <div class='row'>
    <div class='col stat-elem'>
      <a href='listing/categories/Photograph?select=Event'>
                <h2><i class='fa fa-image'></i></h2>
                <p class=''>Photographs</p>
            </a>
    </div>
    <div class='col stat-elem'>
       <a href='listing/Categories/Magazine?select=Name'>
                <h2><i class='fa fa-book'></i></h2>
                <p>Magazine</p>
            </a>
    </div>
    <div class='col stat-elem'>
      <a href='listing/categories/CentenaryPhotograph?select=Event'>
                <h2><i class='fa fa-image'></i></h2>
                <p class=''>Centenary Photographs</p>
            </a>
    </div>
  </div>
</div>
 ";
        }
        ?>






<?php
        if(isset($_SESSION['login']))
        {
            echo"

<div class='container-fluid stats p-2 text-center'>
<h1 id='collection' class='mt-5'>Gallery</h1>
  <div class='row'>
    <div class='col stat-elem'>
      <a href='listing/categories/Photograph?select=Event'>
                <h2><i class='fa fa-image'></i></h2>
                <p class=''>Photographs</p>
            </a>
    </div>
    <div class='col stat-elem'>
       <a href='listing/Categories/Magazine?select=Name'>
                <h2><i class='fa fa-book'></i></h2>
                <p>Magazine</p>
            </a>
    </div>
    <div class='col stat-elem'>
      <a href='listing/categories/CentenaryPhotograph?select=Event'>
                <h2><i class='fa fa-image'></i></h2>
                <p class=''>Centenary Photographs</p>
            </a>
    </div>
    <div class='col stat-elem'>
       
           
            <a href='listing/categories/Newspaper?select=Year'>
            <h2><i class='fa fa-envelope'></i></h2>
            <p class=''>News Paper Clippings</p>
            </a>
           
    </div>
  </div>
</div>
 ";
        }
        ?>







<script>
var images = new Array ("forthcoming-event/DSCN0602.JPG", "forthcoming-event/DSCN0603.JPG", "forthcoming-event/DSCN0606.JPG", "forthcoming-event/DSCN0607.JPG", "forthcoming-event/DSCN0612.JPG");
var index = 1;
 
function rotateImage()
{
  $('#myImage').fadeOut('fast', function()
  {
    $(this).attr('src', base_url+"public/images/stock/" + images[index]);
 
    $(this).fadeIn('fast', function()
    {
      if (index == images.length-1)
      {
        index = 0;
      }
      else
      {
        index++;
      }
    });
  });
}
 
$(document).ready(function()
{
  setInterval (rotateImage, 2500);

});


</script>
