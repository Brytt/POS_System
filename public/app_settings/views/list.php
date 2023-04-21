<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Settings</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Edit settings details </p>
		</div>
		<div class="col-sm-12 col-md-6">
			
		</div>
	</div>

	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-6">
					<h6 class="m-0 font-weight-bold text-primary">Enter Settings</h6>
				</div>
				<div class="col-sm-6">
					<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('list');$('#class_call').val('update');$('#keys').val('<?php echo $result->COMP_CODE;  ?>');document.myform.submit();" class="btn btn-success btn-icon-split" style="float: right;">
						<span class="icon text-white-50">
							<i class="far fa-edit"></i>
						</span>
						<span class="text">Update</span>
					</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-6">
							<div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-12 showcase_text_area">
										<h5 for="driver_fname">Company Details</h5>
									</div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label
											for="company_name">Company Name</label></div>
									<div class="col-md-9 showcase_content_area"><input type="text"
											class="form-control" id="company_name" name="company_name" value="<?php echo $result->COMP_NAME; ?>"></div>
								</div>
								
								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label
											for="company_phone">Company Phone</label></div>
									<div class="col-md-9 showcase_content_area"><input type="number"
											class="form-control" id="company_phone" name="company_phone" value="<?php echo $result->COMP_PHONE; ?>"></div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label
											for="company_email">Company Email</label></div>
									<div class="col-md-9 showcase_content_area"><input type="email"
											class="form-control" id="company_email" name="company_email" value="<?php echo $result->COMP_EMAIL; ?>"></div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label
											for="company_website">Company Website</label></div>
									<div class="col-md-9 showcase_content_area"><input type="text"
											class="form-control" id="company_website" name="company_website" value="<?php echo $result->COMP_WEBSITE; ?>"></div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label
											for="company_city">Company Location</label></div>
									<div class="col-md-9 showcase_content_area"><input type="text"
											class="form-control" id="company_city" name="company_city" value="<?php echo $result->COMP_LOCATION; ?>"></div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label
											for="company_address">Company Address</label></div>
									<div class="col-md-9 showcase_content_area"><input type="text"
											class="form-control" id="company_address" name="company_address" value="<?php echo $result->COMP_ADDRESS; ?>"></div>
								</div>


							</div>
							
						</div>

						<div class="col-sm-6">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>