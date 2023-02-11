<?php
	include_once '../database/databaseConnection.php'; 

	class contactRepo{
		private $connection;

		function __construct(){
			$connect = new DatabaseConnection;
			$this->connection = $connect->startConnection();
		}

	    function insertContact($contact){

	        $connect = $this->connection;

			$name = $contact->getName();
	        $phone = $contact->getPhone();
	        $message = $contact->getMessage();
	        $email = $contact->getEmail();

	        $sql = "INSERT INTO contactForm (Name, Phone,Message,Email) VALUES (?,?,?,?)";

	        $statement = $connect->prepare($sql);

	        $statement->execute([$name, $phone,$message,$email]);

	        echo "<script> alert('Message was sent successfuly!'); </script>";

	    }

	    function getAllMessages(){
	    	$connect = $this->connection;

	    	$sql = "SELECT * FROM contactForm";
	    	$statement = $connect->query($sql);
	    	$allMessages = $statement->fetchAll();

	    	return $allMessages;
	    }
	}
?>
