<?php

$price = $_POST['amount'];
$donation = "Donation";
$name = "john";
$amount = $price;
$phone = 9916083185 ;
$email = "slayerben22@gmail.com";


include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_8ae79c2bcfb47d64412cb43977a', 'test_117bc25cb7fcf75ab14b7f90697','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Donation",
        "amount" => $amount,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "https://sparkpayment.000webhostapp.com/thankyou.php",
        "webhook" => "https://sparkpayment.000webhostapp.com/webhook.php"
        ));

        $pay_ulr = $response['longurl'];
 ob_start();   

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>


<div class="container">



</div>
</body>
</html>