    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Leave  List</h3>
              </div>


                
            </div>

            <div class="clearfix"></div>

            <div class="row">
 


        

        

      


              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

              <div class="title_right">

    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".pr-leave-modal">Apply For Leave</button>
           
           
           
                    <div class="modal fade pr-leave-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Application</h4>
                        </div>
                        <div class="modal-body">
 <div class="x_panel">
    
                  <div class="x_content">

        <?php echo validation_errors(); ?>
            
            <?php echo form_open('leave/create'); ?>
                      
                    <div class="form-horizontal form-label-left">

                        
                        <input id="application_id" name="leave_id" type="hidden" >
                               

                        
                                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date</label>
                        
                                        <div class='col-sm-4'>
                   
                    <div class="form-group">
                        <div class='input-group date myDatepicker2' id='myDatepicker2'>
                            <input id="leave_start_date" name="leave_start_date" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                                </div> 
                        
                        </div>   
                        
                        
                                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
                        
                                        <div class='col-sm-4'>
                   
                    <div class="form-group">
                        <div class='input-group date myDatepicker2' id='myDatepicker2'>
                            <input id="leave_end_date" name="leave_end_date" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                                </div> 
                        
                        </div>  
                        
     
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Reason</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="leave_reason" name="leave_reason" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  >
                        </div>
                      </div>
     
                        
     
       
                     
                     <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <button type="submit" class="btn btn-success">Submit</button>
       
                            
                            
                        </div>
                      </div>                      
                      
                    </div>
                       <?php echo form_close(); ?>
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

                  <div class="x_content">

                

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
  
                            <th class="column-title"># </th>
                           
                            <th class="column-title">Start Date </th>
                            <th class="column-title">End Date </th>
                            <th class="column-title">Reason </th>
                            <th class="column-title">Status </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>

                          </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($leave as $leave_item): ?>
                        <tr>
                        <td><?php echo $leave_item['leave_id']; ?></td>
                        <td><?php echo $leave_item['leave_start_date']; ?></td>
                        <td><?php echo $leave_item['leave_end_date']; ?></td>   
                        <td><?php echo $leave_item['leave_reason']; ?></td>   
                        <td>
                        <?php
                            switch ($leave_item['leave_status_id']) {
                                case 1:
                                    echo "<span class='label label-info'>Pending</span>";
                                    break;
                                case 2:
                                    echo "<span class='label label-success'>Approved</span>";
                                    break;
                                case 3:
                                    echo "<span class='label label-danger'>Devlined</span>";
                                    break;                                
                            }
                        ?>
                        </td>
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">

                        <?php
                            switch ($leave_item['leave_status_id']) {
                                case 1:?>
                                        <li role='presentation'><a class='edit-leave-modal' role='menuitem' tabindex='-1' href="<?php echo site_url('leave/update/2/'.$leave_item['leave_id']); ?>">Approve</a></li>
                                        <li role='presentation'><a class='edit-leave-modal' role='menuitem' tabindex='-1' href="<?php echo site_url('leave/update/3/'.$leave_item['leave_id']); ?>">Decline</a></li>
                             <?php                   
                                    break;
                                case 2: ?>

                                        <li role='presentation'><a class='edit-leave-modal' role='menuitem' tabindex='-1' href="<?php echo site_url('leave/update/3/'.$leave_item['leave_id']); ?>">Decline</a></li>
<?php
                                    break;
                                case 3: ?>
                                        <li role='presentation'><a class='edit-leave-modal' role='menuitem' tabindex='-1' href="<?php echo site_url('leave/update/2/'.$leave_item['leave_id']); ?>">Approve</a></li>
                                        
                                     <?php   
                                    break;                                
                            }
                        ?>
                          
                        
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a>
                        </li>

                      </ul>
                    </div>                
                            
                            
                        </td>
                        </tr> 
                        <?php endforeach; ?>
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