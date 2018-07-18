<?php 
//var_dump($data->data);

if(isset($data->data) and !empty($data->data)) {
  
$reviews = $data->review;
$ad = $data->ad;
$data = $data->data[0];

//var_dump($reviews);
$map_data = '{ "DisplayText": "'.$data->shop_name.'", "Location": "'.$data->location.'", "LatitudeLongitude": "'.$data->latitude.','.$data->longitude.'"}';
$maps = '['.$map_data.']';
 ?>
<div class="container">
         <div class="row">
         
            <div class="shop-page-main">
            <div class="shop-page-banner">
              <div class="col-lg-12 padding0">
                <div class="col-lg-8 padding0">
                  <div class="booking-shop" style="background-image:url(<?php echo $data->image; ?>);">
                    <div class="search-result-ratingbtm">
                      <div class="col-md-9 search-result-rating-txt font-white"> <?php echo $data->rating_count; ?> Ratings
                      <?php
            $rating = "0";
            $rtg = "0";
            if($data->total_rating) {
              $rating = number_format($data->total_rating / $data->rating_count,1);
            }
            if(!empty($data->ratings)) {
              $rt = 0;
              $rating = explode("<=>", $data->ratings);
              foreach($rating as $ra) {
                $r = explode("<#>", $ra);
                $rt += $r[1];
              }
              $rtg = number_format($rt/$data->rating_count,1);
            }
            ?>
                        <div class="search-result-rating"><?php echo $rtg; ?></div>
                      </div>
                      <div class="col-md-3">
                         <div class="search-result-booking">
                             <a class="viewprflbook-btn btn" href="<?php echo base_url(); ?>shop/book/<?php echo $id; ?>">BOOK NOW</a>
                            </div>
                            </div>
                    </div>
                    <div class="booking-shop-downlayer">
                      <div class="booking-shop-downlayer-wrap">
                        <div class="col-md-8">
                          <div class="booking-shop-name font-white">
                            <h1><?php echo $data->shop_name; ?></h1>
                          </div>
                        </div>
                        <div class="col-md-4">
                        <?php
              $user_data = is_logged();
              $rating_class='';
              if(isset($user_data)) {
                $rating_class=$user_data['id']."-".$data->id;
              }
              $rating = 5;
              if($data->total_rating) {
                $rating = $data->total_rating / $data->rating_count;
              }
            ?>
                          <div class="starss">
                            <div class="raty" data-read="true"  data-rate="<?php echo $rtg; ?>"></div>
                            <?php /*?><form id="shop_ratingsForm">
                              <div class="stars floatRight" <?php echo $rating_class; ?>>
                                <input type="radio" name="star" class="star-1" id="star-1" value="1" />
                                <label class="star-1" for="star-1">1</label>
                                <input type="radio" name="star" class="star-2" id="star-2" value="2" />
                                <label class="star-2" for="star-2">2</label>
                                <input type="radio" name="star" class="star-3" id="star-3" value="3" />
                                <label class="star-3" for="star-3">3</label>
                                <input type="radio" name="star" class="star-4" id="star-4" value="4" />
                                <label class="star-4" for="star-4">4</label>
                                <input type="radio" name="star" class="star-5" id="star-5" value="5" />
                                <label class="star-5" for="star-5">5</label>
                                <span></span> </div>
                            </form><?php */?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 padding0">
                  <div class="booking-map" id="map-canvas" style="width:390px; height:345px;">
                   <!-- <iframe src="https://maps.google.com/maps?q=10.0114534,76.3204042&hl=es;z=14&amp;output=embed" width="370" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31434.33408733962!2d76.29364515182942!3d9.99274090742782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scochin+salons!5e0!3m2!1sen!2sin!4v1445239014833" width="370" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Tab  -->
            <div class="shop-page-tabs">
              <div data-example-id="togglable-tabs" class="bs-example bs-example-tabs">
                <ul role="tablist" class="nav nav-tabs user-tab" id="myTabs">
                  <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="profile-tab" href="#profile">PROFILE</a></li>
                  <li role="presentation"><a aria-controls="profile" data-toggle="tab" id="services-tab" role="tab" href="#services">SERVICES</a></li>
                  <li role="presentation"><a aria-controls="profile" data-toggle="tab" id="reviews-tab" role="tab" href="#reviews">REVIEWS</a></li>
                  <li role="presentation"><a aria-controls="profile" data-toggle="tab" id="gallery-tab" role="tab" href="#gallery">GALLERY</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                
                  <div aria-labelledby="home-tab" id="profile" class="tab-pane fade in active" role="tabpanel">
                    <div class="shop-page-cnt-main">
                      <div class="col-md-8">
                        <div class="shop-page-cnt-descprition">
                          <h1> DESCRIPTION </h1>
                          <p> <?php echo $data->description; ?>.</p>
                          <div class="shop-page-cnt-dsc-main">
                            <h1>CONTACT ADDRESS</h1>
                            <div class="col-md-5">
                              <div class="shop-page-cnt-descpritionadrs">
                                <p> <?php echo $data->location; ?> </p>
                                <?php echo $data->state; ?> <br>
                                <?php echo $data->country; ?> - <?php echo $data->pincode; ?> <br>
                                <?php echo $data->phone_no; ?> </div>
                            </div>
                            <div class="col-md-7">
                              <div class="shop-page-cnt-descpritionwrk"> <?php echo $data->working_time; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
            if(isset($ad)) {
              $url = $ad->website;
              if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                $url = "http://" . $url;
              }
            ?>
                      <div class="col-md-4 shop-pg-prflad"><a href="<?php echo $url;?>" target="_blank"><img class="col-md-12" src="<?php echo $ad->image;?>" alt="" style="border:1px solid #eee;"> </a></div>
                      <?php
            }
            ?>
                    </div>
                  </div>
                  
                  <div aria-labelledby="profile-tab" id="services" class="tab-pane fade" role="tabpanel">
                    <div class="shop-page-services">
                        <div class="col-md-8">
                          
                          <?php
                          $shopServices = $this->services_model->get_shop_services(array('shop_services.shop_id'=>$sid));
                          foreach($shopServices as $serv) {
							  
                            ?>
                            <div class="shop-page-services-list">
								<div class="service-name collapsed" data-toggle="collapse" aria-expanded="false" data-target="#subservice<?php echo $serv->	service_id; ?>">
									<h3><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i><?php echo $serv->service_name; ?></h3>
                                </div>
                                <?php 
                                  $where=array('shop_services.shop_id'=>$sid,'shop_services.service_id'=>$serv->service_id);
                                  $service_cat_sub = $this->services_model->get_subservice1($where);
                                  foreach ($service_cat_sub as $sub_service_list) {
                                    ?>
									<div class="sub-service-list collapse" id="subservice<?php echo $serv->	service_id; ?>">
										<div class="col-md-12 shop-page-services-list-nm collapsed"  data-toggle="collapse" data-target="#collapseExample<?php echo $sub_service_list->id; ?>" aria-expanded="false" aria-controls="collapseExample<?php echo $sub_service_list->id; ?>">
										<h4>	<?php  echo $sub_service_list->id." - ".$sub_service_list->sub_service_name."<br/>"; ?></h4>
											<button class="addtocart" data-ss-cat-id="<?php echo $sub_service_list->ssid; ?>" data-ss-cat-name="<?php echo $sub_service_list->sub_service_name; ?>" data-ss-cat-price="<?php echo $sub_service_list->price; ?>"><i style="font-size:16px" class="fa fa-plus"></i></button>
										</div>
										<div class="col-md-12 expan-details collapse" id="collapseExample<?php echo $sub_service_list->id; ?>" >
											<!--<div class="col-md-1 shop-page-services-list-nm"> <img src="<?php //echo base_url(); ?>assets/images/shpe_pg_infor_icon.png" alt=""> </div>-->
											<div class="col-md-12 text-center"> $ <?php echo $sub_service_list->price; ?> | 60 min.
											<p>
												<a href="<?php echo base_url(); ?>shop/book/<?php echo $id; ?>/<?php echo $sub_service_list->ssid; ?>" class="shop-pagebk-btn btn">BOOK NOW</a>
												
											</p>
											
											</div>
											<div class="booking-slct-caldr<?php echo $sub_service_list->ssid; ?>">
											<ul>
												<?php
											
											if($staffdet) {
											$i=1;
											
											?>
													<div class="controls">
																<select id="selectError" class="col-md-3" data-rel="chosen" name="staff_id" >
																	<?php
										
																	foreach($staffdet as $staffs_list) {
																	$i++;
																	
																	echo "<option value='".$staffs_list->staff_id."'>".$staffs_list->first_name."</option>";
																	
																							}
																	?>
																</select>
																</div>
												<?php
											}
											?>
											</ul>
												<div class="col-md-12">
													<h1> SELECT DATE & TIME </h1>
													<input type="text" name="datetime" id="datetimepicker<?php echo $sub_service_list->ssid; ?>" />
													<script>
													$(document).ready(function () {   

														$('#datetimepicker<?php echo $sub_service_list->ssid; ?>').datetimepicker({
															inline:true,
															minDate:new Date(),
															
														});
													});
													</script>
												</div>
												<div class="row">
                 <div class="col-lg-9">
                 </div>
                 <div class="col-lg-3">
                 <div class="col-md-12">
                 <?php
				 	$user_data = is_logged();
					if(isset($user_data)) {
						?>
                        <input type="hidden" value="<?php echo $user_data['id']; ?>" name="user_id">
                        <input type="submit" value="CONFIRM BOOKING" class="viewprflbook-btn">
                        <?php
					}
					else {
						echo '<a href="javascript:void(0);" class="viewprflbook-btn btn" id="saloon-user-login">CONFIRM BOOKING </a>';
					}
				 ?>
                     
                     </div>
                    
                 </div>
             </div>
											</div>
										</div>
                                    </div>
                                    <?php                                   
                                  }
                                ?>
                              
                            </div>
                            <?php
                            //echo $serv->shop_id.",".$serv->service_id.",".$serv->service_name."<br/>";
                          }
                          ?>
                          
                          
                        </div>
						<div class="col-md-4 book-cart-col">
							
                          <div class="book_shop">
                              Total Item : <span class="total_items"></span>
                               Total Price : <span class="total_price"></span>
                          </div>
						  <button class="view_cart">view Cart</button>
						</div>
                      </div>
            
                  </div>
                  
                  <div aria-labelledby="profile-tab" id="reviews" class="tab-pane fade" role="tabpanel">
                    <div class="shop-page-rvws">
                    <?php
          foreach($reviews as $review) {
            $user_img = base_url()."assets/images/avatar.png";
            if(!empty($review->profile_pic)) {
              $user_img = $review->profile_pic;
            }
            $user_name = $review->firstname." ".$review->lastname;
            if(trim($user_name) == "") {
              $user_name = $review->username;
            }
            
            $rating = 0;
            if($review->total_rating) {
              $rating = $review->total_rating / $review->rating_count;
            }
          ?>
                      <div class="shop-page-rvws-bx">
                        
                     <div class="row">
                         <div class="col-md-2">
                             <div class="review-prfl-pic">
                             <img src="<?php echo $user_img; ?>" style="max-width:100%;"  />
                             </div>
                         </div>
                         <div class="col-md-10">
                             <div class="review-content">
                                 <div class="review-head">
                             <h1><?php echo $user_name; ?> </h1>
                                 <div class="starss">
                            <div class="raty" data-read="true"  data-rate="<?php echo $rating; ?>"></div>
                          </div>
                                 </div>
                                 <p> <?php echo $review->comments; ?> </p>
                             </div>
                         </div>
                            </div>
                        
                        
                        </div>
                    <?php
          }
          ?>
                    </div>
                  </div>
                  
                  <div aria-labelledby="profile-tab" id="gallery" class="tab-pane fade" role="tabpanel">
                    <div class="container">
                      <div class="gallery">
                        
                        <?php
            if($data->gallery) {
           // echo $data->gallery;
            $gallery = explode("<=>", $data->gallery);
            foreach($gallery as $image) {
            ?>
                        
                          <a href="<?php echo trim($image); ?>" class="big"><img src="<?php echo $image; ?>" alt="" title="<?php echo $data->shop_name; ?>" /></a>
                            <?php
            }
            }
              ?>
                        </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <!--End Tab  -->
            
            
          </div>

      </div>
      </div>
      
<!---- Maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB1br9lwKFyEpCnS5elLan_90CCsYeak6I" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function() {
      //var data = '[{ "DisplayText": "adcv", "Location": "Jamiya Nagar Kovaipudur Coimbatore-641042", "LatitudeLongitude": "10.9435131,76.9383790" },{ "DisplayText": "abcd", "Location": "Coimbatore-641042", "LatitudeLongitude": "10.0143694,76.3101339"}]';
      var data = '<?php echo $maps; ?>';
            ViewCustInGoogleMap(data);
        });
		
	
});
    </script>
<?php
}
else {
  $this->load->view('error404');
}
?>
