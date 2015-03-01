      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title"><?=$title?></h4>
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
         <div class="theme-panel hidden-xs hidden-sm">
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
         </div>
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
                     <a href="index.html">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="#">Dashboard</a></li>
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
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
                              <div class="caption"><i class="icon-reorder"></i>Form Actions On Bottom</div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse"></a>
                                 <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                 <a href="javascript:;" class="reload"></a>
                                 <a href="javascript:;" class="remove"></a>
                              </div>
                           </div>
                           <div class="portlet-body form">
                              <!-- BEGIN FORM-->
                              <form action="#" class="form-horizontal">
                                 <div class="form-body">
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Text</label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" placeholder="Enter text">
                                          <span class="help-block">A block of help text.</span>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Email Address</label>
                                       <div class="col-md-4">
                                          <div class="input-group">
                                             <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                             <input type="email" class="form-control" placeholder="Email Address">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Password</label>
                                       <div class="col-md-4">
                                          <div class="input-group">
                                             <input type="password" class="form-control" placeholder="Password">
                                             <span class="input-group-addon"><i class="icon-user"></i></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Left Icon</label>
                                       <div class="col-md-4">
                                          <div class="input-icon">
                                             <i class="icon-bell"></i>
                                             <input type="text" class="form-control" placeholder="Left icon">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Right Icon</label>
                                       <div class="col-md-4">
                                          <div class="input-icon right">     
                                             <i class="icon-microphone"></i>                             
                                             <input type="text" class="form-control" placeholder="Right icon">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Input With Spinner</label>
                                       <div class="col-md-4">
                                          <input type="password" class="form-control spinner" placeholder="Password">
                                       </div>
                                    </div>
                                    <div class="form-group last">
                                       <label  class="col-md-3 control-label">Static Control</label>
                                       <div class="col-md-4">
                                          <p class="form-control-static">email@example.com</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-actions fluid">
                                    <div class="col-md-offset-3 col-md-9">
                                       <button type="submit" class="btn blue">Submit</button>
                                       <button type="button" class="btn default">Cancel</button>                              
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
   
   