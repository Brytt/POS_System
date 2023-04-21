
<div class="container-fluid">
	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-2 text-gray-800">Edit Stock</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Edit selected product </p>
		</div>
		<div class="col-sm-12 col-md-6">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="float: right;">
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
					<h6 class="m-0 font-weight-bold text-primary">Edit Product's details</h6>
				</div>
				<div class="col-sm-6">
				
				<a href="javascript:void(0);" onclick="$('#pg').val('app_stocks');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="margin-left: 285px;">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>
				
					<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('');$('#class_call').val('update');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" style="float: right;">
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
							
							<!-- <div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="fsearch">Search</label></div>
								<div class="col-md-9 showcase_content_area">
									<input type="text"
										class="form-control" id="fsearch" name="fsearch" value="" placeholder="Search by Product's name">
										<br>
									<div id="result"></div>		
									
								</div>
															
							</div> -->

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_name">Product Name</label></div>
								<div class="col-md-9 showcase_content_area">
									<input type="text"
										class="form-control" id="product_name" name="product_name" value="<?php echo $result['PROD_NAME'] ?>">
										<input type="hidden"
										class="form-control" id="product_code" name="product_code" value="<?php echo $result['PROD_CODE'] ?>">
								</div>
															
							</div>


							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_quantity">Quantity <br> [: To Add / Remove]</label>
								</div>
								<div class="col-md-4 showcase_content_area">
									<select class="form-control" style="width: 100%;" id="editoperation" name="editoperation" onchange="toadd_product()">
										<option value="add">Add +</option>
										<option value="remove">Remove -</option>
									</select>
									<span>Old Quantity: <b id="itemquantity_old"><?php echo $result['PROD_QUANTITY'] ?></b> </span> <br>
									<span>Current Quantity: <b id="itemquantity_new"><?php echo $result['PROD_QUANTITY'] ?></b> </span>
									<input type="hidden" class="form-control" id="product_quantity" name="product_quantity" value="<?php echo $result['PROD_QUANTITY'] ?>">
								</div>
								<div class="col-md-5 showcase_content_area">
									<input type="text" class="form-control" id="product_quantity_toadd" name="product_quantity_toadd" value="">
									
								</div>
								<div class="col-md-3 showcase_text_area">
								</div>
								<div class="col-md-9 showcase_content_area">
	
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


<script>
	$(document).ready(function(){

		load_data();

		function load_data(query)
		{
			$.ajax({
			url:"public\\app_stocks\\controllers\\search_filter.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
			});
		}

		$('#fsearch').keyup(function(){
			var search = $(this).val();
			if(search != '')
			{
				load_data(search);
			}
			else
			{
				load_data();
			}
		});
		

		$('#product_quantity_toadd').keyup(function(){
			var toadd = $(this).val();

			if(toadd == ""){
				toadd = 0;
			}

			var old_quant = document.getElementById("itemquantity_old").innerHTML;

			if(document.getElementById("editoperation").value == "add"){
				var totalnum = parseInt(toadd, 10) + parseInt(old_quant, 10);
			}else if(document.getElementById("editoperation").value == "remove"){
				var totalnum = parseInt(toadd, 10) - parseInt(old_quant, 10);
			}
			

			document.getElementById("itemquantity_new").innerHTML = Math.abs(totalnum);
			document.getElementById("product_quantity").value =  Math.abs(totalnum);
		
		});

	});
</script>

<script>

		function toadd_product(){
			var toadd =  document.getElementById("product_quantity_toadd").value;

			if(toadd == ""){
				toadd = 0;
			}

			var old_quant = document.getElementById("itemquantity_old").innerHTML;

			if(document.getElementById("editoperation").value == "add"){
				var totalnum = parseInt(toadd, 10) + parseInt(old_quant, 10);
			}else if(document.getElementById("editoperation").value == "remove"){
				var totalnum = parseInt(toadd, 10) - parseInt(old_quant, 10);
			}
			

			document.getElementById("itemquantity_new").innerHTML =  Math.abs(totalnum);
			document.getElementById("product_quantity").value =  Math.abs(totalnum);
		}


        function add_product(itemcode, itemname, itemquantity){
			document.getElementById("product_name").value = itemname;
			document.getElementById("product_code").value = itemcode;
			document.getElementById("itemquantity_old").innerHTML = itemquantity;
			document.getElementById("itemquantity_new").innerHTML = itemquantity;
			document.getElementById("result").innerHTML = "";
        }
    

</script>