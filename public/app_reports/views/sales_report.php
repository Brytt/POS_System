<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Sales Report</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Filter sales report by from and to date </p>
		</div>
		<div class="col-sm-12 col-md-6">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_reports');$('#view').val('sales_filter');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="float: right;">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>
		</div>
	</div>
<?php

// var_dump($result); die();

?>
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-6">
					<h6 class="m-0 font-weight-bold text-primary">Report Formats :</h6>
				</div>
				<div class="col-sm-6">

                    <a href="javascript:void(0);" onclick="$('#pg').val('app_reports');$('#view').val('sales_report');$('#class_call').val('sales_report');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-primary btn-icon-split" style="float: right;">
						<span class="icon text-white-50">
							<i class="fas fa-print"></i>
						</span>
						<span class="text">Print</span>
					</a>	

                    <a href="javascript:void(0);" onclick="$('#pg').val('app_reports');$('#view').val('sales_report');$('#class_call').val('sales_report');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-primary btn-icon-split" style="float: right; margin-right: 1em;">
						<span class="icon text-white-50">
							<i class="far fa-file-excel"></i>
						</span>
						<span class="text">Excel</span>
					</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div>

					<br>

					<div class="row">
						<div class="col-sm-12">
							<h4 style="text-align: center; font-weight: 800;border-bottom: 1px solid #dedede;padding-bottom: 0.5em;margin-bottom: 1em;">COMPANY'S SALES REPORT</h4>
						</div>

						<div class="col-sm-6">
							<p style="margin: 5px;">
								<b>Company Name</b> : <span> <?php echo $result['company']; ?> </span>
							</p>
							<p style="margin: 5px;">
								<b>Printed By</b> : <span> <?php echo $session->get('loginuserfulname'); ?> </span>
							</p>
							<p style="margin: 5px;">
								<b>Date Printed</b> : <span> <?php echo date("Y-m-d H:s:m" ); ?> </span>
							</p>
						</div>

						<div class="col-sm-6">
							<p style="margin: 5px;">
								<b>From</b> : <span> <?php echo $result['from']; ?> </span>
							</p>
							<p style="margin: 5px;">
								<b>To</b> : <span> <?php echo $result['to']; ?> </span>
							</p>
						</div>


					</div>

					<br>

                    <div class="row">
						<div class="col-sm-12">
							<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
								role="grid" aria-describedby="dataTable_info" style="width: 100%;">
								<thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" 				rowspan="1" colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 40px;">#</th>
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" 				rowspan="1" colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 190.6px;">Customer Name</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Position: activate to sort column ascending"
											style="width: 130px;">Invoice Number</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Office: activate to sort column ascending"
											style="width: 130px;">No. of Items</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Age: activate to sort column ascending"
											style="width: 100px;">Date</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Start date: activate to sort column ascending"
											style="width: 128.2px;">Total Amount (GHS)</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Salary: activate to sort column ascending"
											style="width: 118px;">Amount Paid (GHS)</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Salary: activate to sort column ascending"
											style="width: 150px;">Change (GHS)</th>
									</tr>
								</thead>
								<tbody>
									<?php 	
										$x = 1;							
										foreach ($result['data'] as $val){
											$data =  $engine->getDataEncrypt($val);
											// var_dump($val); die();
									?>

									<tr role="row" class="odd">
										<td class="sorting_1"><?php echo $x;?></td>
										<td><?php echo $val['SALE_CUSTOMERNAME']; ?></td>
										<td><?php echo $val['SALE_CODE']; ?></td>
										<td><?php echo $val['SALE_PRODUCTSTOTAL']; ?></td>
										<td><?php echo $val['SALE_DATEADDED']; ?></td>
										<td><?php echo $val['SALE_GRANDTOTAL']; ?></td>
										<td><?php echo $val['SALE_PAIDAMOUNT']; ?></td>
										<td><?php echo $val['SALE_CHANGE']; ?></td>
									</tr>


									<?php
												$x= $x + 1;
											}


									?>

									
								</tbody>
								<!-- <tbody>
									<tr role="row" class="odd">
										<td class="sorting_1">Airi Satou</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>162,700</td>
										<td>162,700</td>
										<td style="padding-left: 1px;"> 
											<div class="row">
												<div class="col-sm-12 col-md-8">
													<a  href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('details');$('#class_call').val('details');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-primary btn-icon-split" >
														<span class="icon text-white-50">
															<i class="fas fa-info-circle"></i>
														</span>
														<span class="text">Details</span>
													</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody> -->
							</table>
						</div>
					</div>

                    </div>
				</div>
			</div>
		</div>
	</div>

</div>