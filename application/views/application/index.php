    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Application List</h3>
              </div>
               
            </div>

            <div class="clearfix"></div>

            
            <div class="row">
 

              <div class="clearfix"></div>

              
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                  
           <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".pr-application-modal">Add New Application</button>
           
           
           
                    <div class="modal fade pr-application-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
            
            <?php echo form_open('application/create'); ?>
                      
                    <div class="form-horizontal form-label-left">

                        
                        <input id="application_id" name="application_id" type="hidden" >
                               
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Applicant Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="applicant_name" name="applicant_name" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  >
                        </div>
                      </div>
                        
                        
                        
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Position</label>
                        
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <select id="position_id" name="position_id" class="form-control">
                            <?php foreach ($vacancy as $vacancy_item): ?>
                                <option value="<?php echo $vacancy_item['vacancy_id']; ?>" ><?php echo $vacancy_item['position_name']; ?></option>
                            <?php endforeach; ?>   

                          </select>
                        </div>
                      </div>
                        
                        
                                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Application Date</label>
                        
                                        <div class='col-sm-4'>
                   
                    <div class="form-group">
                        <div class='input-group date ' id='myDatepicker2'>
                            <input id="application_date" name="application_date" type="text" class="form-control" required oninvalid="this.setCustomValidity('This field is required')"
 oninput="setCustomValidity('')"  />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                                </div> 
                        
                        </div>  
                        
     
    
                                      
                                        
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <select id="status_id" name="status_id" class="form-control">
                               <?php foreach ($status as $status_item): ?>
                                <option value="<?php echo $status_item['status_id']; ?>" ><?php echo $status_item['status_name']; ?></option>
                            <?php endforeach; ?>   
                          </select>
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
 
                <div class="x_panel">

                       <div class="x_content">

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#applied" data-toggle="tab">Applied</a>
                        </li>
                        <li><a href="#onreview" data-toggle="tab">On Review</a>
                        </li>
                        <li><a href="#interview" data-toggle="tab">Interview</a>
                        </li>
                        <li><a href="#offered" data-toggle="tab">Offered</a>
                        </li>
                        <li><a href="#hired" data-toggle="tab">Hired</a>
                        </li>           
                        <li><a href="#declined" data-toggle="tab">Declined</a>
                        </li>                        
                      </ul>
                    </div>

                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="applied">
                          <p class="lead">Applied</p>
              
                          
                                         <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title">Applicant Name </th>
                            <th class="column-title">Position </th>
                            <th class="column-title">Application Date </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Action </th>

                          </tr>
                        </thead>

                        <tbody>
                           <?php foreach ($application as $application_item): ?>
                             <?php if($application_item['status_id'] == 1): ?>
                        <tr>
                            <td><?php echo $application_item['application_id']; ?></td> 
                        <td><?php echo $application_item['applicant_name']; ?></td>
                        <td><?php echo $application_item['position_name']; ?></td>
                        <td><?php echo $application_item['application_date']; ?></td>   
                        <td><?php echo $application_item['status_name']; ?></td>   
                          
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">

                        <li role="presentation"><a class="edit-application-modal" role="menuitem" tabindex="-1" data-toggle="modal" data-target=".pr-application-modal" 
                                                   
                                                   data-application-id="<?php echo $application_item['application_id']; ?>"
                                                   data-position-id="<?php echo $application_item['position_id']; ?>"
                                                   data-application-date="<?php echo $application_item['application_date']; ?>" 
                                                   data-status-id="<?php echo $application_item['status_id']; ?>"
                                                   data-applicant-name="<?php echo $application_item['applicant_name']; ?>">Edit</a>
                        </li>
                        
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a>
                        </li>

                      </ul>
                    </div>                
     
                        </td>
                        </tr> 
                        <?php endif; ?> 
                        <?php endforeach; ?>         

                        </tbody>
                      </table>
                    </div>			
                  </div>
                   </div>
                          
                          
                          
                          
                          <div class="tab-pane" id="onreview">
                          <p class="lead">On Review</p>

                                         <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title">Applicant Name </th>
                            <th class="column-title">Position </th>
                            <th class="column-title">Application Date </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Action </th>

                          </tr>
                        </thead>

                        <tbody>
                           <?php foreach ($application as $application_item): ?>
                            <?php if($application_item['status_id'] == 2): ?>
                        <tr>
                        <td><?php echo $application_item['application_id']; ?></td>
                        <td><?php echo $application_item['applicant_name']; ?></td>
                        <td><?php echo $application_item['application_date']; ?></td>   
                        <td><?php echo $application_item['status_name']; ?></td>   
                        <td><?php echo $application_item['position_name']; ?></td>   
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">

                        <li role="presentation"><a class="edit-application-modal" role="menuitem" tabindex="-1" data-toggle="modal" data-target=".pr-application-modal" 
                                                   
                                                   data-application-id="<?php echo $application_item['application_id']; ?>"
                                                   data-position-id="<?php echo $application_item['position_id']; ?>"
                                                   data-application-date="<?php echo $application_item['application_date']; ?>" 
                                                   data-status-id="<?php echo $application_item['status_id']; ?>"
                                                   data-applicant-name="<?php echo $application_item['applicant_name']; ?>">Edit</a>
                        </li>
                        
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a>
                        </li>

                      </ul>
                    </div>                
                            
                            
                        </td>
                        </tr> 
                        <?php endif; ?>
                        <?php endforeach; ?>         
                            
      
                        </tbody>
                      </table>
                    </div>
				
                  </div>
      </div>   
                          
                          
                          
                          
                         <div class="tab-pane" id="interview">
                          <p class="lead">Interview</p>

                                         <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title">Applicant Name </th>
                            <th class="column-title">Position </th>
                            <th class="column-title">Application Date </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Action </th>

                          </tr>
                        </thead>

                        <tbody>
                           <?php foreach ($application as $application_item): ?>
                            <?php if($application_item['status_id'] == 3): ?>
                        <tr>
                        <td><?php echo $application_item['application_id']; ?></td>
                        <td><?php echo $application_item['applicant_name']; ?></td>
                        <td><?php echo $application_item['application_date']; ?></td>   
                        <td><?php echo $application_item['status_name']; ?></td>   
                        <td><?php echo $application_item['position_name']; ?></td>   
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">

                        <li role="presentation"><a class="edit-application-modal" role="menuitem" tabindex="-1" data-toggle="modal" data-target=".pr-application-modal" 
                                                   
                                                   data-application-id="<?php echo $application_item['application_id']; ?>"
                                                   data-position-id="<?php echo $application_item['position_id']; ?>"
                                                   data-application-date="<?php echo $application_item['application_date']; ?>" 
                                                   data-status-id="<?php echo $application_item['status_id']; ?>"
                                                   data-applicant-name="<?php echo $application_item['applicant_name']; ?>">Edit</a>
                        </li>
                        
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a>
                        </li>

                      </ul>
                    </div>                
                            
                            
                        </td>
                        </tr> 
                        <?php endif; ?>
                        <?php endforeach; ?>         
                            
      
                        </tbody>
                      </table>
                    </div>
				
                  </div>
      </div>             
                          
                          
                         <div class="tab-pane" id="offered">
                          <p class="lead">Offered</p>

                                         <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title">Applicant Name </th>
                            <th class="column-title">Position </th>
                            <th class="column-title">Application Date </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Action </th>

                          </tr>
                        </thead>

                        <tbody>
                           <?php foreach ($application as $application_item): ?>
                            <?php if($application_item['status_id'] == 4): ?>
                        <tr>
                        <td><?php echo $application_item['application_id']; ?></td>
                        <td><?php echo $application_item['applicant_name']; ?></td>
                        <td><?php echo $application_item['application_date']; ?></td>   
                        <td><?php echo $application_item['status_name']; ?></td>   
                        <td><?php echo $application_item['position_name']; ?></td>   
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">

                        <li role="presentation"><a class="edit-application-modal" role="menuitem" tabindex="-1" data-toggle="modal" data-target=".pr-application-modal" 
                                                   
                                                   data-application-id="<?php echo $application_item['application_id']; ?>"
                                                   data-position-id="<?php echo $application_item['position_id']; ?>"
                                                   data-application-date="<?php echo $application_item['application_date']; ?>" 
                                                   data-status-id="<?php echo $application_item['status_id']; ?>"
                                                   data-applicant-name="<?php echo $application_item['applicant_name']; ?>">Edit</a>
                        </li>
                        
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a>
                        </li>

                      </ul>
                    </div>                
                            
                            
                        </td>
                        </tr> 
                        <?php endif; ?>
                        <?php endforeach; ?>         
                            
      
                        </tbody>
                      </table>
                    </div>
				
                  </div>
      </div>             

                  
                         <div class="tab-pane" id="hired">
                          <p class="lead">Hired</p>

                                         <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title">Applicant Name </th>
                            <th class="column-title">Position </th>
                            <th class="column-title">Application Date </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Action </th>

                          </tr>
                        </thead>

                        <tbody>
                           <?php foreach ($application as $application_item): ?>
                            <?php if($application_item['status_id'] == 5): ?>
                        <tr>
                        <td><?php echo $application_item['application_id']; ?></td>
                        <td><?php echo $application_item['applicant_name']; ?></td>
                        <td><?php echo $application_item['application_date']; ?></td>   
                        <td><?php echo $application_item['status_name']; ?></td>   
                        <td><?php echo $application_item['position_name']; ?></td>   
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">

                        <li role="presentation"><a class="edit-application-modal" role="menuitem" tabindex="-1" data-toggle="modal" data-target=".pr-application-modal" 
                                                   
                                                   data-application-id="<?php echo $application_item['application_id']; ?>"
                                                   data-position-id="<?php echo $application_item['position_id']; ?>"
                                                   data-application-date="<?php echo $application_item['application_date']; ?>" 
                                                   data-status-id="<?php echo $application_item['status_id']; ?>"
                                                   data-applicant-name="<?php echo $application_item['applicant_name']; ?>">Edit</a>
                        </li>
                        
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a>
                        </li>

                      </ul>
                    </div>                
                            
                            
                        </td>
                        </tr> 
                        <?php endif; ?>
                        <?php endforeach; ?>         
                            
      
                        </tbody>
                      </table>
                    </div>
				
                  </div>
      </div>          
                          
                          
                          
                          
         <div class="tab-pane" id="declined">
                          <p class="lead">Declined</p>

                                         <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title">Applicant Name </th>
                            <th class="column-title">Position </th>
                            <th class="column-title">Application Date </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Action </th>

                          </tr>
                        </thead>

                        <tbody>
                           <?php foreach ($application as $application_item): ?>
                            <?php if($application_item['status_id'] == 6): ?>
                        <tr>
                        <td><?php echo $application_item['application_id']; ?></td>
                        <td><?php echo $application_item['applicant_name']; ?></td>
                        <td><?php echo $application_item['application_date']; ?></td>   
                        <td><?php echo $application_item['status_name']; ?></td>   
                        <td><?php echo $application_item['position_name']; ?></td>   
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">

                        <li role="presentation"><a class="edit-application-modal" role="menuitem" tabindex="-1" data-toggle="modal" data-target=".pr-application-modal" 
                                                   
                                                   data-application-id="<?php echo $application_item['application_id']; ?>"
                                                   data-position-id="<?php echo $application_item['position_id']; ?>"
                                                   data-application-date="<?php echo $application_item['application_date']; ?>" 
                                                   data-status-id="<?php echo $application_item['status_id']; ?>"
                                                   data-applicant-name="<?php echo $application_item['applicant_name']; ?>">Edit</a>
                        </li>
                        
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a>
                        </li>

                      </ul>
                    </div>                
                            
                            
                        </td>
                        </tr> 
                        <?php endif; ?>
                        <?php endforeach; ?>         
                            
      
                        </tbody>
                      </table>
                    </div>
				
                  </div>
      </div>                               
                          
                          
                          
                          
                          
 
                      </div>
                    </div>

                    <div class="clearfix"></div>

                  </div>
                    
                    
                    

                </div>
              </div>
            </div>
            
            
            
     
            
            
          </div>
        </div>
        <!-- /page content -->


