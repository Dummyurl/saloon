
<!-- FOOTER -->
<?php
if(!isset($hide_spinner)) {
?>
<div class="loader-overlay spinner" align="center">
	
</div>

<img class="loader spinner" src="<?php echo base_url();?>assets/images/loading.gif">
<?php
}
?>
<div class="footer-main">
  <div class="container">
    <div class="row">
      <div class="ftr_list-main">
        
        
        <div class="col-md-4 col-sm-10">
          <div class="ftr_list-clm3">
            <h1> GET IN TOUCH WITH US </h1>
            <ul>
              <li><a href="#"> HELP </a></li>
              <li><a href="#"> Terms & Condition </a></li>
            </ul>
           
            <div class="ftr-call"><i class="fa fa-phone"></i> For Information call : 044 111 1111</div>
          </div>
        </div>
		
    
    </div>
  </div>
</div>
</div>
<div class="col-md-8">
			  <div class="ftr_social-main">
				<div class="ftr_social">
						<ul>
							<li><a title="Facebook" target="_blank" href="https://www.facebook.com/urbansoft"><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a title="Twitter" target="_blank" href="https://twitter.com/urbansoftt"><i class="fa fa-twitter fa-lg"></i></a></li>
							<li><a title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCJuigZJe1H0zhiwpI_DTF_Q"><i class="fa fa-youtube fa-lg"></i></a></li>
							<li><a title="Linked in" target="_blank" href="https://www.linkedin.com/company/urbansoft-technologies"><i class="fa fa-linkedin fa-lg"></i></a></li>
							<li><a title="Google+" target="_blank" href="https://plus.google.com/104105843918733649472"><i class="fa fa-google-plus fa-lg"></i></a></li>
							<li><a title="Pinterest" target="_blank" href="https://www.pinterest.com/urbansof/"><i class="fa fa-pinterest fa-lg"></i></a></li></ul>
					</div>
		</div>
      </div>

<div class="ftr-copyrht">
  <div class="container">
    <div class="row copy-right"> &copy; 2018 | All Right Reserverd | By <a href="#">Urbansoft</a></div>
  </div>
</div>

<!-- GENERAL JAVASCRIPT -->
<script src="<?php echo base_url();?>assets/js/aslider.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.cycle.all.js"></script>

<script src="<?php echo base_url();?>assets/js/customscript.js" type="application/javascript"></script>
    
<!-- SIGN IN AND SIGN UP -->
 
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.js" ></script>
<script src="<?php echo base_url();?>assets/js/owl.autoplay.js"></script>
<!-- TESTIMONIAL -->
   
<script src="<?php echo base_url();?>assets/js/editor-pick.js"></script>

<!-- TIME & DATE PICKER-->

<script src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js" type="text/javascript"></script>   
<script src="<?php echo base_url();?>assets/js/jquery.timepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.datetimepicker.full.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.date-dropdowns.js"></script>

<script src="<?php echo base_url();?>assets/js/simple-lightbox.js"></script>
<!-- reting plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.raty.min.js"></script>  
 <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB1br9lwKFyEpCnS5elLan_90CCsYeak6I&callback=initMap&libraries=places" type="text/javascript"></script> 
<script>
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
	autoplay:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
});
  
});
</script>

</body>
</html>