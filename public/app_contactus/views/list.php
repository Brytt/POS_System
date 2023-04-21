<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Contact Us</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Send us a message.</p>
		</div>
		<div class="col-sm-12 col-md-6">
			<!-- <a href="javascript:void(0);" onclick="$('#pg').val('app_contactus');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="float: right;">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a> -->
		</div>
	</div>

	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-6">
					<h6 class="m-0 font-weight-bold text-primary">Message</h6>
				</div>
				<div class="col-sm-6">
					<a href="javascript:void(0);" onclick="$('#pg').val('app_contactus');$('#view').val('');$('#class_call').val('add');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" style="float: right;">
						<span class="icon text-white-50">
							<i class="fas fa-paper-plane"></i>
						</span>
						<span class="text">Send</span>
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
										for="driver_fname">Subject</label></div>
								<div class="col-md-9 showcase_content_area">
									<select class="form-control" style="width: 15em;" id="feed_subject" name="feed_subject">
										<option value="Defult">Select Subject</option>
										<option value="Customer Issue">Customer Issue</option>
										<option value="Order Issue">Order Issue</option>
										<option value="System Error">System Error</option>
										<option value="Other">Other</option>
									</select>
                                </p>
								</div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="feed_message">Message</label></div>
								<div class="col-md-9 showcase_content_area">
									<textarea class="form-control" name="feed_message" id="feed_message" cols="30" rows="5"></textarea>
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