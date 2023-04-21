
<?php //echo "LIST ";
$rs= $paging->paginate();
?>

<div class="container-fluid">
	<!-- Page Heading -->

	<div class="row">
		
	</div>

	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Categories</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-12 col-md-3">
							<div class="dataTables_length" id="dataTable_length">
								<label>Show 
									<!-- <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select>  -->
								</label>
								<div>
									<?php echo $paging->renderFirst('<span class="fa fa-angle-double-left"></span>');?>
									<?php echo $paging->renderPrev('<span class="fa fa-arrow-circle-left"></span>','<span class="fa fa-arrow-circle-left"></span>');?>
									<input name="page" size="5" type="text" class="pagedisplay short" value="<?php echo $paging->renderNavNum();?>" readonly />
									<?php echo $paging->renderNext('<span class="fa fa-arrow-circle-right"></span>','<span class="fa fa-arrow-circle-right"></span>');?>
									<?php echo $paging->renderLast('<span class="fa fa-angle-double-right"></span>');?>
									<?php $paging->limitList($list->limit,"myform");?>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12 col-md-6 ">
						<div id="dataTable_filter" class="dataTables_filter"><label>Search: </label>
						<input type="search" class="form-control " tabindex="1" value="<?php echo  $list->fdsearch; ?>" name="fdsearch" aria-controls="dataTable" placeholder="" /></div>
						</div>

						<div class="col-sm-12 col-md-3 mt-4">			
					<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('add');document.myform.submit();" class="btn btn-primary btn-icon-split" style="float: right;">
						<span class="icon text-white-50">
						<i class="fas fa-plus"></i>
						</span>
					<span class="text">Add Category</span>
						</a>
		
							<!-- <div id="dataTable_filter" class="dataTables_filter"><label>Search:
								<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
								<input type="search" class="form-control form-control-sm" tabindex="1" value="<?php echo  $list->fdsearch; ?>" name="fdsearch" placeholder="" />
								</label>
							</div> -->
						</div>
					</div>
					<br>
					<div class="row">
					<div class="col-sm-12 table-responsive">
							<table class="table table-striped text-nowrap" id="dataTable" width="100%" cellspacing="0"
								role="grid" aria-describedby="dataTable_info" style="width: 100%;">
								<thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 50px;">#</th>
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 190.6px;">Name</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Position: activate to sort column ascending"
											style="width: 307.4px;">Description</th>
											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Position: activate to sort column ascending"
											style="width: 120px;">Date Added</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Salary: activate to sort column ascending"
											style="width: 117.2px;">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 

										if($paging->total_rows > 0 ){

											$page = (empty($page))? 1:$page;
											$num = (isset($page))? ($list->limit*($page-1))+1:1;
											
											$x=1;

											foreach ($rs as $val){
												$data =  $engine->getDataEncrypt($val);
												// var_dump($val); die();
									?>

									<tr role="row" class="odd">
										<td class="sorting_1"><?php echo $x;?></td>
										<td><?php echo $val['CAT_NAME']; ?></td>
										<td><?php echo $val['CAT_DESCRIPTION']; ?></td>
										<td><?php echo date('d/m/Y',strtotime($val['CAT_DATEADDED'])); ?></td>
										<td> 
											<div class="row">
												<?php
												  if($val['CAT_STATUS'] == "1"){
												?>
												<div class="col-sm-12 col-md-5">
													<a  href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php echo $data; ?>');document.myform.submit();" class="btn btn-warning btn-icon-split" >
														<span class="icon text-white-50">
															<i class="far fa-edit"></i>
														</span>
														
													</a>
												</div>

												<div class="col-sm-12 col-md-5">
													<a  href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('');$('#class_call').val('delete');$('#keys').val('<?php echo $val['CAT_CODE']; ?>');delete_func()" class="btn btn-danger btn-icon-split" >
														<span class="icon text-white-50">
															<i class="far fa-trash-alt"></i>
														</span>
														
													</a>
												</div>
												<?php } ?>
											</div>
										</td>
									</tr>


									<?php
												$x= $x + 1;
											}

										}

									?>

									
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
							Showing <?php echo $paging->renderNavNum();?>of <?php echo $paging->max_pages; ?> pages
                                <span class="separator">|</span>

                                Total <?php  echo $paging->total_rows; ?> records

							</div>
						</div>
						<div class="col-sm-12 col-md-7">
							<!-- <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
								<ul class="pagination">
									<li class="paginate_button page-item previous disabled" id="dataTable_previous"><a
											href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
											class="page-link">Previous</a></li>
									<li class="paginate_button page-item active"><a href="#" aria-controls="dataTable"
											data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
											data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
									<li class="paginate_button page-item next" id="dataTable_next"><a href="#"
											aria-controls="dataTable" data-dt-idx="7" tabindex="0"
											class="page-link">Next</a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>