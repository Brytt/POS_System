

<div class="container-fluid">
	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-2 text-gray-800">Edit Expenses</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Edit selected expense </p>
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
					<h6 class="m-0 font-weight-bold text-primary">EDIT EXPENSES</h6>
				</div>
				<div class="col-sm-12 col-md-6"  style="text-align: right;">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_expenses');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>
	
					<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('');$('#class_call').val('update');$('#keys').val('<?php echo $result['EXPS_CODE']; ?>');document.myform.submit();" class="btn btn-success btn-icon-split">
						<span class="icon text-white-50">
							<i class="far fa-edit"></i>
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

							<div id="old_cust" style="display: block;">

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label for="custsearch">Expense Category</label>
									</div>
								
									<div class="col-md-9 showcase_content_area">
									<input type="text"
											placeholder="" class="form-control" id="custname"
											name="custname" value="<?php echo $result['EXPS_CATNAME'] ?>" readonly>
									</div>

								</div>

							</div>


							<div id="new_cust" style="display: none;">

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label for="custname">Expense Category</label></div>
									<div class="col-md-9 showcase_content_area"><input type="text"
											placeholder="" class="form-control" id="custname"
											name="custname" value="" readonly>
										<span style="color: #ff1313; font-size: 0.8em; margin-left: 1em;">Enter expense category name!</span>	
									</div>
								</div>
								
								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label
											for="expencecategory">Expense Category Description</label></div>
									<div class="col-md-9 showcase_content_area">
										<textarea class="form-control" name="" id="" cols="30" rows="2"></textarea>
									</div>
								</div>
							</div>


						</div>

						<div class="col-sm-3">

							<!-- <div class="form-group row showcase_row_area">
								<a href="javascript:void(0);" onclick="toggle_div()"
									class="btn btn-primary btn-icon-split" style="float: right;">
									<span class="icon text-white-50">
										<i class="fas fa-plus"></i>
									</span>
									<span class="text" id="customer_btn">New Expense Category</span>
								</a>
							</div> -->

						</div>
					</div>


					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="expense_totalamount">Total Amount</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="expense_totalamount" name="expense_totalamount" value="<?php echo $result['EXPS_TOTALAMOUNT'] ?>" readonly></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="expense_amountpaid">Amount Paid</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="expense_amountpaid" name="expense_amountpaid" value="<?php echo $result['EXPS_AMOUNTPAID'] ?>" readonly>
										<span>Amount left to Pay: <b><?php echo (float)$result['EXPS_TOTALAMOUNT'] - (float)$result['EXPS_AMOUNTPAID']; ?></b></span>
									</div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="expense_amounttopay">Amount To Pay</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="expense_amounttopay" name="expense_amounttopay" value=""></div>
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