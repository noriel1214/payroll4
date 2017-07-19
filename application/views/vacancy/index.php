
    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Vacancy List</h3>
              </div>
               
            </div>

            <div class="clearfix"></div>

            <div class="row">
 

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

              <div class="title_right">

                       <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".pr-vacancy-modal">Add New Vacancy</button>
                       
                       
   
                  <div class="modal fade pr-vacancy-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add Vacancy</h4>
                        </div>
                        <div class="modal-body">
 <div class="x_panel">
    
                  <div class="x_content">

        <?php echo validation_errors(); ?>
            
            <?php echo form_open('vacancy/create'); ?>
                      
                    <div class="form-horizontal form-label-left">

                        
                        <input id="vacancy_id" name="vacancy_id" type="hidden" value="<?php echo $vacancy_item['vacancy_id'] ?>">
                               
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Position Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="position_name" name="position_name" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  value="<?php echo $vacancy_item['position_name'] ?>">
                        </div>
                      </div>
                        
                                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Number of Vacancies</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="num_of_vac" name="num_of_vac" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')" value="<?php echo $vacancy_item['num_of_vac'] ?>">
                        </div>
                      </div>
                        
                                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Date Of Application</label>
                        
                                        <div class='col-sm-4'>
                   
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input id="apply_last_date" name="apply_last_date" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')" value="<?php echo $vacancy_item['apply_last_date'] ?>" />
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
                            <th class="column-title">Position Name </th>
                            <th class="column-title">Number of Vacancies </th>
                            <th class="column-title">Last Date of Application </th>
                            <th class="column-title">Action </th>

                          </tr>
                        </thead>

                        <tbody>
                           <?php foreach ($vacancy as $vacancy_item): ?>
                        <tr>
                        <td><?php echo $vacancy_item['vacancy_id']; ?></td>
                        <td><?php echo $vacancy_item['position_name']; ?></td>
                        <td><?php echo $vacancy_item['num_of_vac']; ?></td>   
                        <td><?php echo $vacancy_item['apply_last_date']; ?></td>   
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">

                        <li role="presentation"><a class="edit-vacancy-modal" role="menuitem" tabindex="-1" data-toggle="modal" data-target=".pr-vacancy-modal" 
                                                   
                                                   data-vacancy-id="<?php echo $vacancy_item['vacancy_id']; ?>"
                                                   data-position-name="<?php echo $vacancy_item['position_name']; ?>"
                                                   data-num-of-vac="<?php echo $vacancy_item['num_of_vac']; ?>" 
                                                   data-apply-last-date="<?php echo $vacancy_item['apply_last_date']; ?>">Edit</a>
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

