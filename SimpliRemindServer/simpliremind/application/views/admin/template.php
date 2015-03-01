 <!-- BEGIN HEADER --> 
 
 <?php 
  		$this->load->view("admin/include/header");
 ?>
 
   <!-- END HEADER -->

  <div class="clearfix"></div>
   
   <!-- BEGIN CONTAINER -->
   
   <div class="page-container">

<?php 	
		$this->load->view("admin/include/sidebar"); 
		$this->load->view($content);	
?>	
	 </div>
   
   <!-- END CONTAINER -->
   
   <!-- BEGIN FOOTER -->
<?php
	   $this->load->view("admin/include/footer");
?>
   <!-- END FOOTER -->
