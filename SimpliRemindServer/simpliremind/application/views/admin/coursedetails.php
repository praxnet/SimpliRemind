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
                <form action="<?= base_url()?>course/studentdetails" name="frmofferlist" id="frmofferlist" method="post" >
                         <div class="form-group">
                              		
                              			<div class="col-md-4">
                                			 <select  class="form-control select2me" data-placeholder="Select Course" id="courseid" name="courseid" onchange="this.form.submit()">
                                    			 <option></option>
											 <?php
											foreach($query as $row) { ?>
												<option value="<?=$row['CourseID']?>"><?=$row['CourseName']?></option>	
											<? }
											?>
                                          
                                    		
                                 			 </select>
                                 			
                                		</div>
                                        <br/>
                             </form>
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
                              <th><b>Name</b></th>
							  <th><b>Description</b></th>
							  <th><b>Start Date</b></th>
							  <th><b>End Date</b></th>
                              <th><b>Edit</b></th>
                              <th><b>Delete</b></th>
                           </tr>
                      </thead>
                        <tbody>
                          
                                    
                 <?php
				 
				 if(isset($data)){
				  print_r($data['studentdetail']);}?>
                           
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