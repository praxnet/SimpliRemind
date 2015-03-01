
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
	<title><?= $title; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
    
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link href="<?= base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url()?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES --> 
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/select2/select2_metro.css" />
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME STYLES --> 
	<link href="<?= base_url()?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url()?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url()?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url()?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url()?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?= base_url()?>assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url()?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="<?= base_url()?>favicon.ico" />
    
</head>
<!-- BEGIN BODY -->
<body class="login">

	<!-- BEGIN LOGO -->
	<div class="logo">
		<label style="font-size:30px; text-align:start;font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; font-weight:bold; color:#FFF">My Mobile</label>
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
    
	<div class="content">
     
		<!-- BEGIN LOGIN FORM -->
        
		<form class="resetform" action='#' method="post">
			<h3 class="form-title"><??>Change Password</h3>
                	
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">New Password</label>
				<div class="input-icon">
					<i class="icon-user"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Enter Old Password" name="oldpassword" id="oldpassword"  required/>
				</div>
				
                
			</div>
			
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">New Password</label>
				<div class="input-icon">
					<i class="icon-user"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Enter New Password" name="newpassword" id="newpassword"  required/>
				</div>
				
                
			</div>
			
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Confirm Password</label>
				<div class="input-icon">
					<i class="icon-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password Confirm" name="rpassword" id="rpassword" required />
				</div>
               
			</div>
            
			<div class="form-actions">
            <button type="button" id="back-btn" class="btn">
					<i class="m-icon-swapleft"></i> Back
                	</button>
				
				<button type="submit" class="btn green pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
            
			
		</form>
		<!-- END LOGIN FORM -->        
		
        
        
        
		<!-- END FORGOT PASSWORD FORM -->
        
        	
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->   
	<script src="<?= base_url()?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="<?= base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?= base_url()?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?= base_url()?>assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>	
	<script type="text/javascript" src="<?= base_url()?>assets/plugins/select2/select2.min.js"></script>     
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?= base_url()?>assets/scripts/app.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/scripts/login.js" type="text/javascript"></script> 
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>