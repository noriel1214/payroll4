    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Payslip List</h3>
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

                            <th class="column-title"># </th>
                            <th class="column-title">ID </th>
                            <th class="column-title">Employee </th>
                            <th class="column-title">Summary </th>
                            <th class="column-title">Date </th>
                             <th class="column-title">Status </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                 
                        <?php foreach (payslip as $payslip_item): ?>
                        <tr>
                        <td><?php echo $payslip_item['emp_id']; ?></td>
                        <td><?php echo $payslip_item['firstname']; ?></td>
                        <td><?php echo $payslip_item['lastname']; ?></td>
                        <td><?php echo $payslip_item['email']; ?></td>
                        <td><?php echo $payslip_item['phone']; ?></td>     
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