    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Employee List Index</h3>
              </div>
   
            </div>

            <div class="clearfix"></div>
   
            <div class="row">
 
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">

                            <th class="column-title">Employee Id </th>
                            <th class="column-title">First Name </th>
                            <th class="column-title">Last Name </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Phone </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                 
                        <?php foreach ($employee as $employee_item): ?>
                        <tr>
                        <td><?php echo $employee_item['emp_id']; ?></td>
                        <td><?php echo $employee_item['firstname']; ?></td>
                        <td><?php echo $employee_item['lastname']; ?></td>
                        <td><?php echo $employee_item['email']; ?></td>
                        <td><?php echo $employee_item['phone']; ?></td>     
                        <td>
                                <div role="presentation" class="dropdown form-group-sm">
                      <a  class="dropdown-toggle btn-primary form-control" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Action
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('employee/create/'.$employee_item['emp_id']); ?>">Edit</a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Profile</a>
                        </li>

                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Delete</a>
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