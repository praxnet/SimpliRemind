
      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Course</h4>
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
         <!--<div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"></div>
            <div class="toggler-close"></div>
            <div class="theme-options">
               <div class="theme-option theme-colors clearfix">
                  <span>THEME COLOR</span>
                  <ul>
                     <li class="color-black current color-default" data-style="default"></li>
                     <li class="color-blue" data-style="blue"></li>
                     <li class="color-brown" data-style="brown"></li>
                     <li class="color-purple" data-style="purple"></li>
                     <li class="color-grey" data-style="grey"></li>
                     <li class="color-white color-light" data-style="light"></li>
                  </ul>
               </div>
               <div class="theme-option">
                  <span>Layout</span>
                  <select class="layout-option form-control input-small">
                     <option value="fluid" selected="selected">Fluid</option>
                     <option value="boxed">Boxed</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Header</span>
                  <select class="header-option form-control input-small">
                     <option value="fixed" selected="selected">Fixed</option>
                     <option value="default">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Sidebar</span>
                  <select class="sidebar-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Footer</span>
                  <select class="footer-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
            </div>
         </div>-->
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
				  <li><a href="<?= base_url()?>course/courselist">Course</a></li>
                  <li>&nbsp;</li>
                     <i class="icon-angle-right"></i>
                     <li>&nbsp;</li>
                  
                
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
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <form action="<?= base_url()?>course/courselist" name="frmofferlist" id="frmofferlist" method="post" >
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Course List<?php //echo $userID; ?></div>
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
                              <th><b>Name</b></th>
							  <th><b>Duration</b></th>
							  <th><b>Category</b></th>							 
                              <th><b>Join</b></th>                                                         
                           </tr>
                      </thead>
                        <tbody>
                          
                                       
                   <?php
						
                    foreach ($query as $row){
                        $CourseID = $row['CourseID'];
						
						$CourseName = $row['CourseName'];
						$CourseTotalWeek = $row['CourseTotalWeek'];
						$CourseCategory = $row['CourseCategory'];
						$CourseLevel = $row['CourseLevel'];
						$data['CourseID']=$CourseID;
						$data['userID']=$userID;
						
                    ?>
                        <tr>
                            <td><?php echo $row['CourseName']  ?></td>
                            <td><?php echo $row['CourseTotalWeek'] ?> (Week)</td>
							<td><?php echo $row['CourseCategory'] ?></td>
                                                    
                            
                              <td>
                             
                            
                           <a href='courseregistration?userid=<?php echo $userID;?>&courseid=<?php echo $CourseID;?>' onclick='alert("Registered Successfully");'>join now </a>
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
       
       <script>
	   /*
function interestCall() {

    if (confirm("Press OK for High Priority..... Cancel for Low Priority") == true) {
        <?php $interestlevel = 1 ?> 
		//window.alert(<?php echo $interestlevel; ?>);


    } else {
        <?php $interestlevel = 0 ?>
		//window.alert(<?php echo $interestlevel; ?>); 
    }
	<?php //courseregistration($userID,$CourseID,$interestlevel);?>
   // document.getElementById("demo").innerHTML = x;
}

$("#btn").click(function() {
	if (confirm("Press OK for High Priority..... Cancel for Low Priority") == true) {
        <?php $interestlevel = 1 ;?> 
		//window.alert(<?php //echo $interestlevel; ?>);


    } else {
        <?php $interestlevel = 0 ;?>
		//window.alert(<?php //echo $interestlevel; ?>); 
    }
	var userID = <?php echo $userID; ?>;
	//alert(userID);
	var courseID = <?php echo $CourseID; ?>;
	var interestlevel = <?php echo $interestlevel; ?>;
	 alert(interestlevel);
	var request = $.ajax({
			url: "course/courseregistration",
			type: "POST",
			//data: "userID=" + userID,"userID=" + userID,"userID=" + userID		
		});

		request.done(function(msg) {
			$("#mybox").html(msg);			
		});

		request.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		});
});
*/
</script>
   
   