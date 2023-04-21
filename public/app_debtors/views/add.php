<div class="container-fluid ">
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
	<div class="card shadow mb-4 height-auto">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6 class="m-0 font-weight-bold text-primary">ADD DEBTOR</h6>
				</div>
				<div class="col-sm-12 col-md-6" style="text-align:right;">
				<a href="javascript:void(0);" onclick="$('#pg').val('app_expenses');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split mr-1">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>

					<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('add');$('#class_call').val('add');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" >
						<span class="icon text-white-50">
							<i class="fas fa-save"></i>
						</span>
						<span class="text">Save</span>
					</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-12 ">
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_name">Debtor's Name</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="debt_name" name="debt_name" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_contact">Debtor's Contact</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="debt_contact" name="debt_contact" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_amount">Amount </label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="debt_amount" name="debt_amount" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_email">Debtor's Email</label></div>
								<div class="col-md-9 showcase_content_area"><input type="email"
										class="form-control" id="debt_email" name="debt_email" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_address">Debtor's Address</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="debt_address" name="debt_address" value=""></div>
							</div>

							
							</div>


							
							

						</div>

						<div class="col-sm-3">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
