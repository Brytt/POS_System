
<div class="container-fluid">
	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-2 text-gray-800">Edit Staff</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">EDIT DEBTOR </p>
		</div>
		<div class="col-sm-12 col-md-6">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_debtors');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="float: right;">
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
					<h6 class="m-0 font-weight-bold text-primary">EDIT DEBTOR'S DETAILS</h6>
				</div>

				<div class="col-sm-12 col-md-6" style="text-align:right;">
				<a href="javascript:void(0);" onclick="$('#pg').val('app_expenses');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split mr-1">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>

				<a href="javascript:void(0);" onclick="$('#pg').val('app_debtors');$('#view').val('');$('#class_call').val('update');$('#keys').val('<?php echo $result['DEBT_CODE']; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" style="float: right;">
						<span class="icon text-white-50">
							<i class="fas fa-upload"></i>
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
					
						<div class="col-sm-12">
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_name">Debtor's Name</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="debt_name" name="debt_name" value="<?php echo $result['DEBT_NAME']; ?>"></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_contact">Contact</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="debt_contact" name="debt_contact" value="<?php echo $result['DEBT_CONTACT']; ?>"></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_amount">Amount</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="debt_amount" name="debt_amount" value="<?php echo $result['DEBT_AMOUNT']; ?>"></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_email">Email</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="debt_email" name="debt_email" value="<?php echo $result['DEBT_EMAIL']; ?>"></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="debt_address">Address</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="debt_address" name="debt_address" value="<?php echo $result['DEBT_ADDRESS']; ?>"></div>
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