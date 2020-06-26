
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
							<li class="active">Add Issue</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Add Warranty Notice
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								Add Warranty Notice
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
<div class="box-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/aksi_warranty_notice_add" enctype="multipart/form-data">
				
                    <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="name_of_warranty_issue" class="col-sm-3 control-label">Name of Warranty Issue</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="name_of_warranty_issue" name="name_of_warranty_issue" required/>
                                </div>
                            </div>
                        </div>
						
						<div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="follow_up" class="col-sm-3 control-label">Follow Up</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="follow_up" name="follow_up" required/>
                                </div>
                            </div>
						</div>
						

						<div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="document" class="col-sm-3 control-label">Document</label>
                                <div class="col-sm-5">
								 <input type="file" class="form-control" id="document" name="document" required/>
                                </div>
                            </div>
                        </div>
						
						
						
                        
                       
						
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-5">
								 	
							<select class="form-control" id="status" name="status" required>	
							<option>--Pilih Status--</option>
							<option value="1">Open</option>
							<option value="2">Close</option>
							
							</select>	
								 
								 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>admin/warranty_notice_view" class="btn btn-danger">Kembali</a>
                            <button type="reset" class="btn btn-warning">Ulangi</button>
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
