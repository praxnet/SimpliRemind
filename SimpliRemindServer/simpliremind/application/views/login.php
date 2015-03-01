<?php
$role = $this->session->userdata('role');
if($role != '') {
	if($role == 'admin')
		redirect(base_url() . './admin/home');
	if($role == 'executive')
		redirect(base_url() . './admin/home');
}
?>
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
		<label style="font-size:30px; text-align:start;font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; font-weight:bold; color:#FFF">Simpli Remind</label>
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
     
		<!-- BEGIN LOGIN FORM -->
        
		<form class="login-form" action='<?php echo base_url();?>./login/login_status' method="post">
			<h3 class="form-title">Login to your account</h3>
                <?php
				//$error = $this->session->userdata('invalid_user');
				if(isset($error)) { ?>
                	<div style="text-align:center; color:red;"> 
						<button class="close" data-dismiss="alert"></button>
						<span><?=$error?></span>
                	</div>
                   
                    
                <?php } 
				//$this->session->unset_userdata('invalid_user');
				?>			
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="input-icon">
					<i class="icon-user"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="txtusername" id="txtusername"  required/>
				</div>
                <div><?php echo form_error('txtusername'); ?></div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="input-icon">
					<i class="icon-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="txtpassword" id="txtpassword" required />
				</div>
                 <div><?php echo form_error('txtpassword'); ?></div>
			</div>
			<div class="form-actions">
				<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> Remember me
				</label>
				<button type="submit" class="btn green pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
            <?php
                                    if($this->session->flashdata('login_error'))
                                    {
                                        echo 'You entered an incorrect username or password';
                                    }
                                    elseif($this->session->flashdata('suspended'))
                                    {
                                        echo 'Your account has been suspended';
                                    }
                                ?>
			<?php /*?><?
				if(isset($msg))
				echo "invalid username or password";
			
			?><?php */?>
			<div class="forget-password">
				<h4>Forgot your password ?</h4>
				<p>
					no worries, click <a href="javascript:;"  id="forget-password">here</a>
					to reset your password.
				</p>
			</div>
            <div class="create-account">
				<p>
					Don't have an account yet ?&nbsp; 
					<a href="http://localhost/simpliremind/user/userregistration" id="register-btn" >Create an account</a>
				</p>
			</div>
            
            
			
		</form>
		<!-- END LOGIN FORM -->        
		<!-- BEGIN FORGOT PASSWORD FORM -->
		<form class="forget-form" action="" method="post">
			<h3 >Forget Password ?</h3>
			<p>Enter your sequrity question  below to reset your password.</p>
			<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Sequrity Question" name="txtseq" id="txtseq" required />
				</div>
                <p>Enter your Answer  below to reset your password.</p>
                <div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Answer" name="txtans" id="txtans" required />
				</div>
                
                <div class="form-actions">
            		<button type="button" id="back-btn" class="btn">
					<i class="m-icon-swapleft"></i> Back
                	</button>
                    
               <button type="button" class="btn green pull-right" id="reset-btn-demo" href="javascript:;">Next 
               <i class="m-icon-swapright m-icon-white"></i>
               </button>
		     </div>
		</form>
        
        
        
		<!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->
		<form id="reset" class="register-form" action="index.html" method="post">
			 <h3 >Reset Password</h3>
			<p>Enter your new password  below:</p>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="input-icon">
					<i class="icon-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
				</div>
			</div>
			<p>Confirm your new password below:</p>
           
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
				<div class="controls">
					<div class="input-icon">
						<i class="icon-ok"></i>
						<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
					</div>
				</div>
			</div>
			
			<div class="form-actions">
				<button id="register-back-btn" type="button" class="btn">
				<i class="m-icon-swapleft"></i>  Back
				</button>
				<button type="submit" id="register-submit-btn" class="btn green pull-right">
				Reset <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
            
		</form>
		<!-- END REGISTRATION FORM -->
        	
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