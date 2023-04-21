<script>
    
    var selected_products = [];

    function toggle_div() {
        var old_cust = document.getElementById("old_cust");
        var new_cust = document.getElementById("new_cust");									

        if (old_cust.style.display === "block" && new_cust.style.display === "none") {
            old_cust.style.display = "none";
            new_cust.style.display = "block";
            document.getElementById('customer_btn').innerHTML = "Old Customer";
            document.getElementById('customer_type').value = "newcustomer";
        } else if(old_cust.style.display === "none" && new_cust.style.display === "block") {
            old_cust.style.display = "block";
            new_cust.style.display = "none";
            document.getElementById('customer_btn').innerHTML = "New Customer";
            document.getElementById('customer_type').value = "oldcustomer";
        }
        
    }


    
    function delete_func(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                document.myform.submit();
            }
        })
    }


    
    function addproductlist(){
        
        var obj = {
            productcode: "2333",
            productname: document.getElementById("productname").value,
            productprice: document.getElementById("productprice").value,
            productquantity: document.getElementById("productquantity").value,
            productdiscount: document.getElementById("productdiscount").value,
            productamttotal: document.getElementById("productamttotal").value,
        } 

        selected_products.push(obj);

        console.log(selected_products);

        document.getElementById("productcode").value = "";
        document.getElementById("productname").value = "";
        document.getElementById("productprice").value = "";
        document.getElementById("productquantity").value = "";
        document.getElementById("productdiscount").value = "";
        document.getElementById("productamttotal").value = "";
        

        $("#pdlist").empty();

        var i = 1;

        $.each(selected_products, function(index, value){
            
            $("#pdlist").append('<tr role="row" class="odd"><td class="sorting_1">'+ i +'</td><td>'+ value.productname +'</td><td>'+ value.productprice +'</td><td>'+ value.productquantity +'</td><td>'+ value.productdiscount +'</td><td>'+ value.productamttotal +'</td><td><div class="row"><div class="col-sm-12 col-md-12"><a href="javascript:void(0);" onclick="remove_item(\''+  value.productcode +'\');" class="btn btn-danger btn-icon-split"><span class="icon text-white-50"><i class="far fa-trash-alt"></i></span><span class="text">Delete</span></a></div></div></td></tr>');

            totalamount = totalamount + (2.32 * parseFloat(value.serv_quantity));
            totalamount = parseFloat(totalamount).toFixed(2);
            document.getElementById("totalamount").value = totalamount;
            document.getElementById("total_id").innerHTML = totalamount;
            
            i = i + 1;

        });

        document.getElementById("productsselected").value = JSON.stringify(selected_products);

        totalitems = totalitems + 1;
        document.getElementById("totalitems").value = totalitems;


    }


    function remove_item(item){

        console.log(item);
        const indiceABorrar = selected_products.findIndex(q => q.productcode === item);
        console.log(indiceABorrar);

        if (-1 != indiceABorrar) {
            selected_products.splice(indiceABorrar, 1);
            totalitems = totalitems - 1;
            document.getElementById("totalitems").value = totalitems;
            
            $("#pdlist").empty();

            var i = 1;

            $.each(selected_products, function(index, value){
                
                $("#pdlist").append('<tr role="row" class="odd"><td class="sorting_1">'+ i +'</td><td>'+ value.productname +'</td><td>'+ value.productprice +'</td><td>'+ value.productquantity +'</td><td>'+ value.productdiscount +'</td><td>'+ value.productamttotal +'</td><td><div class="row"><div class="col-sm-12 col-md-12"><a href="javascript:void(0);" onclick="remove_item(\''+  value.productcode +'\');" class="btn btn-danger btn-icon-split"><span class="icon text-white-50"><i class="far fa-trash-alt"></i></span><span class="text">Delete</span></a></div></div></td></tr>');

                totalamount = totalamount + (2.32 * parseFloat(value.serv_quantity));
                totalamount = parseFloat(totalamount).toFixed(2);
                document.getElementById("totalamount").value = totalamount;
                document.getElementById("total_id").innerHTML = totalamount;
                
                i = i + 1;

            });

            document.getElementById("productsselected").value = JSON.stringify(selected_products);

            totalitems = totalitems + 1;
            document.getElementById("totalitems").value = totalitems;
            
        }

    }



</script>