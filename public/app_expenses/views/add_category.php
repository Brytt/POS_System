<div class="container-fluid">
	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-2 text-gray-800">Add Expense Category</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Add Expense Category to list </p>
		</div>
		<div class="col-sm-12 col-md-6">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_expenses');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="float: right;">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>
		</div>
	</div> -->

	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6 class="m-0 font-weight-bold text-primary">EXPENSE CATEGORY</h6>
				</div>
				<div class="col-sm-12 col-md-6" style="text-align:right;">
				<a href="javascript:void(0);" onclick="$('#pg').val('app_expenses');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split mr-1">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>

					<a href="javascript:void(0);" onclick="$('#pg').val('app_expenses');$('#view').val('add_category');$('#class_call').val('add_category');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" >
						<span class="icon text-white-50">
							<i class="fas fa-plus"></i>
						</span>
						<span class="text">Submit</span>
					</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
				<div class="row">
                        <div class="col-sm-2">
                        </div>
						
                        <div class="col-sm-6">
							<h5>Add Expense Category </h5>		
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="expencecategory_name">Category Name</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="expencecategory_name" name="expencecategory_name" value=""></div>
							</div>
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="expencecategory_description">Expense Category Description</label></div>
								<div class="col-md-9 showcase_content_area">
									<textarea class="form-control" name="expencecategory_description" id="" cols="30" rows="3"></textarea>
								</div>
							</div>
							
						</div>

						<div class="col-sm-3">
						</div>

					</div>

					<br>
					
					<div class="row">
                        <div class="col-sm-2">
						</div>
						<div class="col-sm-8">
						<?php
							// var_dump($result['stmt_expensecategory']); die();
						?>
							<h5>Expense Category List</h5>
							<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
								<thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 40px;">#</th>
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 120px;">Category Name</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Position: activate to sort column ascending"
											style="width: 120px;">Category Description</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Office: activate to sort column ascending"
											style="width: 100px;">Status</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Salary: activate to sort column ascending"
											style="width: 200px;">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php 
									$x = 1;
									foreach ($result['stmt_expensecategory'] as $val){
										// $data =  $engine->getDataEncrypt($val);
										// var_dump($val); die();
								?>

									<tr role="row" class="odd">
										<td class="sorting_1"><?php echo $x;?></td>
										<td><?php echo $val['EXCAT_NAME']; ?></td>
										<td><?php echo $val['EXCAT_DESCRIPTION']; ?></td>
										<td>
											<?php
												if($val['EXCAT_STATUS'] == "0"){
											?>
												<span style="color: red;">Inactive</span>
											<?php
												}else if($val['EXCAT_STATUS'] == "1"){
											?>
												<span style="color: green;">Active</span>
											<?php
												}
											?>
										</td>
										<td> 
											<div class="row">
												<?php
												  if($val['EXCAT_STATUS'] == "1"){
												?>
												<!-- <div class="col-sm-12 col-md-5">
													<a  href="javascript:void(0);" onclick="$('#pg').val('app_category');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php //echo $data; ?>');document.myform.submit();" class="btn btn-primary btn-icon-split" >
														<span class="icon text-white-50">
															<i class="far fa-edit"></i>
														</span>
														<span class="text">Edit</span>
													</a>
												</div> -->

												<div class="col-sm-12 col-md-5">
													<a  href="javascript:void(0);" onclick="$('#pg').val('app_expenses');$('#view').val('add_category');$('#class_call').val('delete_category');$('#keys').val('<?php echo $val['EXCAT_CODE']; ?>');delete_func()" class="btn btn-danger btn-icon-split" >
														<span class="icon text-white-50">
															<i class="far fa-trash-alt"></i>
														</span>
														<span class="text">Delete</span>
													</a>
												</div>
												<?php } ?>
											</div>
										</td>
									</tr>


									<?php
												$x= $x + 1;
											}

									?>
			
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>