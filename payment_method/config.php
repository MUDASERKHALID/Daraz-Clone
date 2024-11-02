<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51OI1QbEm2MTKvj5c28jY1v63ctR5Uc3eKM0rvDRPZBsRJ1LDeG3KpPqPukmQAqy2Zyg981cSvihSBrYuyNhabZka00almO9eW3";

$secretKey="sk_test_51OI1QbEm2MTKvj5cozHpong3YyTwTwG4t8FW3IeKdotpLxaHYdqi7MJwmFxDxj2bt5bxR6jYowZiFc3xkjctOpXi00MBQynw0t";

\Stripe\Stripe::setApiKey($secretKey);
?>