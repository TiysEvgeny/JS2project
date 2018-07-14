'use strict';

function buildCart() {
    $('.cart-and-account__cart-content').empty();
    $('.cart-and-account__cart-content').append($('<div/>', {
        class: 'arrow-up'
    }));
    $.get('http://localhost:3000/cart', {}, function (items) {
        var $ul = $('<ul/>');
        var totalPrice = 0;
        items.forEach(function (item) {
            var $li = $('<li/>');
            var $itemName = $('<div/>', {
                class: 'cart-and-account__itemName',
                itemId: item.id,
                quantity: item.quantity,
                text: item.name
            });
            var $itemQuantity = $('<div/>', {
                class: 'cart-and-account__itemQuantity',
                text: item.quantity + ' X $' + item.price
            });
            totalPrice += item.quantity * item.price
            $ul.append($li);
            $li.append($itemName);
            $li.append($itemQuantity);
        });
        var $total = $('<div/>', {
            class: 'total',
        });
        var $totalLabel = $('<div/>', {
            text: 'TOTAL'
        });
        var $totalPrice = $('<div/>', {
            text: '$' + totalPrice
        });
        $('.cart-and-account__cart-content').append($ul);
        $total.append($totalLabel);
        $total.append($totalPrice);
        $('.cart-and-account__cart-content').append($total);

    }, 'json');
}

(function ($) {
    $(function () {
        buildCart();
        $('.items__item').on('click', '.items__add-to-cart-link', function (event) {
            var $goodId = $(this).parent().attr('itemId');
            var $goodName = $(this).parent().attr('name');
            var $goodPrice = $(this).parent().attr('price');
            var $cartItem = $('.cart-and-account__itemName[itemId="' + $goodId + '"]')
            var quantity = $.get('http://localhost:3000/goods/' + $goodId, {}, function (item) {
                return item.quantity;
            }, 'json');
            if (quantity < +$cartItem.attr('quantity') + 1) {
                alert("На складе недостаточно товара!");
                return;
            } else {
                if ($cartItem.length) {
                    var good = {
                        id: $goodId,
                        name: $goodName,
                        price: $goodPrice,
                        quantity: +$cartItem.attr('quantity') + 1
                    };
                    $.ajax({
                        url: 'http://localhost:3000/cart/' + $goodId,
                        type: 'PUT',
                        data: good,
                        success: function () {
                            buildCart();
                            return {
                                result: 1
                            };
                        }
                    });
                } else{

                }
            }
            event.preventDefault();
        });
    });
})(jQuery);