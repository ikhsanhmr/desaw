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
							<li class="active">Gallery</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						

						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Gallery
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Photo Gallery 
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
								<div class="space"></div>
												<div class="row">
														<div id="default-buttons" class="col-sm-6">
														<a class="btn btn-primary" href="<?php echo site_url('admin/gallery_add'); ?>">Tambah Gambar</a>
														</div>
												</div>
								<div class="space"></div>
								
									<ul class="ace-thumbnails clearfix">
										<!-- #section:pages/gallery -->
										
								<?php foreach ($gallery->result_array() as $data) { ?>
										<li>
											<a href="<?php echo base_url(); ?>assets/images/gallery/<?php echo $data['file_foto']; ?>" data-rel="colorbox">
												<img width="150" height="150" alt="150x150" src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $data['file_foto']; ?>" />
												<div class="text">
													<div class="inner"><?php echo $data['judul_foto']; ?></div>
												</div>
												
											</a>
											<div class="tools tools-bottom">
												<a href="<?php echo base_url(); ?>assets/images/gallery/<?php echo $data['file_foto']; ?>" data-rel="colorbox">
														<i class="ace-icon fa fa-search-plus"></i>
														</a>
												
											

												
																
																	<a href="<?php echo base_url() . "admin/gallery_edit?id_gallery=" . $data['id_gallery']; ?>">
													<i class="ace-icon fa fa-pencil"></i>
												</a>
																	<a  href="<?php echo base_url() . "admin/gallery_delete?id_gallery=" . $data['id_gallery']; ?>" onclick="return confirm('Anda Yakin Menghapus Gambar Ini?');">
																		<i class="ace-icon fa fa-times red"></i>
																	</a>
																	
												
											</div>
											<br>
											
											<?php 
											//print_r ($data); exit;
											if ($data['tanggal_foto'] == '0000-00-00') {
												$datenya = ' -';
											} else {
												$datenya = date('d M Y' , strtotime($data['tanggal_foto']));
											}
											?>
												<div>
													Tanggal Foto : <div class="inner"><?php echo $datenya; ?></div>
												</div>
										</li>
										

										<?php 
													
													}
												
												?>
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->