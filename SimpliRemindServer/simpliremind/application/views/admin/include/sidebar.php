
<!-- BEGIN SIDEBAR -->
      <div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN ADMIN SIDEBAR MENU --> 
		 
			<?php
			$abv = $this->session->userdata;
			//print_r($abv);
			//die('djhjh');
			$role = $this->session->userdata('role');
			if($role == 'admin') { ?>
			 
        	<ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <div>
               <br/></div>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            
          
    <!-- if the department is maths and informatics then it will show the following list of links-->
    
            
            
            <li class="start active ">
               <a href="<?=base_url()?>admin/home">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="">
               <a href="<?=base_url()?>course/coursedetails">
                <i class="icon-cogs"></i> 
               <span class="title">Course</span>
               
               </a>
              
            </li>
            
          </ul>
         <!-- END ADMIN SIDEBAR MENU -->
		 <?php }
		 elseif($role == 'student') { ?>
		 
          <!-- BEGIN EXECUTIVE SIDEBAR MENU -->  
		  
		 <?php /*?>  <?php elseif($role == "executive"): ?>    <?php */?>  
         	<ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <div><br/></div>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start active ">
               <a href="<?=base_url()?>admin/home">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="">
                <a href="<?=base_url()?>course/courselist">
                <i class="icon-cogs"></i> 
               <span class="title">Join Course</span>
               </a>
            </li>
             <li class="">
                <a href="<?=base_url()?>course/courselist">
                <i class="icon-cogs"></i> 
               <span class="title">Course Progress</span>
               </a>
            </li>
            
            
          </ul>
		  <?php } ?>
         <!-- END EXECUTIVE SIDEBAR MENU -->
               </div>
      <!-- END SIDEBAR -->