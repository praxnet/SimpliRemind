      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title"><?=$title;?></h4>
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
                     <a href="<?= base_url()?>admin/home">Dashboard</a> 
                     <i class="icon-angle-right"></i>
                  </li>
               <li><a href="<?= base_url()?>user/userlist">User</a></li>
                  <li>&nbsp;</li>
                     <i class="icon-angle-right"></i>
                     <li>&nbsp;</li>
                   <li>
                  	<a href="<?=base_url()?>user/userlist">User List</a> 
                     
                  </li>
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
                        <div class="btn-group">
                         <button  class="btn green" onclick="window.location.href='<?=base_url()?>user/userregistration'">
                        Add New <i class="icon-plus"></i>
                           </button>
                        </div>
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
               <form action="<?= base_url()?>Executive/executivelist" name="frmofferlist" id="frmofferlist" method="post" >
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>User List</div>
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                       <thead>
                           <tr>
                              <th><b>First Name</b></th>
							  <th><b>Last Name</b></th>
                              <th><b>Department</b></th>
                              <th><b>Role</b></th>
					          <th><b>Edit</b></th>
                              <th><b>Delete</b></th>
                           </tr>
                      </thead>
                        <tbody>
                          
                                       
                   <?php
                    foreach ($query as $row){
                        $UserID = $row['UserID'];
                    ?>
                        <tr>
                            <td><?php echo $row['FirstName'] ?></td>
                            <td><?php echo $row['LastName'] ?></td>
                            <td><?php echo $row['Department'] ?></td>
                            <td><?php echo $row['Role'] ?></td>
							<td><a href='usermanagement/<?php echo $UserID ?>'>Edit</a></td>
                            <td>
                                <?php 
                                    echo anchor('User/delete_user/'.$UserID, 'Delete', array('onClick' => "return confirm('Are you sure you want to delete executive?')"));
                                ?>
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
   
   