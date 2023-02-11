<?php
	include_once '../database/databaseConnection.php'; 

	class paymentRepo{
		private $connection;

		function __construct(){
			$connect = new DatabaseConnection;
			$this->connection = $connect->startConnection();
		}

	    function insertPayment($payment){

	        $connect = $this->connection;

	        $fname = $payment->getFname();
            $lname = $payment->getLname();
	        $cardno = $payment->getcardNo();
	        $validthru = $payment->getvalidThru();
            $ccv = $payment->getccv();
            $address = $payment->getAddress();
            $city = $payment->getCity();
	        $zipcode = $payment->getzipCode();
	        $email = $payment->getEmail();
            $product = $payment->getProduct();
            $size = $payment->getSize();


	        $sql = "INSERT INTO paymentForm (fName,lName,cardNo,validThru,ccv,address,city,zipCode,email,product, size) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

	        $statement = $connect->prepare($sql);

	        $statement->execute([$fname, $lname, $cardno, $validthru, $ccv, $address, $city, $zipcode, $email, $product, $size]);

	        echo "<script> alert('Thank you for choosing BLEMA - Clothing Brand!'); </script>";

	    }

	    function getAllMessages(){
	    	$connect = $this->connection;

	    	$sql = "SELECT * FROM paymentForm";
	    	$statement = $connect->query($sql);
	    	$allMessages = $statement->fetchAll();

	    	return $allMessages;
	    }
	}
?>
