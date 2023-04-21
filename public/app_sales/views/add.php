
<input type="hidden" id="customer_type" name="customer_type" value="oldcustomer"> 
<input type="hidden" id="totalamount" name="totalamount"> 
<input type="hidden" id="productsselected" name="productsselected"> 
<input type="hidden" id="totalproducts" name="totalproducts">
<input type="hidden" id="totaldiscount" name="totaldiscount">
<input type="hidden" id="change" name="change">
<input type="hidden" id="totalitems" name="totalitems">


<div class="container-fluid">
	

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6 class="m-0 font-weight-bold text-primary" style ="font-size:larger;" >ADD SALES</h6>
				</div>
				<div class="col-sm-12 col-md-6 " style="text-align:right;" >
			<a href="javascript:void(0);"
				onclick="$('#pg').val('app_products');$('#view').val('');document.myform.submit();"
				class="btn btn-secondary btn-icon-split m-2" >
				<span class="icon text-white-50">
					<i class="fas fa-long-arrow-alt-left"></i>
				</span>
				<span class="text">Back</span>
			</a>
		
					<a href="javascript:void(0);"
						onclick="$('#pg').val('app_products');$('#view').val('add');$('#class_call').val('add');$('#keys').val('<?php echo ''; ?>');document.myform.submit();"
						class="btn btn-success btn-icon-split m-2">
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
						<div class="col-sm-6">

							<div id="old_cust" style="display: block;">

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label for="custsearch">Search</label>
									</div>
									<div class="col-md-9 showcase_content_area">
										<input type="text" placeholder="Search Customer" class="form-control" id="custsearch" name="custsearch" value="">
										<div id="result"></div>	
									</div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area">
										<label for="customer_name">Customer Name</label>
									</div>
									<div class="col-md-9 showcase_content_area">
										<input type="text" class="form-control" id="customer_name" name="customer_name" value="">
										<input type="hidden" class="form-control" id="customer_code" name="customer_code" value="">
									</div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label for="custsearch">Customer Phone</label>
									</div>
									<div class="col-md-9 showcase_content_area">
										<input type="text" class="form-control" id="customer_phone" name="customer_phone" value="">
									</div>
								</div>


							</div>


							<div id="new_cust" style="display: none;">

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label for="custname">Customer
											Name</label></div>
									<div class="col-md-9 showcase_content_area"><input type="text"
											placeholder="" class="form-control" id="custname"
											name="custname" value=""></div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label for="custphone">Mobile
											Number</label></div>
									<div class="col-md-9 showcase_content_area"><input type="text" class="form-control"
											id="custphone" name="custphone" value=""></div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label for="custaddress">Address</label>
									</div>
									<div class="col-md-9 showcase_content_area"><input type="text" class="form-control"
											id="custaddress" name="custaddress" value=""></div>
								</div>

								<div class="form-group row showcase_row_area">
									<div class="col-md-3 showcase_text_area"><label for="custinfo">More
											Information</label></div>
									<div class="col-md-9 showcase_content_area">
										<textarea class="form-control" name="custinfo" id="custinfo" cols="30" rows="2"></textarea>
									</div>
								</div>

							</div>

							<br>
							<br>


						</div>

						<div class="col-sm-3">

							<div class="form-group row showcase_row_area">
								<a href="javascript:void(0);" onclick="toggle_div()"
									class="btn btn-primary btn-icon-split" style="float: right;">
									<span class="icon text-white-50">
										<i class="fas fa-plus"></i>
									</span>
									<span class="text" id="customer_btn">New Customer</span>
								</a>
							</div>

						</div>

						<div class="col-sm-3">

							<h5 style="color: green;font-size: 2em;font-weight: 800;">GHS <span id="bigtotal" >0.00</span></h5>

						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<b>&nbsp;&nbsp; Add Products</b>
						</div>
						<div class="col-sm-6">
							<b style="float: right;"><span id="totalproducts_txt"> 0 </span> Items on List</b>
						</div>
						
						<div class="col-sm-12">
							<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
								role="grid" aria-describedby="dataTable_info" style="width: 100%;">
								<thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending" style="width: 15px;">#
										</th>
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 190.6px;">Product Name</th>
										<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-sort="ascending"
											aria-label="Name: activate to sort column descending"
											style="width: 190.6px;">Price (GHS)</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Position: activate to sort column ascending"
											style="width: 130px;">Available Quantity</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Office: activate to sort column ascending"
											style="width: 130px;">Quantity</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Salary: activate to sort column ascending"
											style="width: 90px;">Total</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
											colspan="1" aria-label="Salary: activate to sort column ascending"
											style="width: 120px;">Actions</th>
									</tr>
								</thead>
								<tbody  id="tdproducts">
									<!-- <tr role="row" class="odd">
										<td class="sorting_1">1</td>
										<td>Accountant</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>0.00</td>
										<td>0.00</td>
										<td>
											<div class="row">
												<div class="col-sm-12 col-md-12">
													<a href="javascript:void(0);"
														onclick="$('#pg').val('app_products');$('#view').val('details');$('#class_call').val('details');$('#keys').val('<?php //echo ''; ?>');document.myform.submit();"
														class="btn btn-danger btn-icon-split">
														<span class="icon text-white-50">
															<i class="far fa-trash-alt"></i>
														</span>
														<span class="text">Remove</span>
													</a>
												</div>
											</div>
										</td>
									</tr> -->
								</tbody>
								<tbody id="pdlist">
									<tr role="row" class="odd">
										<td class="sorting_1"></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Total Discount &nbsp;:</td>
										<td>0.00</td>
										<td>
											<div class="row">
												<div class="col-sm-12 col-md-12">

													<!-- Button trigger modal -->
													<button type="button" class="btn btn-primary  btn-icon-split"
														data-toggle="modal" data-target="#exampleModal">
														<span class="icon text-white-50">
															<i class="fas fa-plus"></i>
														</span>
														<span class="text">Product</span>
													</button>

													<!-- Modal -->
													<div class="modal fade" id="exampleModal" tabindex="-1"
														role="dialog" aria-labelledby="exampleModalLabel"
														aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Add
																		Product</h5>
																	<button type="button" class="close"
																		data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">

																	<div class="form-group row showcase_row_area">
																		<div class="col-md-3 showcase_text_area">
																			<label for="productsearch">Search</label>
																		</div>
																		<div class="col-md-9 showcase_content_area">
																			<input type="text" placeholder="Search Product"
																				class="form-control" id="productsearch"
																				name="productsearch" value="">

																			<div id="productsresult"></div>
																		</div>
																	</div>

																	<div class="form-group row showcase_row_area">
																		<div class="col-md-3 showcase_text_area">
																			<label for="productname">Product</label>
																		</div>
																		<div class="col-md-9 showcase_content_area">
																			<input type="text" class="form-control" id="productname"
																				name="productname" value="" readonly>
																				<input type="hidden" class="form-control" id="productcode"
																				name="productcode" value="" >
																		</div>
																	</div>

																	<div class="form-group row showcase_row_area">
																		<div class="col-md-3 showcase_text_area">
																			<label for="productprice">Price (GHS)</label>
																		</div>
																		<div class="col-md-9 showcase_content_area">
																			<input type="text"
																				class="form-control" id="productprice"
																				name="productprice" value="" readonly>
																		</div>
																	</div>

																	<div class="form-group row showcase_row_area">
																		<div class="col-md-3 showcase_text_area">
																			<label for="productquantity">Quantity</label>
																		</div>
																		<div class="col-md-9 showcase_content_area">
																			<input type="number" class="form-control" id="productquantity" name="productquantity" value="">

																			<input type="hidden" class="form-control" id="org_quant" name="org_quant" value="">
																			
																			<span style="color: #698fff;font-size: 0.8em;">Quantity Available : <b id="setquant"></b></span>
																		</div>
																	</div>

																	<!-- <div class="form-group row showcase_row_area">
																		<div class="col-md-3 showcase_text_area"><label
																				for="productdiscount">Discount</label>
																		</div>
																		<div class="col-md-9 showcase_content_area">
																			<input type="number" class="form-control"
																				id="productdiscount" name="productdiscount"
																				value=""></div>
																	</div> -->

																	<div class="form-group row showcase_row_area">
																		<div class="col-md-3 showcase_text_area"><label
																				for="productamttotal">Total Amount</label>
																		</div>
																		<div class="col-md-9 showcase_content_area">
																			<input type="number" class="form-control"
																				id="productamttotal" name="productamttotal"
																				value="" readonly></div>
																	</div>


																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary"
																		data-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-primary"
																		onclick="addproductlist()">Add to List</button>
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>

										</td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1"></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Grand Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
										<td><span id="totalamount_txt">0.00</span></td>
										<td></td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1"></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Paid Amount &nbsp;&nbsp;&nbsp;:</td>
										<td><input type="number" class="form-control" id="amountpaid" name="amountpaid" value=""></td>
										<td></td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1"></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Change &nbsp;&nbsp;&nbsp;:</td>
										<td><span id="changetxt">0.00</span></td>
										<td></td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1"></td>
										<td></td>
										<td></td>
										<td></td>
										<td><b>Total Due  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>:</td>
										<td><b id="total_due_txt">0.00</b></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>




<script>
	var selected_items = [];

	$(document).ready(function(){

		load_data();

		function load_data(query)
		{
			$.ajax({
			url:"public\\app_sales\\controllers\\search_filter.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
			});
		}

		$('#custsearch').keyup(function(){
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
		

		$('#customer_search').keyup(function(){
			var toadd = $(this).val();
			var old_quant = document.getElementById("itemquantity_old").innerHTML;
			var totalnum = parseInt(toadd, 10) + parseInt(old_quant, 10);
			document.getElementById("itemquantity_new").innerHTML = totalnum;
			document.getElementById("product_quantity").value = totalnum;		
		});

	});
</script>

<script>
    
        function add_customer(customer_code, customer_name, customer_phone){
			document.getElementById("customer_code").value = customer_code;
			document.getElementById("customer_name").value = customer_name;
			document.getElementById("customer_phone").value = customer_phone;
			document.getElementById("result").innerHTML = "";
        }

</script>



<!-- /////////////// PRODUCTS SEARCH ////////////////// -->

<script>


	$(document).ready(function(){

		load_data();

		

		function load_data(query)
		{
			$.ajax({
			url:"public\\app_sales\\controllers\\search_product_filter.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#productsresult').html(data);
			}
			});
		}

		$('#productsearch').keyup(function(){
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
		

		$('#productquantity').keyup(function(){
			var toadd = $(this).val();

			if(toadd != ""){
				var old_quant = document.getElementById("productprice").value;
				var totalnum = parseInt(toadd, 10) * parseInt(old_quant, 10);
				document.getElementById("productamttotal").value = totalnum;		

				var old_setquant = document.getElementById("org_quant").value;	
				var new_setquant = parseInt(old_setquant, 10) - parseInt(toadd, 10);
				document.getElementById("setquant").innerHTML = new_setquant;	
			}else{
				document.getElementById("setquant").innerHTML = document.getElementById("org_quant").value;
			}
			
		});

		$('#amountpaid').keyup(function(){
			var toadd = $(this).val();

			console.log("amount paid went up");
			var total_amount = document.getElementById("totalamount").value;

			if(toadd != ""){
				if(parseFloat(toadd) > parseFloat(total_amount)){	
					var change = parseFloat(toadd) - parseFloat(total_amount);
					document.getElementById("change").value= change;
					document.getElementById("changetxt").innerHTML = change;
				}else{
					document.getElementById("change").value = 0.00;	
					document.getElementById("changetxt").innerHTML = 0.00;	
				}
			}else{
				document.getElementById("change").value = 0.00;	
				document.getElementById("changetxt").innerHTML = 0.00;	
			}
			
			
		});

	});
</script>

<script>
    
        function add_productdetails(product_code, product_name, product_price, product_quantity){
			document.getElementById("productcode").value = product_code;
			document.getElementById("productname").value = product_name;
			document.getElementById("productprice").value = product_price;
			document.getElementById("productamttotal").value = product_price;
			document.getElementById("productquantity").value = "1";
			document.getElementById("org_quant").value = product_quantity;
			document.getElementById("productsresult").innerHTML = "";

			var org_quant = document.getElementById("org_quant").value;			
			var pquant = document.getElementById("productquantity").value;
			var new_setquant = parseInt(product_quantity, 10) - parseInt(pquant, 10);
			document.getElementById("setquant").innerHTML = new_setquant;
        }

</script>



<!-- ///////////////////////	ADD PRODUCT TO LIST		/////////////////////////////////// -->


<script>



function addproductlist(){

	var obj = {
		productcode: document.getElementById("productcode").value,
		productname: document.getElementById("productname").value,
		productprice: document.getElementById("productprice").value,
		productavailable: document.getElementById("setquant").innerHTML,
		productquantity: document.getElementById("productquantity").value,
		productamttotal: document.getElementById("productamttotal").value
	} 

	selected_items.push(obj);

	console.log(selected_items);

	document.getElementById("productcode").value = "";
	document.getElementById("productname").value = "";
	document.getElementById("productprice").value = "";
	document.getElementById("setquant").innerHTML = "";
	document.getElementById("productquantity").value = "";
	document.getElementById("productamttotal").value = "";

	$("#tdproducts").empty();

	var x = 1;
	var totalamount = 0;
	$.each(selected_items, function(index, value){
		console.log(value.prod_name);
		
		$("#tdproducts").append('<tr role="row" class="odd"><td class="sorting_1">'+ x +'</td><td>'+ value.productname +'</td><td>'+ value.productprice +'</td><td>'+ value.productavailable +'</td><td>'+ value.productquantity +'</td><td>'+ value.productamttotal +'</td><td><div class="row"><div class="col-sm-12 col-md-12"><a href="javascript:void(0);" onclick="remove_item(\''+  value.productcode +'\');" class="btn btn-danger btn-icon-split"><span class="icon text-white-50"><i class="far fa-trash-alt"></i></span><span class="text">Remove</span></a></div></div></td></tr>');

		x = x + 1;
		y = x - 1;
	
		totalamount = parseFloat(totalamount) + parseFloat(value.productamttotal);
		totalamount = parseFloat(totalamount).toFixed(2);

		document.getElementById("totalamount").value = totalamount;
		document.getElementById("bigtotal").innerHTML = totalamount;
		document.getElementById("total_due_txt").innerHTML = totalamount;		
		document.getElementById("totalamount_txt").innerHTML = totalamount;		

		document.getElementById("totalproducts").value = y;
		document.getElementById("totalproducts_txt").innerHTML = y;		

	});

	document.getElementById("productsselected").value = JSON.stringify(selected_items);

	if (selected_items.length < 1){
		emptyfields();
	}

	var modal = document.getElementById("exampleModal");
	modal.style.display = "none";

	$('#exampleModal').modal('hide');

}


function remove_item(item){

	console.log(item);
	const indiceABorrar = selected_items.findIndex(q => q.productcode === item);
	console.log(indiceABorrar);

	if (-1 != indiceABorrar) {
		selected_items.splice(indiceABorrar, 1);
		totalitems = totalitems - 1;
		document.getElementById("totalitems").value = totalitems;
		
		$("#tdproducts").empty();


		var x = 1;
		var totalamount = 0;

		$.each(selected_items, function(index, value){

			$("#tdproducts").append('<tr role="row" class="odd"><td class="sorting_1">'+ x +'</td><td>'+ value.productname +'</td><td>'+ value.productprice +'</td><td>'+ value.productavailable +'</td><td>'+ value.productquantity +'</td><td>'+ value.productamttotal +'</td><td><div class="row"><div class="col-sm-12 col-md-12"><a href="javascript:void(0);" onclick="remove_item(\''+  value.productcode +'\');" class="btn btn-danger btn-icon-split"><span class="icon text-white-50"><i class="far fa-trash-alt"></i></span><span class="text">Remove</span></a></div></div></td></tr>');

			x = x + 1;
			y = x - 1;

			totalamount = parseFloat(totalamount) + parseFloat(value.productamttotal);
			totalamount = parseFloat(totalamount).toFixed(2);

			document.getElementById("totalamount").value = totalamount;
			document.getElementById("bigtotal").innerHTML = totalamount;
			document.getElementById("total_due_txt").innerHTML = totalamount;		
			document.getElementById("totalamount_txt").innerHTML = totalamount;		

			document.getElementById("totalproducts").value = y;
			document.getElementById("totalproducts_txt").innerHTML = y;		

		});

		if(selected_items.length < 1) {
			emptyfields();
		}
		
		
		document.getElementById("productsselected").value = JSON.stringify(selected_items);

		
	}

}



function emptyfields(){

	document.getElementById("totalamount").value = 0.00;
	document.getElementById("total_due_txt").innerHTML = 0.00;		
	document.getElementById("totalamount_txt").innerHTML = 0.00		
	document.getElementById("totalproducts").value = 0;
	document.getElementById("bigtotal").innerHTML = 0.00;
	document.getElementById("totalproducts_txt").innerHTML = 0;
	document.getElementById("totalitems").value = "";
	
}


	


</script>