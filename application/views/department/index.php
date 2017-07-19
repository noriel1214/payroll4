    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Department List</h3>
              </div>


                
            </div>

            <div class="clearfix"></div>

            <div class="row">
 

        

        

      


              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

              <div class="title_right">


                       <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".pr-department-modal">Add New Department</button>
 
                       
                                         <!-- Large modal -->
           

                  <div class="modal fade pr-department-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Department</h4>
                        </div>
                        <div class="modal-body">
                            
                            
  <div class="x_panel">
    
                  <div class="x_content">

        <?php echo validation_errors(); ?>
            
            <?php echo form_open('department/create'); ?>
                      
                    <div class="form-horizontal form-label-left">

                        <input id="dept_id" name="dept_id" type="hidden" value=value="<?php echo $department_item['dept_id'] ?>">
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Department Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="dept_name" name="dept_name" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  value="<?php echo $department_item['dept_name'] ?>">
                        </div>
                      </div>
                        
                                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="dept_designation" name="dept_designation" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')" value="<?php echo $department_item['dept_designation'] ?>">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                     
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
                            <th class="column-title">Department Name </th>
                            <th class="column-title">Designation </th>
                            <th class="column-title">Total Employees </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach ($department as $department_item): ?>
                        <tr>
                        <td><?php echo $department_item['dept_id']; ?></td>
                        <td><?php echo $department_item['dept_name']; ?></td>
                        <td><?php echo $department_item['dept_designation']; ?></td>   
                        <td>to be calculated</td>
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">
                        <li role="presentation"><a class="edit-department-modal" role="menuitem" tabindex="-1" data-toggle="modal" data-target=".pr-department-modal" 
                                                   data-dept-id="<?php echo $department_item['dept_id']; ?>"
                                                   data-dept-name="<?php echo $department_item['dept_name']; ?>"
                                                   data-dept-designation="<?php echo $department_item['dept_designation']; ?>" >Edit</a>
                        </li>
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