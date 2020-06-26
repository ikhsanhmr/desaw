
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
							<li class="active">List Warranty Notice</li>
						</ul><!-- /.breadcrumb -->

					
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								List Warranty Notice
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									View List
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
										
										<div class="table-header">
											List Warranty Notice
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															No.
														</th>

 									<th>Date</th>
														<th>Name Of Warranty Issue</th>
 									<th>Follow Up</th>
 									<th>Document</th>
 									<th>Status</th>
														
									 <th>Actions</th>
														
													</tr>
												</thead>

												<?php 
												$no =1;
												?>
												<tbody>
													
													<?php foreach ($warranty_notice->result_array() as $data) { ?>
													<tr>
														<td class="center">
															<?php echo $no; ?>
														</td>
														<td>
 											<?php echo date('d-m-Y' , strtotime($data['date_warranty_notice'])); ?>
 										</td>

 										<td>
 											<?php echo $data['name_of_warranty_issue']; ?>
 										</td>

 										<td>
 											<?php echo $data['follow_up']; ?>
 										</td>

 										<td>
 											<?php echo $data['document']; ?>
 										</td>
											<?php
															if ($data['status'] == 1) {
																	$jelas = "Open";
																} else {
																	$jelas = "Close";
																}
															?>	
														<td>
																<?php echo $jelas; ?>
														</td>


 										<td>
 											<input type="hidden" name="id_warranty_notice" value="<?php echo $data['id_warranty_notice']; ?>">
 											<div class="hidden-sm hidden-xs action-buttons">


 												<a class="green" value="<?php echo $data['id_warranty_notice']; ?>" href="<?php echo base_url() . "admin/warranty_notice_edit?id_warranty_notice=" . $data['id_warranty_notice'] ?>">

 													<i class="fa fa-pencil bigger-130"></i>
 												</a>
 												&nbsp;
 												<a class="red" value="<?php echo $data['id_warranty_notice']; ?>" href="<?php echo base_url() . "admin/warranty_notice_delete?id_warranty_notice=" . $data['id_warranty_notice'] ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">

 													<i class="fa fa-trash-o bigger-130"></i>
 												</a>
 											</div>

 										</td>
														
														
													</tr>

													


													

													<?php 
													$no++;
													}
												
												?>
												
												</tbody>
											</table>
											
											<div class="space"></div>
												<div class="row">
														<div id="default-buttons" class="col-sm-6">
														<a class="btn btn-primary" href="<?php echo site_url('admin/warranty_notice_add'); ?>">Tambah Data</a>
														</div>
												</div>
										</div>
									

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
