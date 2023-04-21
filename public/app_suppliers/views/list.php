<?php //echo "LIST ";
$rs= $paging->paginate();
?>


<div class="container-fluid">


	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Suppliers</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-12 col-md-3">
							<div class="dataTables_length" id="dataTable_length">
								<label>Show 
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
						<div class="col-sm-12 col-md-6">
							<div id="dataTable_filter" class="dataTables_filter"><label>Search: </label>
							<input type="search" class="form-control " tabindex="1" value="<?php echo  $list->fdsearch; ?>" name="fdsearch" placeholder="" /></div>
						</div>
						<div class="col-sm-12 col-md-3 mt-4">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_suppliers');$('#view').val('add');document.myform.submit();" class="btn btn-primary btn-icon-split" style="float: right;">
				<span class="icon text-white-50">
					<i class="fas fa-plus"></i>
				</span>
				<span class="text">Add Supplier</span>
			</a>
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
											style="width: 150px;">Supplier Name</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Position: activate to sort column ascending"
											style="width: 130px;">Phone Number</th>
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 130px;">Email</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Position: activate to sort column ascending"
											style="width: 130px;">Location</th>
										<!-- <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Position: activate to sort column ascending"
											style="width: 89px;">Status</th> -->
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Salary: activate to sort column ascending"
											style="width: 160px;">Action</th>
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
										<td><?php echo $val['SUPL_NAME']; ?></td>
										<td><?php echo $val['SUPL_PHONE']; ?></td>
										<td><?php echo $val['SUPL_EMAIL']; ?></td>
										<td><?php echo $val['SUPL_LOCATION']; ?></td>
										<!-- <td>
											<?php
												if($val['SUPL_STATUS'] == "0"){
											?>
												<span style="color: red;">Inactive</span>
											<?php
												}else if($val['SUPL_STATUS'] == "1"){
											?>
												<span style="color: green;">Active</span>
											<?php
												}
											?>
										</td> -->
										<td> 
											<div class="row">
												<?php
												  if($val['SUPL_STATUS'] == "1"){
												?>
												<div class="col-sm-12 col-md-5">
													<a  href="javascript:void(0);" onclick="$('#pg').val('app_suppliers');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php echo $data; ?>');document.myform.submit();" class="btn btn-warning btn-icon-split" >
														<span class="icon text-white-50">
															<i class="far fa-edit"></i>
														</span>
													</a>
												</div>

												<div class="col-sm-12 col-md-5">
													<a  href="javascript:void(0);" onclick="$('#pg').val('app_suppliers');$('#view').val('list');$('#class_call').val('delete');$('#keys').val('<?php echo $val['SUPL_CODE']; ?>');delete_func()" class="btn btn-danger btn-icon-split" >
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


									<!-- <tr role="row" class="odd">
										<td class="sorting_1">1</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td> 
											<div class="row">
												<div class="col-sm-12 col-md-5">
													<a  href="javascript:void(0);" onclick="$('#pg').val('app_suppliers');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-primary btn-icon-split" >
														<span class="icon text-white-50">
															<i class="far fa-edit"></i>
														</span>
														<span class="text">Edit</span>
													</a>
												</div>
												<div class="col-sm-12 col-md-5">
													<a  href="javascript:void(0);" onclick="$('#pg').val('app_suppliers');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-danger btn-icon-split" >
														<span class="icon text-white-50">
															<i class="far fa-trash-alt"></i>
														</span>
														<span class="text">Delete</span>
													</a>
												</div>
											</div>
										</td>
									</tr>
									 -->
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
							<!-- <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1
								to 10 of 57 entries</div> -->
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