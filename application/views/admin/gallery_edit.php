
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
							<li class="active">Edit Data Gallery</li>
						</ul><!-- /.breadcrumb -->

					
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Edit Data Gallery
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/aksi_gallery_edit"  enctype="multipart/form-data">
				
				 <input type="hidden" name="id_gallery" value="<?php echo $gallery['id_gallery']; ?>">
                    
                        
                        <div class="box-body">
                       
                        
                        
                       
						
						 <div class="col-lg-10">
                            <div class="form-group">
                                <label for="tanggal_foto" class="col-sm-3 control-label">Tanggal Foto</label>
                                <div class="col-sm-5">
                                   									<div class="input-group">
																	<input name="tanggal_foto" id="id-date-picker-1" class="form-control date-picker" type="text" value="<?php echo $gallery['tanggal_foto']; ?>" data-date-format="yyyy-mm-dd"  required/>
																	
																	<span class="input-group-addon">
																		<i class="fa fa-calendar-o"></i>
																	</span>
																</div>
                                </div>
                            </div>
                        </div>
						

                    
						

														

														
                        
                       
                    </div>
                    <div class="box-footer">
					<div  class="space"> </div>
                      <center> <div class="col-sm-10">
                            <a href="<?php echo base_url(); ?>admin/gallery_view" class="btn btn-danger">Kembali</a>
                            
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
