
<div class="container-fluid">
	<!-- Page Heading -->

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-6">
					<h6 class="m-0 font-weight-bold text-primary">Edit Product's details</h6>
				</div>
				<div class="col-sm-6">
				<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="margin-left: 285px;">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>
					<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('');$('#class_call').val('update');$('#keys').val('<?php echo $result['data']['PROD_CODE']; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" style="float: right;">
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
					<div class="col-sm-6">
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_name">Product Name</label></div>
								<div class="col-md-9 showcase_content_area"><input type="text"
										class="form-control" id="product_name" name="product_name" value="<?php echo $result['data']['PROD_NAME']; ?>"></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_supplier">Supplier</label></div>
								<div class="col-md-9 showcase_content_area">
									<select class="custom-select" id="product_supplier" name="product_supplier">
										<?php
											if(empty($result['data']['PROD_SUPPLIER_CODE'])){
										?>
											<option selected="selected">Select Supplier</option>
										<?php
											}else{ 
											$arr = array($result['data']['PROD_SUPPLIER_CODE'],$result['data']['PROD_SUPPLIER_NAME']);
											$arr = implode("@@",$arr);
										?>
											<option value="<?php echo $arr; ?>" selected="selected"><?php echo $result['data']['PROD_SUPPLIER_NAME']; ?></option>

										<?php
											}
										?>

										<?php
											foreach ($result['stmt_suppliers'] as $val){
												$arr = array($val['SUPL_CODE'],$val['SUPL_NAME']);
												$arr = implode("@@",$arr);
										?>
											<option value="<?php echo $arr; ?>"><?php echo $val['SUPL_NAME']; ?></option>
										<?php 
											}
										?>

									</select>
								</div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_purchaseprice">Purchase Price</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="product_purchaseprice" name="product_purchaseprice" value="<?php echo $result['data']['PROD_PURCHASEPRICE']; ?>"></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_salesprice">Sales Price</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="product_salesprice" name="product_salesprice" value="<?php echo $result['data']['PROD_SALESPRICE']; ?>"></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_description">Description</label></div>
								<div class="col-md-9 showcase_content_area">
									<textarea class="form-control" name="product_description" id="" cols="30" rows="5">
									<?php echo $result['data']['PROD_DESCRIPTION']; ?>
									</textarea>
								</div>
							</div>

						</div>

						<div class="col-sm-6">

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_speccode">Code [Barcode / Serial Number]</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="product_speccode" name="product_speccode" value="<?php echo $result['data']['PROD_SPECCODE']; ?>"></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_taxrate">Tax Rate</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="product_taxrate" name="product_taxrate" value="<?php echo $result['data']['PROD_TAXRATE']; ?>"></div>
							</div>
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_quantity">Quantity</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="product_quantity" name="product_quantity" value="<?php echo $result['data']['PROD_QUANTITY']; ?>"></div> 
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_minquantity">Min Quantity</label></div>
								<div class="col-md-9 showcase_content_area"><input type="number"
										class="form-control" id="product_minquantity" name="product_minquantity" value="<?php echo $result['data']['PROD_MINQUANTITY']; ?>"></div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_category">Category</label></div>
								<div class="col-md-9 showcase_content_area">
									<select class="custom-select" id="product_category" name="product_category">
										<?php
											if(empty($result['data']['PROD_CATEGORY_CODE'])){
										?>
											<option selected="selected">Select Supplier</option>
										<?php
											}else{ 
											$arr = array($result['data']['PROD_CATEGORY_CODE'],$result['data']['PROD_CATEGORY_NAME']);
											$arr = implode("@@",$arr);
										?>
											<option value="<?php echo $arr; ?>" selected="selected"><?php echo $result['data']['PROD_CATEGORY_NAME']; ?></option>

										<?php
											}
										?>

										<?php
											foreach ($result['stmt_categories'] as $val){
												$arr = array($val['CAT_CODE'],$val['CAT_NAME']);
												$arr = implode("@@",$arr);
										?>
											<option value="<?php echo $arr; ?>"><?php echo $val['CAT_NAME']; ?></option>
										<?php 
											}
										?>
									</select>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>