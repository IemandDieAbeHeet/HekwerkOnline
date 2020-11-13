$(document).ready(function(){
    $('.addcartbutton').click(function(){
    const numberBtnValue = document.getElementById('quantity').value;
    const clickBtnValue = $(this).attr("name");
    const ajaxurl = 'includes/addToCart.inc.php',
    data =  {'id': clickBtnValue,
            'qty': numberBtnValue};
    $.post(ajaxurl, data);
    });

    $('.clearcartbutton').click(function(){
        const ajaxurl = 'includes/clearCart.inc.php'
        $.post(ajaxurl);
        setTimeout(function () {
            window.location.replace("cart.php");
        }, 100);
        });
});