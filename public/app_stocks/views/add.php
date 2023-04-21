<div class="container-fluid">
	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-2 text-gray-800">Add Stock</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Add new product stock </p>
		</div>
		<div class="col-sm-12 col-md-6">
			<a href="javascript:void(0);" onclick="$('#pg').val('app_stocks');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split" style="float: right;">
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
					<h6 class="m-0 font-weight-bold text-primary">ADD STOCK DETAILS</h6>
				</div>
				<div class="col-sm-12 col-md-6 " style="text-align:right;">

				<a href="javascript:void(0);" onclick="$('#pg').val('app_stocks');$('#view').val('');document.myform.submit();" class="btn btn-secondary btn-icon-split">
				<span class="icon text-white-50">
                    <i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>

					<a href="javascript:void(0);" onclick="$('#pg').val('app_stocks');$('#view').val('');$('#class_call').val('add');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" >
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
										for="fsearch">Search</label></div>
								<div class="col-md-9 showcase_content_area">
									<input type="text"
										class="form-control" id="fsearch" name="fsearch" value="" placeholder="Search by Product's name">
										<br>
									<div id="result"></div>		
									
								</div>
															
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_name">Product Name</label></div>
								<div class="col-md-9 showcase_content_area">
									<input type="text"
										class="form-control" id="product_name" name="product_name" value="">
										<input type="hidden"
										class="form-control" id="product_code" name="product_code" value="">
								</div>
															
							</div>


							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="product_quantity">Quantity <br> [: To Add]</label></div>
								<div class="col-md-9 showcase_content_area">
									<input type="text" class="form-control" id="product_quantity_toadd" name="product_quantity_toadd" value="">
									<span>Old Quantity: <b id="itemquantity_old"></b> </span> <br>
									<span>Current Quantity: <b id="itemquantity_new"></b> </span>
									<input type="hidden" class="form-control" id="product_quantity" name="product_quantity" value="">
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
			var old_quant = document.getElementById("itemquantity_old").innerHTML;

			var totalnum = parseInt(toadd, 10) + parseInt(old_quant, 10);

			document.getElementById("itemquantity_new").innerHTML = totalnum;
			document.getElementById("product_quantity").value = totalnum;
		
		});

	});
</script>

<script>
    
        function add_product(itemcode, itemname, itemquantity){
			document.getElementById("product_name").value = itemname;
			document.getElementById("product_code").value = itemcode;
			document.getElementById("itemquantity_old").innerHTML = itemquantity;
			document.getElementById("itemquantity_new").innerHTML = itemquantity;
			document.getElementById("result").innerHTML = "";
        }
    

</script>