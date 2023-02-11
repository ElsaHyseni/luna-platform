<?php
include_once '../repository/paymentRepo.php';
include_once '../models/payment.php'; 

    if(isset($_POST['paymentButton'])){
        if(!(empty($_POST['Name'])) && !(empty($_POST['Surname'])) && !(empty($_POST['CardNo'])) &&
        !(empty($_POST['Expiry'])) && !(empty($_POST['CCV'])) && !(empty($_POST['Address'])) && !(empty($_POST['City'])) &&
        !(empty($_POST['ZipCode'])) && !(empty($_POST['Email'])) && !(empty($_POST['Product'])) && !(empty($_POST['Size']))){
            $fname = $_POST['Name'];
            $lname = $_POST['Surname'];
            $cardno = $_POST['CardNo'];
            $validthru = $_POST['Expiry'];
            $ccv = $_POST['CCV'];
            $address = $_POST['Address'];
            $city = $_POST['City'];
            $zipcode = $_POST['ZipCode'];
            $email = $_POST['Email'];
            $product = $_POST['Product'];
            $size = $_POST['Size'];

            $payment  = new Payment($fname, $lname, $cardno, $validthru, $ccv, $zipcode, $city, $zipcode, $email, $product, $size);
            $paymentRepository = new paymentRepo();

            $paymentRepository->insertPayment($payment);
        }
    } 
?>
