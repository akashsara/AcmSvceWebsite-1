<?php
include 'src/Instamojo.php';
$api = new Instamojo\Instamojo('52292c308c428b89fbd26f1320d5bcb4', 'e94f5c790fc8bc18f56b838c83e3cd83');
try {
    $money = ((int)$_POST['option'])*100;
    $response = $api->paymentRequestCreate(array(
        "purpose" => "H.A.C.C 2017",
        // "buyer_name" => $name,
        "amount" => $money,
        "send_email" => false,
        // "email" => $email,
        "allow_repeated_payments" => false,
    ));
    $pay_url = $response['longurl'];
    header('location:' .$pay_url);
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
session_destroy();
?>
