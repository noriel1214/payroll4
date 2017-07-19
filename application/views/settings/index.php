    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $title ?></h3>
              </div>

 
            </div>
 
            <div class="clearfix"></div>

            
            <?php echo validation_errors(); ?>
            
            <?php echo form_open('settings/index'); ?>

            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>System Settings</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    <div class="form-horizontal form-label-left input_mask">

  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">System Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="system_name" name="system_name" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  value="<?php echo $settings['system_name'] ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">System Title</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="system_title" name="system_title" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  value="<?php echo $settings['system_title'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="system_addr" name="system_addr" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  value="<?php echo $settings['system_addr'] ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="system_phone" name="system_phone" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  value="<?php echo $settings['system_phone'] ?>">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">System Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="system_email" name="system_email" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  value="<?php echo $settings['system_email'] ?>">
                        </div>
                      </div>                        
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Language</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="system_lang" name="system_lang" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  value="<?php echo $settings['system_lang'] ?>">
                        </div>
                      </div> 
                        
                      <div class="ln_solid"></div>


                    </div>
                  </div>
                </div>
                  
                     

   

         


              </div>

              <div class="col-md-6 col-xs-12">
                  
             <div class="x_panel">
                  <div class="x_title">
                    <h2>Upload Logo</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Logo</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>

                    </div>
                  </div>
                </div>       
                  
                         
                  
                  
                  
              </div>


            </div>
        <?php echo form_close(); ?>
          </div>
        </div>
        <!-- /page content -->