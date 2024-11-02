<?php
require('config.php');

if(isset($_POST['stripeToken'])){
\Stripe\Stripe::setVerifySslCerts(false);

$token=$_POST['stripeToken'];

$data=\Stripe\Charge::create(array(
	"amount"=>79999,
	"currency"=>"pkr",
	"description"=>"Pay now with stripe. Secure Payments",
	"source"=>$token,
));

	echo "<script>
    alert('Payment successful');
    window.location.href = 'https://dashboard.stripe.com/test/payments';
	</script>";
	}
?>