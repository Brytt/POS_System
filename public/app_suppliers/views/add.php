<div class="container-fluid">
	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-2 text-gray-800">Add Supplier</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Add supplier to list </p>
		</div>
		<div class="col-sm-12 col-md-6">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_suppliers');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="float: right;">
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
					<h6 class="m-0 font-weight-bold text-primary">Enter Supplier's details</h6>
				</div>
				<div class="col-sm-12 col-md-6 " style="text-align:right;">
				<a href="javascript:void(0);" onclick="$('#pg').val('app_suppliers');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" >
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>

					<a href="javascript:void(0);" onclick="$('#pg').val('app_suppliers');$('#view').val('add');$('#class_call').val('add');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-success btn-icon-split">
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
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="supplier_name">Supplier Name</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="supplier_name" name="supplier_name" value=""></div>
							</div>
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="supplier_phone">Phone Number</label></div>
								<div class="col-md-9 showcase_content_area">
									<input type="number" class="form-control" id="supplier_phone" name="supplier_phone" value="">
								</div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="supplier_email">Email</label></div>
								<div class="col-md-9 showcase_content_area">
									<input type="email" class="form-control" id="supplier_email" name="supplier_email" value="">
								</div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="supplier_location">Location</label></div>
								<div class="col-md-9 showcase_content_area">
									<input type="text" class="form-control" id="supplier_location" name="supplier_location" value="">
								</div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="supplier_info">More Information</label></div>
								<div class="col-md-9 showcase_content_area">
									<textarea class="form-control" name="supplier_info" id="supplier_info" cols="30" rows="5"></textarea>
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

</div>