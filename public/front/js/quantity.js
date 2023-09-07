function increment(product_id) {
    $(document).find('.quantity').each(function (index, item) {
        var $item = $(item);
        var itemID = $item.data('id');
        var value = $item.val();

        if (itemID == product_id) {
            if (value < 10) {
                value++;
                $item.val(value);
                console.log(value);

                var $productTotal = $('input.product_total[data-id="' + product_id + '"]');
                console.log($productTotal);

                var amt = $productTotal.val() * value;
                console.log(amt);

                $productTotal.val(amt);
                $('p.product_total[data-id="' + product_id + '"]').text(amt);
            }
        }
    })
    getGrandTotal();
}

    function decrement(product_id) {
        $(document).find('.quantity').each(function (index, item) {
            var $item = $(item);
            var itemID = $item.data('id');
            var value = $item.val();

            if (itemID == product_id) {
                if (value > 1) {
                    var $productTotal = $('input.product_total[data-id="' + product_id + '"]');
                    var amt = $productTotal.val() / value;
                    value--;
                    $item.val(value);
                    $productTotal.val(amt);
                    $('p.product_total[data-id="' + product_id + '"]').text(amt);
                }
            }

        })
        getGrandTotal();
    }

    function getGrandTotal() {
        let total = 0.00;
        $('input[type=hidden].product_total').each(function (index, item) {
            total += parseFloat($(this).val());
            $('.totalp').text(total);
            $('#total').val(total);
        })
    }
