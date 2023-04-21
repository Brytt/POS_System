
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
					<a href="javascript:void(0);" onclick="editProduct()" class="btn btn-success btn-icon-split" style="float: right;">
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
					<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_name">Product Name <span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_name" id="product_name" class="form-control"
						value="<?php echo $result['data']['PROD_NAME']; ?>"></div>


						<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_supplier">Supplier <span class="text-red">*</span></label>
                        <select class="custom-select" name="product_supplier" id="product_supplier">
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

					<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_purchaseprice">Purchase Price <span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_purchaseprice" id="product_purchaseprice" class="form-control"
						value="<?php echo $result['data']['PROD_PURCHASEPRICE']; ?>"></div>


						<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_salesprice">Sales Price <span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_salesprice" id="product_salesprice" class="form-control"
						value="<?php echo $result['data']['PROD_SALESPRICE']; ?>"></div>


						<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_speccode">Code [Barcode / Serial Number]<span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_speccode" id="product_speccode" class="form-control"
						value="<?php echo $result['data']['PROD_SPECCODE']; ?>"></div>

						
						<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_taxrate">Tax Rate<span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_taxrate" id="product_taxrate" class="form-control"
						value="<?php echo $result['data']['PROD_TAXRATE']; ?>"></div>

						<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_quantity">Quantity<span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_quantity" id="product_quantity" class="form-control"
						value="<?php echo $result['data']['PROD_QUANTITY']; ?>"></div>

				
						<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_minquantity">Min Quantity<span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_minquantity" id="product_minquantity" class="form-control"
						value="<?php echo $result['data']['PROD_MINQUANTITY']; ?>"></div>



							<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_category">Category <span class="text-red">*</span></label>
                        <select class="custom-select" name="product_category" id="product_category">
						<?php
											if(empty($result['data']['PROD_CATEGORY_CODE'])){
										?>
											<option selected="selected">Select Category</option>
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

				

						<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_description">Description<span class="text-red">*</span></label>
								<div class="showcase_content_area">
									<textarea class="form-control" name="product_description" id="product_description" >
									<?php echo $result['data']['PROD_DESCRIPTION']; ?>
									</textarea>
								</div>
							</div>
					
	</div>

</div>