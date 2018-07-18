<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> <?php echo $page_title; ?></h2>

            </div>
            <div class="box-content">
                <form role="form" method="post" class="validate" enctype="multipart/form-data">
                
                    <div class="form-group">
                        <label class="control-label" for="slider_text">Slider Text</label>
                        <input type="text" name="slider_text" class="form-control required" placeholder="Enter slider">
                    </div>
                    
     
                    <div class="form-group">
                        <label class="control-label" for="image">Image</label>
                        <div class="form-control ">
                        <input type="file" name="image" class="required" size="20" />
                        </div>
                       
                    </div>
                    
                    <div class="form-group ">
                        <label class="control-label" for="order">Order</label>
                        <div class="controls">
                        <select id="selectError" name="order" class="col-md-3" data-rel="chosen" >
                           <option selected="selected">-?-</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                        </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-custom"><i class="glyphicon glyphicon-plus"></i> Add Slider</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<!--/row-->


