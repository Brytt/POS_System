<div class="container-fluid">
	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-2 text-gray-800">Add Staff</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Add stall to list </p>
		</div>
		<div class="col-sm-12 col-md-6">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="float: right;">
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
				<div class="col-sm-6">
					<h6 class="m-0 font-weight-bold text-primary">ADD STAFF</h6>
				</div>
				<div class="col-sm-12 col-md-6" style="text-align:right;">
				<a href="javascript:void(0);" onclick="$('#pg').val('app_expenses');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split mr-1">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>

					<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('add');$('#class_call').val('add');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" >
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
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="staff_name">Staff's Name</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="staff_name" name="staff_name" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="staff_dateofbirth">Date of Birth</label></div>
								<div class="col-md-9 showcase_content_area"><input type="date"
										class="form-control" id="staff_dateofbirth" name="staff_dateofbirth" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="staff_phone">Phone Number</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="staff_phone" name="staff_phone" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="staff_email">Email</label></div>
								<div class="col-md-9 showcase_content_area"><input type="email"
										class="form-control" id="staff_email" name="staff_email" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="staff_homeaddress">Home Address</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="staff_homeaddress" name="staff_homeaddress" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="staff_info">More Info</label></div>
								<div class="col-md-9 showcase_content_area">
									<textarea class="form-control" name="staff_info" id="staff_info" cols="30" rows="5"></textarea>
								</div>
							</div>

							<hr>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="staff_accountemail">Account Email</label></div>
								<div class="col-md-9 showcase_content_area"><input type="email"
										class="form-control" id="staff_accountemail" name="staff_accountemail" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="staff_accountpassword">Account Password</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="staff_accountpassword" name="staff_accountpassword" value=""></div>
							</div>
							

						</div>

						<div class="col-sm-3">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>