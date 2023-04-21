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
					<h6 class="m-0 font-weight-bold text-primary">Enter Product's details</h6>
				</div>
				<div class="col-sm-12 col-md-6 " style="text-align:right;">
				<a href="javascript:void(0);" onclick="$('#pg').val('app_suppliers');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" >
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>

					<a href="javascript:void(0);" onclick="addProduct()" class="btn btn-success btn-icon-split">
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
				<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_name">Product Name<span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_name" id="product_name" class="form-control">
                    </div>

					
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_supplier">Supplier <span class="text-red">*</span></label>
                        <select class="custom-select" name="product_supplier" id="product_supplier">
						<option selected="selected">Select Supplier</option>
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
                        <label for="product_purchaseprice">Purchase Price<span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_purchaseprice" id="product_purchaseprice" class="form-control">
                    </div>


	
					<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_salesprice">Sales Price<span class="text-red">*</span></label>
                        <input type="text" placeholder="" name="product_salesprice" id="product_salesprice" class="form-control">
                    </div>

					
					
						
					<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_speccode">Code [Barcode / Serial Number]<span class="text-red">*</span></label>
                        <input type="number" placeholder="" name="product_speccode" id="product_speccode" class="form-control">
                    </div>	

				
	
					<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_taxrate">Tax Rate<span class="text-red">*</span></label>
                        <input type="number" placeholder="" name="product_taxrate" id="product_taxrate" class="form-control">
                    </div>	


						
					<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_quantity">Quantity<span class="text-red">*</span></label>
                        <input type="number" placeholder="" name="product_quantity" id="product_quantity" class="form-control">
                    </div>	


							
								
					<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_minquantity">Min Quantity<span class="text-red">*</span></label>
                        <input type="text" placeholder=""  onkeypress="allowNumbersOnly(event)"name="product_minquantity" id="product_minquantity" class="form-control">
                    </div>	

							
					<div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label for="product_category">Category <span class="text-red">*</span></label>
                        <select class="custom-select" name="product_category" id="product_category">
						<option selected="selected">Select Category</option>
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
                        <textarea type="text" placeholder="" name="product_description" id="product_description" class="form-control"></textarea>
                    </div>


							

						</div>
					</div>
			
	</div>

</div>