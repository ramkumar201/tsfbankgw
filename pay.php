<?php

if(isset($_POST['pay_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $purpose = $_POST['purpose'];
    $amount = $_POST['amount'];

    include 'src/Instamojo.php';

    $api = new Instamojo\Instamojo("test_cc3cbe30c503d93ab7cc89dad89", "test_e812273d85c007fc973ca2abc74", 'https://test.instamojo.com/api/1.1/');
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $purpose,
            "amount" => $amount,
            "phone" => $phone_no,
            "buyer_name" => $name,
            "send_email" => true,
            "send_sms" => true,
            "email" => $email,
            "redirect_url" => "http://localhost/bankpayment/success.php"
            ));
            $url = $response["longurl"];
            header("location: $url");
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }

}else{
    header("location: goto.php");
}
?>