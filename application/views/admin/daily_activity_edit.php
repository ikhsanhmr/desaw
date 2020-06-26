
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
							<li class="active">Edit Data Daily Activity</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data Daily Activity
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/aksi_daily_activity_edit"  enctype="multipart/form-data">
				
				 <input type="hidden" name="id_daily_activity" value="<?php echo $daily_activity['id_daily_activity']; ?>">
				 <input type="hidden" name="date_activity" value="<?php echo $daily_activity['date_activity']; ?>">
                    
                        
                        <div class="box-body">
                       
                        
                        
                       
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="name_of_activity" class="col-sm-3 control-label">Name of Activity</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="name_of_activity" name="name_of_activity" value="<?php echo $daily_activity['name_of_activity']; ?>" required/>
                                </div>
                            </div>
                        </div>
                       
                        
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="detail_of_activity" class="col-sm-3 control-label">Detail of Activity</label>
                                <div class="col-sm-5">
								 <textarea style="white-space: pre-line" name="detail_of_activity" id="detail_of_activity" rows="6" cols="44" required/><?php echo $daily_activity['detail_of_activity']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        
						
                    
						

														

														
                        
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>admin/daily_activity_view" class="btn btn-danger">Kembali</a>
                            
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
