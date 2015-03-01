      
      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                     Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
     
         <!-- END BEGIN STYLE CUSTOMIZER -->            
         <!-- BEGIN PAGE HEADER-->   
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Dashboard <small>statistics and more</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                      <a href="<?=base_url()?>admin/home">Dashboard</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
				   	<a href="<?= base_url()?>course/courselist">Course</a>
					<i class="icon-angle-right"></i>
				  </li>
				  <li><a href="">Course Details</a></li>
                  <li class="pull-right">
                     
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <div class="tabbable tabbable-custom boxless">
                  
                 
         <div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="table-toolbar">
               
                        <div class="btn-group pull-right">
                           <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                           </button>
                           <ul class="dropdown-menu pull-right">
                              <li><a href="#">Print</a></li>
                              <li><a href="#">Save as PDF</a></li>
                              <li><a href="#">Export to Excel</a></li>
                           </ul>
                        </div>
                     </div>
                     
               <form action="" name="frmofferlist" id="frmofferlist" method="post" >
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Offer List</div>
                     
                  </div>
                  
                  <div class="portlet-body">
                  
                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                       <thead>
                           <tr>
                              <th><b>First Name</b></th>
							  <th><b>Last Name</b></th>
                              <th><b>CurrentCourseWeek</b></th>
                              <th><b>UserCurrentCourseWeek</b></th>
                              <th><b>UserInterestLevel</b></th>
                              <th><b>Send Message</b></th>
                          </tr>
                      </thead>
                        <tbody>
                           <?php	
                   		foreach ($row['query'] as $row1){
                        //$CourseID = $row1['CourseID'];
						
						//$CourseName = $row1['CourseName'];
						//$CourseTotalWeek = $row1['CourseTotalWeek'];
						//$CourseCategory = $row1['CourseCategory'];
						//$CourseLevel = $row1['CourseLevel'];
						//$data['CourseID']=$CourseID;
						$userID = $row1['UserID'];
						
                    ?>
                        <tr>
                            <td><?php echo $row1['FirstName'] ; ?></td>
                            <td><?php echo $row1['LastName']; ?> </td>
							<td><?php echo $row1['CurrentCourseWeek'] ?></td>
                            <td><?php echo $row1['UserCurrentCourseWeek'] ?></td>
                            <td><?php echo $row1['UserInterestLevel'] ?></td>
                            <td>  
                           <a href='demo2?userID=<?php echo $userID;?>'>Send </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                                    
               
                           
                        </tbody>
                    </table>
                 </div>
               </div>
               </form>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>   
     	 </div>
      </div>
     </div>
       <!-- END PAGE CONTENT-->    
      </div>
      <!-- END PAGE --> 