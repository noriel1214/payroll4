    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Create Payslip</h3>
              </div>

 
            </div>
            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

<div class="form-group col-md-3 col-sm-3 col-xs-12 form-group has-feedback">
                <label class="control-label" style="margin-bottom: 5px;">Department</label>
                <select id="dept_id" name="dept_id" class="form-control" required="" onchange="makeAjaxCall()">
                    <option value="">Select A Department</option>
                    <?php foreach($department as $department_item): ?>
                    <option value="<?php echo $department_item["dept_id"]; ?>"><?php echo $department_item["dept_name"]; ?></option>
                    <?php endforeach; ?>
                                    </select>
            </div>

<div class="form-group col-md-3 col-sm-3 col-xs-12 form-group has-feedback">
                <label class="control-label" style="margin-bottom: 5px;">Employee</label>
                <select name="department_id" class="form-control" required="" onchange="get_employees(this.value);">
                    <option value="">Select A Department First</option>
                                            <option value="1">
                            Marketing Department                        </option>
                                            <option value="2">
                            Technology  Department                        </option>
                                            <option value="3">
                            HR Department                        </option>
                                    </select>
            </div>
                        <div class="form-group col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                <label class="control-label" style="margin-bottom: 5px;">Month</label>
                <select name="department_id" class="form-control" required="" onchange="get_employees(this.value);">
                    <option value="">Select A Month</option>
                                            <option value="1">
                            Marketing Department                        </option>
                                            <option value="2">
                            Technology  Department                        </option>
                                            <option value="3">
                            HR Department                        </option>
                                    </select>
            </div>
                        <div class="form-group col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                <label class="control-label" style="margin-bottom: 5px;">Year</label>
                <select name="department_id" class="form-control" required="" onchange="get_employees(this.value);">
                    <option value="">Select A Year</option>
                                            <option value="1">
                            Marketing Department                        </option>
                                            <option value="2">
                            Technology  Department                        </option>
                                            <option value="3">
                            HR Department                        </option>
                                    </select>
            </div>
                        
                        <div class="form-group col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                <label class="control-label" style="margin-bottom: 5px;">&nbsp;</label>
<button class="btn btn-primary form-control" type="button">Submit</button>
            </div>                        


   
<div class="row">
          <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Allowances</h2>
    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" class="form-control " id="inputSuccess2" placeholder="Type">
        
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Amount">
          
                      </div>

                      <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 form-group">
                          <button  type="button" class="form-control has-feedback-left btn-default" id="inputSuccess4" placeholder="Email">Add Allowance</button>
                        <span class="fa fa-plus-circle form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

          
               

                    </div>
                  </div>
                </div>

              </div>
                        
                        
    <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Deductions</h2>
    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" class="form-control " id="inputSuccess2" placeholder="Type">
        
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Amount">
          
                      </div>

                      <div class="col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-12 form-group">
                          <button  type="button" class="form-control has-feedback-left btn-default" placeholder="Email"></button>
                        <span class="fa fa-plus-circle form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

          
               

                    </div>
                  </div>
                </div>

              </div>                        
                        
                  </div>       

                    </form>
                  </div>
                </div>
                  
                  
                  
              

   

         


              </div>

              <div class="col-md-6 col-xs-12">
            
                  
                  
                  
                
                  
                  
                  
                  
                       
                  
                  
                  
              </div>


            </div>

   
            
            
            
            
            
            
            
            
            
          </div>
        </div>
    
        <!-- /page content -->