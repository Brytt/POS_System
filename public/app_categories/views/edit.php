<div class="container-fluid">
	<!-- Page Heading -->
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-6">
					<h6 class="m-0 font-weight-bold text-primary">Edit Category's details</h6>
				</div>
				<div class="col-sm-6">
				<a href="javascript:void(0);" onclick="$('#pg').val('app_categories');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="margin-left: 285px;">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>
					<a href="javascript:void(0);" onclick="$('#pg').val('app_categories');$('#view').val('');$('#class_call').val('update');$('#keys').val('<?php echo $result['CAT_CODE']; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" style="float: right;">
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
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="category_name">Category Name</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="category_name" name="category_name" value="<?php echo $result['CAT_NAME']; ?>"></div>
							</div>
							

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="category_description">Description</label></div>
								<div class="col-md-9 showcase_content_area">
									<textarea class="form-control" name="category_description" id="category_description" cols="30" rows="5">
										<?php echo $result['CAT_DESCRIPTION']; ?>
									</textarea>
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