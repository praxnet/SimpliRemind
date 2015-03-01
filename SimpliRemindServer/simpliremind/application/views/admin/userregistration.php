<?php /*?><?php
$role = $this->session->userdata('role');
if($role != '') {
	if($role == 'admin')
		redirect(base_url() . './admin/home');
	if($role == 'executive')
		redirect(base_url() . './admin/home');
}
else	
	redirect(base_url() . '#');
?>
<?php */?>

<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title><?= $title;?></title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!--Begin for drop down with check box -->
   <?php
  	header("cache-Control: no-store, no-cache, must-revalidate");
	header("cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  
  /* $role=$this->session->userdata('role');
   if($role!='admin')
   {
	   redirect(base_url().'./login');
}
*/
   ?>
   
   
   
   <!-- BEGIN PAGE LEVEL STYLES --> 
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/select2/select2.css" />
   <!-- END PAGE LEVEL SCRIPTS -->
	
   
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/jquery-multi-select/css/multi-select.css" />
 <!-- <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/dropdowncheckbox/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/dropdowncheckbox/ui.dropdownchecklist.css" /-->>
   <!--End  for drop down with check box->
   
   <!--save as pdf-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/data-tables/DT_bootstrap.css" />
    <!--save as pdf-->
   
      <!--begin invoice vizard-->
   
   <!-- BEGIN PAGE LEVEL STYLES --> 
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/select2/select2_metro.css" />
   <!-- END PAGE LEVEL SCRIPTS -->

   <!---End invoice vizard--->
   
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="<?= base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="<?= base_url()?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="<?= base_url()?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
   <!-- END PAGE LEVEL PLUGIN STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="<?= base_url()?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?= base_url()?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
     
      <!-- BEGIN PAGE -->  
      
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         
         <!-- END BEGIN STYLE CUSTOMIZER -->            
         <!-- BEGIN PAGE HEADER-->   
         
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <div class="tabbable tabbable-custom boxless">
                  
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_0">
                        <div class="portlet box green">
                           
                           <div class="portlet-body form">
                          
                              <!-- BEGIN FORM-->
                             <form action="<?=base_url()?>User/userregistration" method="post" name="frmuserregistration1" id="frmuserregistration1"  class="form-horizontal" enctype="multipart/form-data">
                              
                              <div><br/></div>
                              
                           <div class="form-group">
									<label  class="col-md-3 control-label">First Name</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtfname" name="txtfname"  class="form-control" placeholder="Enter Name" required>
                                      <?php /*?>    <?php echo form_error('txtfname'); ?><?php */?>
                                       </div>
                                    </div>
                                     <div class="form-group">
                                       <label  class="col-md-3 control-label">Middle Name</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtmname" name="txtmname" class="form-control" placeholder="Enter Name">
                                          <?php /*?> <?php echo form_error('txtmname'); ?><?php */?>
                                       </div>
                                    </div>
                                     <div class="form-group">
                                       <label  class="col-md-3 control-label">Last Name</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtlname" name="txtlname" class="form-control" placeholder="Enter Name" required>
                                         <?php /*?>  <?php echo form_error('txtlname'); ?><?php */?>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">User Name</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtusername" name="txtusername" class="form-control" placeholder="Enter Name" required>
                                         <?php /*?>  <?php echo form_error('txtusername'); ?><?php */?>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Password<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="password" class="form-control" name="txtpassword" id="submit_form_txtpassword"/>
                                          <span class="help-block">Provide your password.</span>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Confirm Password<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="password" class="form-control" name="txtconfirmpassword" id="txtconfirmpassword"/>
                                          <span class="help-block">Confirm your password</span>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Enter Your Sequrity Question</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtseq" name="txtseq" class="form-control" placeholder="Enter Your Sequrity Question" required>				
                                          <span class="help-block">Enter Your Own Sequrity Question</span>
                                        <?php /*?>   <?php echo form_error('txtseq'); ?><?php */?>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Answer</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtans" name="txtans" class="form-control" placeholder="Enter Your Answer" required>
                                         <?php /*?>  <?php echo form_error('txtans'); ?><?php */?>
                                       </div>
                                    </div>
                                    
                                 <div class="form-group">
                                       <label  class="col-md-3 control-label">Email Address</label>
                                       <div class="col-md-4">
                                          <input type="email" class="form-control" id="txtemailid" name="txtemailid" placeholder="Email Address">	<?php /*?><?php echo form_error('txtemailid'); ?><?php */?>
                                          </div>
                                       </div>
                                   
                                    <label  class="col-md-3 control-label">Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    
                              <div class="radio-list">
                                 <label class="radio-inline">
                                 <input type="radio" name="radiogender" id="radiogender" value="option1" checked> Male
                                 </label>
                                 <label class="radio-inline">
                                 <input type="radio" name="radiogender" id="radiogender" value="option2" > Female
                                 </label>
                                 </div> 
                                 <div><br/></div>
                                 
                                 <div class="form-group">
                              <label class="control-label col-md-3">Birth Date</label>
                              <div class="col-md-3">
                                 <input type="date" class="form-control form-control-inline input-medium date-picker" id="txtbdate" name="txtbdate" size="16" placeholder="Enter Birth Date"/>
                                 <?php /*?> <?php echo form_error('txtbdate'); ?><?php */?>
                               
                              </div>
                           </div>
                           <div class="form-group">
                                       <label  class="col-md-3 control-label">Contact No</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtcontactno" name="txtcontactno" class="form-control" placeholder="Enter Mobile No" pattern="[789][0-9]{9}">
                                          <?php /*?> <?php echo form_error('txtcontactno'); ?><?php */?>
                                       </div>
                                    </div>
                           <div class="form-group">
                                       <label  class="col-md-3 control-label">Address</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtaddress" name="txtaddress" class="form-control" placeholder="Enter Address">
                                     <?php /*?>      <?php echo form_error('txtaddress'); ?><?php */?>
                                       </div>
                                    </div>
                                    
                                     <div class="form-group">
                                       <label  class="col-md-3 control-label">City</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtcity" name="txtcity" class="form-control" placeholder="Enter City">
                                      	    <?php /*?><?php echo form_error('txtcity'); ?><?php */?>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">State</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtstate" name="txtstate" class="form-control" placeholder="Enter State">
                                      	 <?php /*?>   <?php echo form_error('txstate'); ?><?php */?>
                                       </div>
                                    </div>
                                  <div class="form-group">
                                       <label  class="col-md-3 control-label">Country</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtcountry" name="txtcountry" class="form-control" placeholder="Enter State">
                                      	  <?php /*?>  <?php echo form_error('txtcountry'); ?><?php */?>
                                       </div>
                                    </div> 
                                 
                                    
                                   <div class="form-actions fluid">
                                    <div class="col-md-offset-3 col-md-9">
                                      <button type="submit" name="btnsubmit" id="btnsubmit" class="btn green"><i class="icon-ok"></i> Submit</button>
                                    <button type="Reset" class="btn default">Reset</button>                              
                                    </div>
                                 </div>
                    
                              </form>
                              <!-- END FORM--> 
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
         
         <!-- END PAGE CONTENT-->    
      </div>
      <!-- END PAGE -->  
   
   