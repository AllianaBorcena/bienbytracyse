<script>
function showLoader() {
    $('.overlay-container').removeClass('d-none');
    $('.overlay').addClass('active');
}

function hideLoader() {
    $('.overlay').removeClass('active');
    $('.overlay-container').addClass('d-none');
}

function loadProductModal(productId){
    $.ajax({
        method: 'GET',
        url: '{{ route("load-product-modal", ":productId") }}'.replace(':productId', productId),
        beforeSend: function(){
            $('.overlay-container').removeClass('d-none');
            $('.overlay').addClass('active');
        },
        success: function(response){
            $(".load_product_modal_body").html(response);
            $('#cartModal').modal('show');
        },
        error: function(xhr, status, error){
            console.error(error);
        },
        complete: function(){
            $('.overlay').removeClass('active');
            $('.overlay-container').addClass('d-none');
        }
    })
}

function updateSidebarCart(callback = null){
    $.ajax({
        method: 'GET',
        url: '{{ route("get-cart-products") }}',
        success: function(response){
            $('.cart_contents').html(response);
            let cartTotal = $('#cart_total').val();
            let cartCount = $('#cart_product_count').val();
            $('.cart_subtotal').html(cartTotal);
            $('.cart_count').text(cartCount);

            if(callback && typeof callback === 'function'){
                callback();
            }
        },
        error: function(xhr, status, error){
            console.error(error);
        }
    })
}

function removeProductFromSidebar($rowId){
    $.ajax({
        method: 'GET',
        url: '{{ route("cart-product-remove", ":rowId") }}'.replace(":rowId", $rowId),
        beforeSend: function(){
            $('.overlay-container').removeClass('d-none');
            $('.overlay').addClass('active');
        },
        success: function(responce){
            if(responce.status === 'success'){
                updateSidebarCart(function() {
                    toastr.success(responce.message);
                    $('.overlay').removeClass('active');
                    $('.overlay-container').addClass('d-none');
                })
            }
        },
        error: function(xhr, status, error){
            let errorMessage = xhr.responseJSON.message;
            toastr.error(errorMessage);
        }
    })
}


</script>
