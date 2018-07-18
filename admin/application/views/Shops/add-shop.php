<div class="page-title">
              <div class="title_left">
                <h3><?php echo $page_title; ?></h3>
              </div>
            </div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12">
	 <div class="x_panel">
                 
                  <div class="x_content">
					 <div class="box-inner">
            
            <div class="box-content">
                 <form role="form" method="post" class="validate" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label class="control-label" for="shop_name">Shop name</label>
                        <input type="text" name="shop_name" class="form-control required col-md-10" placeholder="Enter Shop Name">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label class="control-label" for="category">Category</label><br>
                         <select id="dropdown" class="col-md-10" data-rel="chosen" name="category">
                        	 <option value="2" name="aft_qst">Male</option>
                             <option value="3" name="aft_exm">Female</option>
                             <option value="1" name="aft_exm">Unisex</option>
                            
                        </select>  
                    </div>
					 
					<div class="col-md-12 ">
						<div class="col-md-6 nopadd-left">
								<div id="us5" style="width: 500px; height: 400px;"></div>
						</div>
						<div class="col-md-6 nopadd-right">
							<div class="row form-group">
							<label class="col-sm-2 control-label">Street</label>
	
							<div class="col-sm-6">
								<input class="form-control"  type="text" name="location" class="form-control required col-md-10" id="us5-street1">
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-2 control-label">Area</label>
	
							<div class="col-sm-6">
								<input type="text" name="state" class="form-control required col-md-10" id="us5-state" >
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-2 control-label">City</label>
	
							<div class="col-sm-6">
								<input type="text" name="city" class="form-control required col-md-10" id="us5-city" >
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-2 control-label">Country</label>
	
							<div class="col-sm-6">
								<input type="text" name="country" class="form-control required col-md-10" id="us5-country" >
							</div>
						</div>
						<div class="row form-group">
							<label class="col-sm-2 control-label">Pincode</label>
	
							<div class="col-sm-6">
								<input type="text" name="pincode" class="form-control required col-md-10" id="us5-zip" >
							</div>
						</div>
						</div>
						<div class="m-t-small">
                        <label class="p-r-small col-sm-1 control-label">Lat.:</label>

                        <div class="col-sm-2">
                            <input type="text" name="latitude" class="form-control required col-md-10" id="latitude" style="width: 110px" placeholder="Enter latitude"/>
                        </div>
                        <label class="p-r-small col-sm-1 control-label">Long.:</label>

                        <div class="col-sm-2">
                            <input type="text" name="longitude" class="form-control required col-md-10" id="longitude" style="width: 110px" id="us1-lon" placeholder="Enter longitude"/>
                        </div>
                    </div>
                    </div>
					<div class="clearfix"></div>
                    
               <!--     <div class="form-group">
                        <label class="control-label" for="location">Location</label>
                        <input type="text" name="location" class="form-control required" placeholder="Enter Location">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="location">City</label>
                        <input type="text" name="city" class="form-control required" placeholder="Enter Location">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="state">State</label>
                        <input type="text" name="state" class="form-control required" placeholder="Enter State">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="country">Country</label>
                        <input type="text" name="country" class="form-control required" placeholder="Enter Country">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="pincode">Pincode</label>
                        <input type="text" name="pincode" class="form-control required" placeholder="Enter Pincode">
                    </div>
                    -->
                    <div class="form-group col-md-6">
                        <label class="control-label" for="phone_no">Phone number</label>
                        <input type="text" name="phone_no" class="form-control required col-md-10" placeholder="Enter Phone No">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label class="control-label" for="email_id">Email address</label>
                        <input type="email" name="email_id" class="form-control required col-md-10" placeholder="Enter Email">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label class="control-label" for="website">Website</label>
                        <input type="text" name="website" class="form-control required col-md-10" placeholder="Enter Website">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label class="control-label" for="working_time">Working time</label>
                        <input type="text" name="working_time" class="form-control required col-md-10" placeholder="Enter Working Time">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label class="control-label" for="description">Description</label>
                        <textarea name="description" placeholder="Description" rows="3" class="form-control required col-md-10"></textarea>
                    </div>
                 <!--   <div class="form-group">
                        <label class="control-label" for="latitude">Latitude</label>
                        <input type="text" name="latitude" class="form-control required" id="latitude" placeholder="Enter latitude">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="longitude">Longitude</label>
                        <input type="text" name="longitude" class="form-control required" id="longitude" placeholder="Enter longitude">
                        <span><a href="javascript:void(0)" id='pick-map'>Pick from map</a></span>
                    </div>
                    -->
                    
                     <div class="form-group col-md-6">
                        <label class="control-label" for="image">Picture</label>
                        <input type="file" multiple name="image" class="required col-md-10" size="20" />
                       
                    </div>
					
					<div class="clearfix"></div>
					 <div class="ln_solid"></div>
                      <div class="form-group text-center">
							<button type="submit" class="btn btn-custom"><i class="glyphicon glyphicon-plus"></i> Add Shop</button>
					  </div>
                    <div class="clearfix"></div>
                    
                    
                </form>

            </div>
        </div>
				  </div>
				  </div>
       
    </div>
    <!--/span-->

</div><!--/row-->

<div class="modal fade modal-wide" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Select location</h4>
                  </div>
                  <div class="modal-body">
                    <div id='map_canvas'></div>
                    <div id="current">Nothing yet...</div>
                    <input type="hidden" id="pick-lat" />
                    <input type="hidden" id="pick-lng" />
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-custom select-location">Select Location</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>
