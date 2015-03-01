    <?php /*?>    <? if($success == 1) { ?>
	 <script>alert('success');</script>	
	<?php
    }	
	 ?><?php */?>
	
      
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
				  <li><a href="<?= base_url()?>executive/executivelist"> Exeutive </a></li>
                  <li>&nbsp;</li>
                     <i class="icon-angle-right"></i>
                     <li>&nbsp;</li>
                   <li>
                  	<a href="<?=base_url()?>executive/executiveregistration">Executive Registration</a> 
                     
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
                  
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_0">
                        <div class="portlet box green">
                           <div class="portlet-title">
                              <div class="caption"><i class="icon-reorder"></i>User Registration</div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse"></a>
                                 <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                 <a href="javascript:;" class="reload"></a>
                                 <a href="javascript:;" class="remove"></a>
                              </div>
                           </div>
                           <div class="portlet-body form">
                          
                              <!-- BEGIN FORM-->
                             <form action="<?=base_url()?>User/usermanagement/<?=$query['UserID']?>" method="post" name="frmusermanagement" id="frmusermanagement"  class="form-horizontal" enctype="multipart/form-data">
                              
                              <div><br/></div>
                              <div class="form-group">
                              <label class="control-label col-md-3">Image Upload</label>
                              <div class="col-md-9">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <img src="../../assets/uploads/user/<?=$query['Image']?>" alt="" name="userfile" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn default btn-file">
                                       <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                       <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                       <input type="file" class="default" name="userfile" id="userfile" />
                                       </span>
                                       <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                    </div>
                                 </div>
                                
                              </div>
                           </div>
                           <div class="form-group">
									<label  class="col-md-3 control-label">First Name</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtfname" name="txtfname"  class="form-control" placeholder="Enter Name"  value="<?=$query['FirstName']?>" required>
                                      <?php /*?>    <?php echo form_error('txtfname'); ?><?php */?>
                                       </div>
                                    </div>
                                     <div class="form-group">
                                       <label  class="col-md-3 control-label">Middle Name</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtmname" name="txtmname" class="form-control" placeholder="Enter Name"  value="<?=$query['MiddleName']?>">
                                          <?php /*?> <?php echo form_error('txtmname'); ?><?php */?>
                                       </div>
                                    </div>
                                     <div class="form-group">
                                       <label  class="col-md-3 control-label">Last Name</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtlname" name="txtlname" class="form-control" placeholder="Enter Name" required  value="<?=$query['LastName']?>">
                                         <?php /*?>  <?php echo form_error('txtlname'); ?><?php */?>
                                       </div>
                                    </div>
                                    <!--<div class="form-group">
                                       <label  class="col-md-3 control-label">User Name</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtusername" name="txtusername" class="form-control" placeholder="Enter Name" required  value="<?=$query['UserName']?>">
                                         <?php /*?>  <?php echo form_error('txtusername'); ?><?php */?>
                                       </div>
                                    </div>-->
                                 <div class="form-group">
                                       <label  class="col-md-3 control-label">Email Address</label>
                                       <div class="col-md-4">
                                          <input type="email" class="form-control" id="txtemailid" name="txtemailid" placeholder="Email Address"  value="<?=$query['EmailID']?>">	<?php /*?><?php echo form_error('txtemailid'); ?><?php */?>
                                          </div>
                                       </div>
                                   
                                    <label  class="col-md-3 control-label">Gender</label>
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
                                 <input type="date" class="form-control form-control-inline input-medium date-picker" id="txtbdate" name="txtbdate" size="16" placeholder="Enter Birth Date"  value="<?=$query['BirthDate']?>"/>
                                 <?php /*?> <?php echo form_error('txtbdate'); ?><?php */?>
                               
                              </div>
                           </div>
                           <div class="form-group">
                                       <label  class="col-md-3 control-label">Contact No</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtcontactno" name="txtcontactno" class="form-control" placeholder="Enter Mobile No" pattern="[789][0-9]{9}"  value="<?=$query['ContactNo']?>">
                                          <?php /*?> <?php echo form_error('txtcontactno'); ?><?php */?>
                                       </div>
                                    </div>
                           <div class="form-group">
                                       <label  class="col-md-3 control-label">Address</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtaddress" name="txtaddress" class="form-control" placeholder="Enter Address"  value="<?=$query['Address']?>">
                                     <?php /*?>      <?php echo form_error('txtaddress'); ?><?php */?>
                                       </div>
                                    </div>
                                    
                                     <div class="form-group">
                                       <label  class="col-md-3 control-label">City</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtcity" name="txtcity" class="form-control" placeholder="Enter City"  value="<?=$query['City']?>">
                                      	    <?php /*?><?php echo form_error('txtcity'); ?><?php */?>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">State</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtstate" name="txtstate" class="form-control" placeholder="Enter State"  value="<?=$query['State']?>">
                                      	 <?php /*?>   <?php echo form_error('txstate'); ?><?php */?>
                                       </div>
                                    </div>
                                  <div class="form-group">
                                       <label  class="col-md-3 control-label">Country</label>
                                       <div class="col-md-4">
                                          <input type="text" id="txtcountry" name="txtcountry" class="form-control" placeholder="Enter State"  value="<?=$query['Country']?>">
                                      	  <?php /*?>  <?php echo form_error('txtcountry'); ?><?php */?>
                                       </div>
                                    </div> 
                                 <div class="form-group">
                              		<label class="control-label col-md-3">Role</label>
                              			<div class="col-md-4">
                                			  <input type="text" id="txtrole" name="txtrole" class="form-control" placeholder="Enter Role"  value="<?=$query['Role']?>">
                                      	  <?php /*?>  <?php echo form_error('txtrole'); ?><?php */?>
                                		</div>
                                </div>
                                 <div class="form-group">
                              		<label class="control-label col-md-3">Department</label>
                              			<div class="col-md-4">
                                			  <input type="text" id="txtdepartment" name="txtdepartment" class="form-control" placeholder="Enter Department"  value="<?=$query['Department']?>">
                                      	  <?php /*?>  <?php echo form_error('txtdepartment'); ?><?php */?>
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
   
   