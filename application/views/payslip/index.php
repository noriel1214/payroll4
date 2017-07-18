

              <?php echo validation_errors(); ?>
                    <?php echo form_open('payslip/create'); ?>




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
                    
                    <div class="form-horizontal form-label-left input_mask">

<div class="form-group col-md-3 col-sm-3 col-xs-12 form-group has-feedback">
                <label class="control-label" style="margin-bottom: 5px;">Department</label>
                <select id="dept_id" name="dept_id" class="form-control" required="" onchange="test1();">
                    <option value="">Select A Department</option>
                    <?php foreach($department as $department_item): ?>
                    <option value="<?php echo $department_item["dept_id"]; ?>"><?php echo $department_item["dept_name"]; ?></option>
                    <?php endforeach; ?>
                                    </select>
            </div>
                        
                        

<div class="form-group col-md-3 col-sm-3 col-xs-12 form-group has-feedback">
                <label class="control-label" style="margin-bottom: 5px;">Employee</label>
                <select id="emp_id" name="emp_id" class="form-control" required="">

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
                    
                    
                    
  
            <div data-role="dynamic-fields">
                <div class="form-horizontal form-label-left form-inline">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                      
                    
                    
                        <input type="text" class="form-control" name="deduction_type[]" id="deduction_type[]" placeholder="Type">
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group">
                       
                        <input type="text" class="form-control" name="deduction_amount[]" id="deduction_amount[]" placeholder="Amount">
                    </div>
                    <button class="btn btn-success" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>  <!-- /div.form-inline -->
            </div>  <!-- /div[data-role="dynamic-fields"] -->
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
 
                    <button class="btn btn-primary" data-role="add">
                        Calculate Total Allowance
                    </button>

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
                    
                    
                    
  
            <div data-role="dynamic-fields">
                <div class="form-horizontal form-label-left form-inline">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                      
                    
                    
                        <input type="text" class="form-control" id="field-name" placeholder="Type">
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group">
                       
                        <input type="text" class="form-control" id="field-value" placeholder="Amount">
                    </div>
                    <button class="btn btn-success" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>  <!-- /div.form-inline -->
            </div>  <!-- /div[data-role="dynamic-fields"] -->
               <div class="col-md-6 col-sm-6 col-xs-12 form-group">
 
                    <button class="btn btn-primary" data-role="add">
                        Calculate Total Deduction
                    </button>

               </div>

                    </div>
                  </div>

              </div>                        
                        
                  </div>     

                        <div class="row">
                            
      <div class="col-md-offset-2 col-md-8 col-xs-12">
              
              
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Summary</h2>
    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
     
                    
                    
                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Basic</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Total Allowance</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Total Deduction</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Net Salary</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                   <select name="department_id" class="form-control" onchange="get_employees(this.value);">
                    <option value="">Paid</option>
                    <option value="">Unpaid</option>
                          
                                    </select>
                        </div>
                      </div>  
                      <div class="form-group">
                        
                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
<button type="submit" class="btn btn-success">Create Payslip</button>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
                            
                        </div>                        
                        
                        
                        

                    </div>
                  </div>
                </div>
                  
                  
                  
              

   

         


              </div>
              </div>
          


            </div>

   
            
            
            
            
            
            
            
            
            
          </div>
      
    <?php echo form_close(); ?>
        <!-- /page content -->
        
        