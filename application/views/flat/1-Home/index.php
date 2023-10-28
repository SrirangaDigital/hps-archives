<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container-fluid" id="home">
    <div class="row">
        <div class="col-md-12 clear-paddings">
            <div class="fixOverlayDiv">
                <img class="img-responsive gap-above" src="<?=PUBLIC_URL?>images/stock/slide1.jpg">
                <div class="OverlayTextMain">
                    <div class="mainpage">
                        <h2>Hyderabad Public School</h2>
                        <p>The Journey of a Century , Established in 1923</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        <div class="container-fluid stats" id="collection">
            <div class="row clear-margins">
                <div class="col-md-12">
                    <h1>Gallery</h1>
                    <ul class="list-inline">
                        <li class="stat-elem">
                            <a href="<?=BASE_URL?>listing/categories/Photograph?select=Collection">
                                <h2><i class="fa fa-image"></i></h2>
                                <p>Photographs</p>
                            </a>
                        </li>
	                        <li class="stat-elem">
	                            <!-- <a href="<?=BASE_URL?>listing/categories/Publication?select=Publication"> -->
                                <a href="<?=BASE_URL?>Magazine">
	                                <h2><i class="fa fa-book"></i></h2>
	                                <p>Magazine</p>
	                            </a>
	                        </li>
                            <li class="stat-elem">
                                <!-- <a href="<?=BASE_URL?>listing/categories/Publication?select=Publication"> -->
                                <a href="<?=BASE_URL?>Documents">
                                    <h2><i class="fa fa-envelope"></i></h2>
                                    <p>Documents</p>
                                </a>
                            </li>







<!-- 	                        <li class="stat-elem">
	                            <a href="<?=BASE_URL?>listing/artefacts/Multimedia%20File?Category=Oral+History+Archives">
	                                <h2><i class="fa fa-volume-up"></i></h2>
	                                <p>Oral History Archives</p>
	                            </a>
	                        </li>
	                        <li class="stat-elem">
	                            <a href="<?=BASE_URL?>listing/artefacts/Miscellaneous%20Video?Category=Videos">
	                                <h2><i class="fa fa-video-camera"></i></h2>
	                                <p>Videos</p>
	                            </a>
	                        </li>                        
	                        <li class="stat-elem">
	                            <a href="<?=BASE_URL?>Photoexhibition">
	                                <h2><img class="exhibition-icon" src="<?=BASE_URL?>public/images/stock/exhibition-icon.png" alt="" /></h2>
	                                <p>Photo Exhibition</p>
	                            </a>
	                        </li> -->
                    </ul>
                </div>
                <!-- <div class="col-md-12">
                    <ul class="list-inline">
                        <li class="stat-elem">
                            <a href="<?=BASE_URL?>DAA" target="_blank">
                                <h2><i class="fa fa-trophy"></i></h2>
                                <p>Distinguished Alumnus Awardees</p>
                            </a>
                        </li>
                        <li class="stat-elem">
                            <a href="<?=BASE_URL?>Letters_from_the_Heritage_Centre">
                                <h2><i class="fa fa-envelope"></i></h2>
                                <p>Letters from the Heritage Centre</p>
                            </a>
                        </li>
                        <li class="stat-elem">
                            <a href="<?=BASE_URL?>Downloads">
                                <h2><i class="fa fa-download"></i></h2>
                                <p>Downloads</p>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
        

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
