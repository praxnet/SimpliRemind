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
   
   
   <script src="<?=base_url();?>assets/scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
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
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand">
         <label style="font-size:30px; text-align:start;font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; font-weight:bold; color:#FFFFFF">Simpli Remind</label>
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="assets/img/menu-toggler.png" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
         <!-- BEGIN TOP NAVIGATION MENU -->
          
         <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN INBOX DROPDOWN -->
            
            <!-- END INBOX DROPDOWN -->
            <!-- BEGIN TODO DROPDOWN -->
            
            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
           
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <span>Welcome</span>
               <!--<img alt="" src="<?=base_url()?>assets/img/avatar1_smalllg.jpg"/>-->
               <span class="username">
			   <?php
			   
			   if($this->session->userdata('username')) { ?>
			   <?=$this->session->userdata('username')?>
			  <?php }
			   ?>
			   </span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="<?=base_url()?>login/change_password"><i class="icon-user"></i> Change password</a>
                  </li>
                 <li class="divider"></li>
                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a>
                  </li>
                  
                   <li><a href="<?=base_url()?>login/logout"><i class="icon-key"></i> Log out</a>
                  </li>
                  
               </ul>
            </li>	
            <!-- END USER LOGIN DROPDOWN -->
         </ul>
         <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>