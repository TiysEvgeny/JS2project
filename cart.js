//'use strict';

function buildCart() {
    $('.cart-and-account__cart-content').empty();
    $.get('http://localhost:3000/cart', {}, function (items) {
        var $ul=$('<ul/>');
        items.forEach (function (item) {
            var $li=$('<li/>');
            var $itemName=$('<div/>', {
                class: 'itemName',
                text: item.name
            });
            var $itemQuantity=$('<div/>', {
                class: 'itemQuantity',
                text: item.quantity + ' X $' + item.price
            });
            $ul.append($li);
            $li.append($itemName);
            $li.append($itemQuantity)        
        });
    },'json');
}

(function($){
    $(function(){
        buildCart();
      $('.items__item').on('click', '.items__add-to-cart-link', function(event){
          
          event.preventDefault();
      });
    }); 
 })(jQuery);