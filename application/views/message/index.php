    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $title ?></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
              <div class="title_right">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".pr-message-modal">Add New Message</button>
                <div class="modal fade pr-message-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Write New Message </h4>
                        </div>
                        <div class="modal-body">
 <div class="x_panel">
    
                  <div class="x_content">

        <?php echo validation_errors(); ?>
            
            <?php echo form_open('message/create'); ?>
                      
                    <div class="form-horizontal form-label-left">

                        
                        <input id="message_id" name="message_id" type="hidden" value="<?php echo $message_item['message_id'] ?>">
                               

                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Recipient</label>
                        
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <select id="message_status" name="message_status" class="form-control">
                              <?php foreach($employee as $employee_item): ?>
                             <option value="<?php echo $employee_item['emp_id']?>" ><?php echo $employee_item['firstname'] ?></option> 
                             <?php endforeach; ?>
                          </select>
                        </div>
                      </div> 
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Subject</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="msg_subject" name="msg_subject" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  value="<?php echo $message_item['msg_subject'] ?>">
                        </div>
                      </div>
                        
                                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Message</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea id="msg_msg" name="msg_msg" rows="10" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
                                    oninput="setCustomValidity('')" value="<?php echo $message_item['msg_msg'] ?>" placeholder="Write Your Message"></textarea>
                        </div>
                      </div>
                        
                        
                       
                        
                                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                        
                                        <div class='col-sm-4'>
                   
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input id="message_date" name="message_date" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')" value="<?php echo $message_item['message_date'] ?>" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                        
             
                      </div>    
                        
                        






                     
                     <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <button type="submit" class="btn btn-success">Submit</button>
       
                            
                            
                        </div>
                      </div>                      
                      
                    </div>
                       
                  </div>
            
            
                </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       
                        </div>

                      </div>
                    </div>
                  </div>
              </div>
                  

              </div>                    

                  <div class="x_content">

                

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Id </th>
                            <th class="column-title">Award Name </th>
                            <th class="column-title">Gift </th>
                            <th class="column-title">Amount </th>
                            <th class="column-title">Awarded Employee </th>
                            <th class="column-title">Date </th>
                            <th class="column-title no-link last"><span class="nobr">Options</span>
                            </th>

                          </tr>
                        </thead>

                        <tbody>

                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000038</td>
                            <td class=" ">May 24, 2014 10:55:33 PM</td>
                            <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                            </td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$432.26</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>

                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 26, 2014 11:30:12 PM</td>
                            <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                            </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000038</td>
                            <td class=" ">May 26, 2014 10:55:33 PM</td>
                            <td class=" ">121000203</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$432.26</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000037</td>
                            <td class=" ">May 26, 2014 10:52:44 PM</td>
                            <td class=" ">121000204</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$333.21</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>

                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000040</td>
                            <td class=" ">May 27, 2014 11:47:56 PM </td>
                            <td class=" ">121000210</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 28, 2014 11:30:12 PM</td>
                            <td class=" ">121000208</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
            
            
            
     
            
            
          </div>
        </div>
        <!-- /page content -->