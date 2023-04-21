<script>


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



    function addProduct() {   

if ($('#product_name').val() == "") {
    Swal.fire("Error", "Sorry, Product Name is required", "error");
    return false;
} else if ($('#product_supplier :selected').val() == "") {
    Swal.fire("Error", "Sorry, Supplier's Name is required", "error");
    return false;
} else if ($('#product_purchaseprice').val() == "") {
    Swal.fire("Error", "Sorry, product purchase price is required", "error");
    return false;
} else if ($('#product_salesprice').val() == "") {
    Swal.fire("Error", "Sorry, Product Sales price is required", "error");
    return false;
} else if ($('#product_speccode').val() == "") {
    Swal.fire("Error", "Sorry, Product SpecCode is required", "error");
    return false;
} else if ($('#product_taxrate').val() == "") {
    Swal.fire("Error", "Sorry, Product Taxrate is required", "error");
    return false;
} else if ($('#product_quantity').val() == "") {
    Swal.fire("Error", "Sorry, Product Quantity is required", "error");
    return false;
} else if ($('#product_minquantity').val() == "") {
    Swal.fire("Error", "Sorry, Product Minimun Quantity is required", "error");
    return false;
} else if ($('#product_category :selected').val() == "") {
    Swal.fire("Error", "Please select your Product Category", "error");
    return false;
}
$('#pg').val('app_suppliers');$('#view').val('add');$('#class_call').val('add');$('#keys').val('<?php echo ''; ?>');document.myform.submit();



}



// function editProduct() {   

// if ($('#product_name').val() == "") {
//     Swal.fire("Error", "Sorry, Product Name is required", "error");
//     return false;
// } else if ($('#product_supplier :selected').val() == "") {
//     Swal.fire("Error", "Sorry, Supplier's Name is required", "error");
//     return false;
// } else if ($('#product_purchaseprice').val() == "") {
//     Swal.fire("Error", "Sorry, product purchase price is required", "error");
//     return false;
// } else if ($('#product_salesprice').val() == "") {
//     Swal.fire("Error", "Sorry, Product Sales price is required", "error");
//     return false;
// } else if ($('#product_speccode').val() == "") {
//     Swal.fire("Error", "Sorry, Product SpecCode is required", "error");
//     return false;
// } else if ($('#product_taxrate').val() == "") {
//     Swal.fire("Error", "Sorry, Product Taxrate is required", "error");
//     return false;
// } else if ($('#product_quantity').val() == "") {
//     Swal.fire("Error", "Sorry, Product Quantity is required", "error");
//     return false;
// } else if ($('#product_minquantity').val() == "") {
//     Swal.fire("Error", "Sorry, Product Minimun Quantity is required", "error");
//     return false;
// } else if ($('#product_category :selected').val() == "") {
//     Swal.fire("Error", "Please select your Product Category", "error");
//     return false;
// }
// $('#pg').val('app_products');$('#view').val('');$('#class_call').val('update');$('#keys').val('<?php echo $result['data']['PROD_CODE']; ?>');document.myform.submit();



// }


function allowNumbersOnly(e) {
        let code = (e.which) ? e.which : e.keyCode;
        if (code > 31 && (code < 48 || code > 57)) {
            e.preventDefault();
        }
    }


</script>