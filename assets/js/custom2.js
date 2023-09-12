$(document).ready(function () {
    // increment function

    $('.increment-btn').click(function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();

        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        // this condir
        if(value < 10){
            value++;
            $(this).closest('.product_data').find('.input-qty').val(value);
        }

    });

    // decrement function
    $('.decrement-btn').click(function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 0){
            value++;
            $(this).closest('.product_data').find('.input-qty').val(value);
        }

    });

});
