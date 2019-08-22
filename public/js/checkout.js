var stripe = Stripe('pk_test_1y2UD3Iqe7IoLP7yXqXHXe2J');

var $form = $('#checkout-form');

$form.submit(function(event) {
$('charge-error').addClass('hidden');
$form.find('button').prop('disabled', true);  
Stripe.card.createToken({
    number: $('#card-number').val(),
    cvc: $('#card-cvc').val(),
    cvc: $('#card-expiry-month').val(),
    cvc: $('#card-expiry-year').val(),
    cvc: $('#card-name').val(),
}, stripeResponseHandler);
return false;
});

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $form,append($('<input type="hidden" name="stripeToken" />').val(token));
$form.get(0).submit();
    }
}