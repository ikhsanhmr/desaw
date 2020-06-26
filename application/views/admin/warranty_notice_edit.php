
			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Edit Data Warranty Notice</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data Warranty Notice
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Edit Data 
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
				<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/aksi_warranty_notice_edit"  enctype="multipart/form-data">
				
				 <input type="hidden" name="id_warranty_notice" value="<?php echo $warranty_notice['id_warranty_notice']; ?>">
                    
                        
                        <div class="box-body">
                       
                        
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="name_of_warranty_issue" class="col-sm-3 control-label">Name of Warranty Issue</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="name_of_warranty_issue" name="name_of_warranty_issue" value="<?php echo $warranty_notice['name_of_warranty_issue']; ?>"  required/>
                                </div>
                            </div>
						</div>
						<div class="col-lg-10">
							<div class="form-group">
                                <label for="follow_up" class="col-sm-3 control-label">Follow Up</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="follow_up" name="follow_up" value="<?php echo $warranty_notice['follow_up']; ?>" />
                                </div>
                            </div>
                        </div>
						<div class="col-lg-10">
							<div class="form-group">
                                <label for="document" class="col-sm-3 control-label">Document</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="document" name="document" value="<?php echo $warranty_notice['document']; ?>" disabled/>
								 <input type="hidden" class="form-control" id="document" name="document" value="<?php echo $warranty_notice['document']; ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-5">
								<?php
										if ($warranty_notice['status']== 1){
												$jelas = "Open";
											} if ($warranty_notice['status']== 2){
												$jelas = "Close";
											}
												?>		
						<select class="form-control" id="status" name="status" required>	
							
							
							<option value="<?php echo $warranty_notice['status']; ?>"><?php echo $jelas; ?></option>
							<option>--Pilih Status--</option>
							<option value="1">Open</option>
							<option value="2">Close</option>
							
							</select>													
								
								 
                                </div>
                            </div>
                        </div>
                    
						

														

														
                        
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>admin/warranty_notice_view" class="btn btn-danger">Kembali</a>
                            
                            <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                </form>
            </div>

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
