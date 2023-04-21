<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Loss Report</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Loss profit report by from and to date </p>
		</div>
		<div class="col-sm-12 col-md-6">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="float: right;">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>
		</div>
	</div>

	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-6">
					<h6 class="m-0 font-weight-bold text-primary">Filter by :</h6>
				</div>
				<div class="col-sm-6">

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
										for="driver_fname">From</label></div>
								<div class="col-md-9 showcase_content_area"><input type="date"
										class="form-control" id="driver_fname" name="driver_fname" value=""></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="driver_fname">To</label></div>
								<div class="col-md-9 showcase_content_area"><input type="date"
										class="form-control" id="driver_fname" name="driver_fname" value=""></div>
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