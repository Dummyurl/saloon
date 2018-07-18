<style>
body{
	padding:0;
}
</style>
<div class="banner">
  <div class="container">
    <div class="col-md-6"></div>
    <div class="col-md-6">
      <div class="inr-bnr-form">
        <div class="bnr-form animated fadeInLeft">
		<div class="search-header">
          <h1>Book Instantly</h1>
          <h2> 24/7 Access to top salon's and spa's </h2>
		  </div>
          <div class="bnr-form-srchmain">
          <form action="<?php echo base_url();?>search" method="post">
            <!-- <div class="col-md-12">
              <div class="srch-input shop-autocomplete">
                <input autocomplete="off" type="text" data-submit="0" class="form-control" id="search-shop" name="shopname" placeholder="Shop Name" aria-describedby="basic-addon1" >
                <ul class="dropdown-menu txtshop" style="margin-left:15px;margin-right:0px; width:94%; margin-top:-20px;" role="menu" aria-labelledby="search-shop"  id="DropdownShop">
          		</ul>
              </div>
            </div> -->
            <div class="col-md-12">
              <div class="place-select">
                
                <select name="city" id="fxselect">
                  <option selected="" value="">City</option>
                  <?php
                  if(isset($data->cities_list)) {
                  foreach($data->cities_list as $city) { ?>
                          <option value="<?php echo $city->city; ?>"><?php echo $city->city; ?></option>
                  <?php }
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="place-select">
                
                <select name="location" id="fxselect">
                  <option selected="" value="">Area</option>
                  <?php
                  if(isset($data->locations_list)) {
                  foreach($data->locations_list as $location) { ?>
                          <option value="<?php echo $location->location; ?>"><?php echo $location->location; ?></option>
                  <?php }
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="place-select">
                <select name="services" id="fxselect">
                  <option selected="" value="">All Category</option>
                  <?php
				  if(isset($data->services)) {
				  foreach($data->services as $service) { ?>
                  <option value="<?php echo $service->id; ?>"><?php echo $service->service_name; ?></option>
				  <?php }
				  }
				  ?>
                </select>
              </div>
            </div>

             <!-- <div class="col-md-12">


                  <div class="demo">
 				<div class="row">


            <div class="col-md-6">
            <div class="date-input">
            <p id="basicExample">
            <input name="date" type="text" class="date start" />
            </p>

            <!-- valuee="2:30 AM" data-value="0:00" 
            </div>
            </div>


            <div class="col-md-6">
            <div class="time-input">
            <p id="basicExample">
            <input name="time" type="text" class="time start" />

            </p>
            <!-- valuee="2:30 AM" data-value="0:00" 
            </div>
            </div>



            </div>



            </div>

              </div>-->
            <div class="col-md-12">
              <p class="fieldset">
                <input type="submit" value="Explore Now" class="srchbutton">
              </p>
            </div>
           </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--<div id="slider" class="aslider" data-duration="10" >
	<img src="<?php //echo base_url();?>assets/images/slide/01.jpg" style="width:100%;"/><span class="bnr-form-srchmain"> </span>
  <div class="aslide" data-duration="5" > <img src="<?php //echo base_url();?>assets/images/slide/02.jpg"/> </div>
  <div class="aslide" data-duration="5" > <img src="<?php //echo base_url();?>assets/images/slide/01.jpg"/> </div>
</div>-->

<!-- About section-->
<div class="about">
	<div class="container">
		<div class="col-md-5">
			<div class="abt-imgt">
				<img src="<?php echo base_url();?>assets/images/about-image.png">
			</div>
		</div>
		<div class="col-md-7">
			<div class="abt-content">
				<div class="abt-description">
					<h1 class="title"><span>About</span> Spot Saloon</h1>
					<p><span class="start-content">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a class="btn-style" href="#">Read More</a>
				</div>
			</div>
		</div>
	</div>
</div>
        <!-- CLM 1  EASY AND SIMPLE  -->
<div class="special-offers">
  <div class="container">
    <div class="row">
    <h1 class="title"><span>Special</span> Offers </h1>
      <div class="col-md-12 owl-carousel owl-theme">
			  
			   
			<div class="offer-list">
				<div class="offer_image">
					<img src="<?php echo base_url(); ?>assets/images/offers/1.jpeg">
					<h3>Top 15 Nail Salons</h3>
				</div>
			</div>
			<div class="offer-list">
				<div class="offer_image">
					<img src="<?php echo base_url(); ?>assets/images/offers/2.jpeg">
					<h3>Benefit Bold is Beautiful</h3>
				</div>
			</div>
			<div class="offer-list">
				<div class="offer_image">
					<img src="<?php echo base_url(); ?>assets/images/offers/3.jpeg">
					<h3>Surprise them!</h3>
				</div>
			</div>
			<div class="offer-list">
				<div class="offer_image">
					<img src="<?php echo base_url(); ?>assets/images/offers/4.jpeg">
					<h3>10% Cashback</h3>
				</div>
			</div>
      </div>
      
      
    </div>
  </div>
</div>
<div class="easyclm1">
  <div class="container">
    <div class="row">
    
      <div class="col-md-12">
       <h1>Salons of the week</h1>
	   <div class="reviews-list">
			<div class="reviews_image" style="background-image:url('<?php echo base_url(); ?>assets/images/offers/4.jpeg')">
				
			</div>
			<div class="reviews-content">
				<h3>The Aesthetics Medical Clinic - Paragon</h3>
				<p>The Aesthetics Medical Clinic was first established in 2005. They provide a comprehensive range of aesthetics solutions by a panel of qualified and experienced doctors. </p>
			</div>
	   </div>
	   <div class="reviews-list">
			<div class="reviews_image" style="background-image:url('<?php echo base_url(); ?>assets/images/offers/4.jpeg')">
			
			</div>
			<div class="reviews-content">
				<h3>The Aesthetics Medical Clinic - Paragon</h3>
				<p>The Aesthetics Medical Clinic was first established in 2005. They provide a comprehensive range of aesthetics solutions by a panel of qualified and experienced doctors. </p>
			</div>
	   </div>
	   <div class="reviews-list">
			<div class="reviews_image" style="background-image:url('<?php echo base_url(); ?>assets/images/offers/4.jpeg')">
				
			</div>
			<div class="reviews-content">
				<h3>The Aesthetics Medical Clinic - Paragon</h3>
				<p>The Aesthetics Medical Clinic was first established in 2005. They provide a comprehensive range of aesthetics solutions by a panel of qualified and experienced doctors. </p>
			</div>
	   </div>
      </div>
      
    </div>
  </div>
</div>

        <!-- EDITORS PICKS -->
        	<?php
//	if(!empty($data->cycle_slider)) {
	?>
    <?php // if(count($data->cycle_slider) > 3) { ?>
   <!-- <div class="editors-picks-main">
    <div class="container">
    <div class="row">

    	<h1> EDITOR'S PICKS </h1>
        <h2> A new way to discover top salon's. </h2>
        <div class="editors-picks-sparator"></div>

    </div>
    </div>-->

        <!-- EDITORS PICK SLIDER  -->

 <!--<div class="editor-pick-slider">-->
   <?php
  // foreach($data->cycle_slider as $cs) {
   ?>
  <!--  <li><div class="box"><img src="<?php //echo $cs->image;?>">
       <div class="white"><h2 class="white-text"><?php //echo $cs->shop_name;?></h2><hr>
           <a href="<?php //echo base_url()."shop/book/".strtolower(str_replace(" ","-",$cs->shop_name))."-".$cs->id;?>"><div class= "book"><h2>BOOK NOW</h2></div></a></div></div>
    </li> -->
  <?php
//  }
  ?>

 <!--  </div>
   </div> -->
     <?php
  //   }
//	}
     ?>

<!-- WHATS NEW -->
	<?php
//	if(!empty($data->whats_new)) {
	?>
  <!-- <div class="wthats-new-main">
  <div class="container">
    <div class="row">
      <div id="wrap">
        <div id="next"><img src="<?php //echo base_url();?>assets/images/wtsnw_left.png" alt=""></div>
        <div id="prev"><img src="<?php //echo base_url();?>assets/images/wtsnw_right.png" alt=""></div>
        <div id="page" style="width:99%">

          <?php
		//  foreach($data->whats_new as $whats_new) {
		  ?>
          <li class="width100">
            <div class="out-wrap">
              <div class="col-md-6"><img src="<?php// echo $whats_new->image;?>" style="max-width:460px"></div>
              <div class="wts-nw-cnt col-md-5">
                <h1><?php// echo $whats_new->title;?></h1>
                <h2><?php //echo $whats_new->subtitle;?></h2>
                <p><?php// echo $whats_new->description;?></p>
                <a href="<?php //echo base_url()."shop/view/".str_replace(" ","-",strtolower($whats_new->shop_name))."-".$whats_new->shop_id;?>">
                <div class="wts-shopbtn"> SHOP NOW </div>
                </a> </div>
            </div>
          </li>

          <?php
		 // }
		  ?>
        </div>
      </div>
    </div>
  </div>
</div> -->
	<?php
//	}
	?>










<!-- 

</div> -->



        <!-- CATEGORY  -->
     

<div class="category-main">
  <div class="container">
    <div class="row">
      <h1> BROWSE BY CATEGORY </h1>
      <h2> A new way to discover top salon's. </h2>
      <div class="category-main-sparator"></div>
      <div class="col-md-12">
        <div class="category-iconmain">

          <ul>

           <?php foreach($myservices as $service) { 


            ?>
           
              
            <li class="serclick"> 
               <form action="<?php echo base_url();?>search" method="post">
            <!--  <input type="text"  name="services" value="<?php //echo $service->id; ?>" > -->

              <button type="submit"><img src="<?php echo base_url();?>assets/images/upload/<?php echo $service->service_icon; ?>" alt=""/>
              <p> <?php echo $service->service_name; ?> </p></button>
               </form>
            </li>
          
            
          <?php } ?>
          </ul>
          <script>
            $(document).ready(function(){
              $('.serclick').click(function(){
                $(this).submit();
              })
            })
          </script>
        </div>
      </div>
    </div>
  </div>
</div>
 
<div class="app-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 app-content">
				<h2>Anywhere, Anytime</h2>
				<p>Lorem ipsum dolor sit amet, dapibus ac enim mauris sed aliquam phasellus, wisi in dictum, in id donec facilisis sodales. </p>
				<div class="app-links">
        <a class="app-link" href="#" target="_blank">
          <img src="<?php echo base_url();?>assets/images/apple.png">
        </a>
        <a class="app-link" href="#" target="_blank">
          <img src="<?php echo base_url();?>assets/images/playstore.png">
        </a>
      </div>
			</div>
			<div class="col-md-6">
			<img src="<?php echo base_url();?>assets/images/phones_new.png">
			</div>
		</div>
	</div>
</div>
        <!-- FEATURES TESTIMONIAL -->

  <div class="testino-main">
  <div class="row">
  <div class="container">
    <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                 </ol>
 
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
<?php
      if(!empty($data->testimonials)) {
      foreach($data->testimonials as $testimonial) {
      ?>
                    <div class="item">
                        <div class="fill">
                            <div class="inner-content">
                                <div class="carousel-img">
                                   <img src="<?php echo $testimonial->image;?>" alt="" style="width:150px; height:150px;">
                                </div>
                                <div class="carousel-desc">

                                     <h1> <?php echo $testimonial->name;?> </h1>
                                   <p> <?php echo $testimonial->description;?>. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                 
   <?php
      }
      }
      ?>
                </div>
              
            </div>
    <!-- <div class="col-md-12">
      <div class="testino">
        <h1 class="align-center"> Testimonials </h1>
        <div class="col-md-12">
         <ul class="bxslider">

            <?php
    //  if(!empty($data->testimonials)) {
     // foreach($data->testimonials as $testimonial) {
      ?>
            <li>
              <blockquote>
                <div style="width:100%; text-align:center;"><img src="<?php //echo $testimonial->image;?>" alt="" style="border-radius:50%; width:150px; height:150px;"></div>
                <h1> <img src="<?php //echo base_url();?>assets/images/quote_left.png" alt=""> <?php //echo $testimonial->name;?> <img src="<?php //echo base_url();?>assets/images/quote_right.png" alt=""> </h1>
                <p> <?php //echo $testimonial->description;?>. </p>
              </blockquote>
            </li>
            <?php
   //   }
   //   }
      ?>
          </ul>
        </div>
      </div>
    </div> -->
    </div>
  </div>
</div>
<style type="text/css">
  html, body{
    width:100%;
    height:100%;
    background-color:#fff;
  font-family: 'Sansita', sans-serif;
    }
.carousel-inner,.carousel,.item,.container,.fill {
  height:100%;
  width:100%;
  background-position:center center;
  background-size:cover;
}
.slide-wrapper{display:inline;}
.slide-wrapper .container{padding:0px;}

/*------------------------------ vertical bootstrap slider----------------------------*/

.carousel-inner> .item.next ,  .carousel-inner > .item.active.right{ transform: translateY(100%); -webkit-transform: translateY(100%); -ms-transform: translateY(100%);
-moz-transform: translateY(100%); -o-transform: translateY(100%);  top: 0;left:0;}
.carousel-inner > .item.prev ,.carousel-inner > .item.active.left{ transform: translateY(-100%); -webkit-transform: translateY(-100%);  -moz-transform: translateY(-100%);
-ms-transform: translateY(-100%); -o-transform: translateY(-100%); top: 0; left:0;}
.carousel-inner > .item.next.left , .carousel-inner > .item.prev.right , .carousel-inner > .item.active{transform:translateY(0); -webkit-transform:translateY(0);
-ms-transform:translateY(0);-moz-transform:translateY(0); -o-transform:translateY(0); top:0; left:0;}

/*------------------------------- vertical carousel indicators ------------------------------*/
.carousel-indicators{
position:absolute;
top:0;
bottom:0;
margin:auto;
height:20px;
right:10px; left:auto;
width:auto;
}
.carousel-indicators li{display:block; margin-bottom:5px; border:1px solid #00a199; }
.carousel-indicators li.active{margin-bottom:5px; background:#00a199;}
/*-------- Animation slider ------*/

.animated{
  animation-duration:3s;
  -webkit-animation-duration:3s;
  -moz-animation-duration:3s;
  -ms-animation-duration:3s;
  -o-animation-duration:3s;
  visibility:visible;
  opacity:1;
  transition:all 0.3s ease;
}
.carousel-img{   
   display: inline-block;
    margin: 0 auto;
    width: 100%;
    text-align: center;
  }
.item img{margin:auto;visibility:hidden; opacity:0; transition:all 0.3s ease; -webkit-transition:all 0.3s ease; -moz-transition:all 0.3s ease; -ms-transition:all 0.3s ease; -o-transition:all 0.3s ease;}
.item1 .carousel-img img , .item1.active .carousel-img img{max-height:300px;}
.item1.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 1s ease; -webkit-transition:all 1s ease; -moz-transition:all 1s ease; -ms-transition:all 1s ease; -o-transition:all 1s ease;
animation-duration:2s; -webkit-animation-duration:2s; -moz-animation-duration:2s; -ms-animation-duration:2s; -o-animation-duration:2s; animation-delay:0.3s ; -webkit-animation-delay:0.3s;
-moz-animation-delay:0.3s;-ms-animation-delay:0.3s; }
.item .carousel-desc{color:#fff; text-align:center;}
.item  h2{font-size:50px; animation-delay:1.5s;animation-duration:1s; }
.item  p{animation-delay:2.5s;animation-duration:1s; width:50%; margin:auto;}

.item2 .carousel-img img , .item2.active .carousel-img img{max-height:300px;}
.item2.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item2 h2 , item2.active h2{visibility:hidden; opacity:0; transition:all 5s ease;}
.item2.active h2.animated{visibility:visible; opacity:1;  animation-delay:3s;}

.item .fill{padding:0px 30px; display:table; }
.item .inner-content{display: table-cell;vertical-align: middle;}
.item3 .col-md-6{float:none; display:inline-block; vertical-align:middle; width:49%;}

.item3.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:2s; animation-delay:0.3s}
.item3 h2 , item3.active h2{visibility:hidden; opacity:0; transition:all 5s ease; }
.item.item3 .carousel-desc{text-align:left;}
.item3.active h2.animated{visibility:visible; opacity:1;  animation-delay:1.5s}
.item3 p , item3.active p{visibility:hidden; opacity:0; transition:all 5s ease; width:100%;  }
.item3.active p.animated{visibility:visible; opacity:1;  animation-delay:2.5s;}

@media(max-width:991px)
{
  .item .carousel-desc , .item.item3 .carousel-desc{text-align:center;}
  .item .carousel-desc p {width:80%;}
  .item3 .col-md-6{width:100%; text-align:center;}
}
@media(max-width:768px)
{
.item .carousel-img img, .item.active .carousel-img img{max-height:155px;}
.item  h2{font-size:30px; margin-top:0px;}
.item .carousel-desc p{width:100%; font-size:12px;}
}
@media(max-width:480px)
{
.item  h2{font-size:30px;}
.item .carousel-desc p{width:100%;}
} 

</style>
 

<script type="text/javascript">
 $(document).ready(function(){
// invoke the carousel
    $('#myCarousel').carousel({
      interval:6000
    });
$('#myCarousel .carousel-inner .item:first-child').addClass('active');
// scroll slides on mouse scroll 
$('#myCarousel').bind('mousewheel DOMMouseScroll', function(e){

        if(e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
            $(this).carousel('prev');
      
      
        }
        else{
            $(this).carousel('next');
      
        }
    });

//scroll slides on swipe for touch enabled devices 

  $("#myCarousel").on("touchstart", function(event){
 
        var yClick = event.originalEvent.touches[0].pageY;
      $(this).one("touchmove", function(event){

        var yMove = event.originalEvent.touches[0].pageY;
        if( Math.floor(yClick - yMove) > 1 ){
            $(".carousel").carousel('next');
        }
        else if( Math.floor(yClick - yMove) < -1 ){
            $(".carousel").carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});
    
});
//animated  carousel start
$(document).ready(function(){

//to add  start animation on load for first slide 
$(function(){
    $.fn.extend({
      animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
          $(this).removeClass(animationName);
        });
      }
    });
       $('.item1.active img').animateCss('slideInDown');
       $('.item1.active h2').animateCss('zoomIn');
       $('.item1.active p').animateCss('fadeIn');
       
});
  
//to start animation on  mousescroll , click and swipe


 
     $("#myCarousel").on('slide.bs.carousel', function () {
    $.fn.extend({
      animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
          $(this).removeClass(animationName);
        });
      }
    });
  
// add animation type  from animate.css on the element which you want to animate

    $('.item1 img').animateCss('slideInDown');
    $('.item1 h2').animateCss('zoomIn');
    $('.item1 p').animateCss('fadeIn');
    
    $('.item2 img').animateCss('zoomIn');
    $('.item2 h2').animateCss('swing');
    $('.item2 p').animateCss('fadeIn');
    
    $('.item3 img').animateCss('fadeInLeft');
    $('.item3 h2').animateCss('fadeInDown');
    $('.item3 p').animateCss('fadeIn');
    });
});
 

</script>