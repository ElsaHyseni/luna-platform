<?php
	class Contact{ 
		private $name;
		private $email;
		private $phone;
		private $message; 

		function __construct($name, $email, $phone,$message){
			$this->name = $name;
			$this->phone = $phone;
			$this->message = $message;
			$this->email = $email;
		}
		function getName(){
			return $this->name;
	 }

	 	function getPhone(){ 
		return $this->phone;
 	}

		function getMessage(){
       	   	return $this->message;
   		}

    	function getEmail(){
        	return $this->email;
   		}
	}
?>
