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
                itemName: item.name,
                quantity: item.quantity,
                itemPrice: item.price,
                text: item.name
            });
            var $itemQuantity = $('<div/>', {
                class: 'cart-and-account__itemQuantity',
                text: item.quantity + ' X $' + item.price
            });
            var $icon = $('<div/>', {
                class: 'cart-and-account__itemIcon'
            });
            var $container = $('<div/>', {
                class: 'cart-and-account__itemContainer',
            });
            var $remove = $('<span/>', {
                class: 'cart-and-account__removeItem'
            });
            var $x = $('<i/>', {
                class: 'fas fa-times-circle'
            });

            totalPrice += item.quantity * item.price
            $ul.append($li);
            $li.append($icon);
            $li.append($container);
            $li.append($remove);
            $remove.append($x);
            $container.append($itemName);
            $container.append($itemQuantity);
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
            $.get('http://localhost:3000/goods/' + $goodId,
            {},
            function (item) {
                if (item.quantity < +$cartItem.attr('quantity') + 1) {
                    alert("На складе недостаточно товара!");
                    return;
                } else {
                    var good = {
                        id: $goodId,
                        name: $goodName,
                        price: $goodPrice,
                        quantity: 1
                    };
                    if ($cartItem.length) {
                        good.quantity = +$cartItem.attr('quantity') + 1
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
                    } else {
                        $.post('http://localhost:3000/cart/',
                        good,
                        function (result) {
                            buildCart();
                        }, 'json');
                    }
                }
            }, 'json');
            event.preventDefault();
        });
        $('.cart-and-account__cart-content').on('click', '.cart-and-account__removeItem',function(event){
            console.log('Клик');
            event.preventDefault();
            var $item = $(this).parent().children('.cart-and-account__itemContainer').children('.cart-and-account__itemName');
            var $itemId = $item.attr('itemId');
            var $itemName = $item.attr('itemName');
            console.log($itemName);
            var $itemPrice = $item.attr('itemPrice');
            var $quantity = $item.attr('quantity');
            var $itemData = {
                id: $itemId,
                name: $itemName,
                price: $itemPrice,
                quantity: +$quantity-1
            };
            if($quantity<2){
                $.ajax({
                    url:'http://localhost:3000/cart/' + $itemId,
                    type: 'DELETE',
                    success: function() {
                        $item.parent().parent().remove();
                        var $totalPriceElement=$('.total').children('div:eq(1)')
                        var $totalPrice=$totalPriceElement.text().match(/\d+/)[0];
                        var $newPrice=$totalPrice-$itemPrice;
                        $totalPriceElement.remove();
                        $('.total').append($('<div/>', {text: '$'+ $newPrice}));                
                    }
                });
            }else{
                $.ajax({
                    url: 'http://localhost:3000/cart/' + $itemId,
                    type: 'PUT',
                    data: $itemData,
                    success: function() {
                        buildCart();
                    }
                });
            }
        });
    });
})(jQuery);