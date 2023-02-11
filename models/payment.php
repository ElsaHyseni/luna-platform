<?php
	class Payment{
		private $fname;
		private $lname;
        private $cardno;
        private $validthru;
        private $ccv;
        private $address;
        private $city;
        private $zipcode;
        private $email;
        private $product;
        private $size;

		function __construct($fname, $lname, $cardno, $validthru, $ccv, $address, $city, $zipcode, $email, $product, $size){
			$this->fname = $fname;
			$this->lname = $lname;
            $this->cardno = $cardno;
            $this->validthru = $validthru;
            $this->ccv = $ccv;
            $this->address = $address;
            $this->city = $city;
            $this->zipcode = $zipcode;
            $this->email = $email;
            $this->product = $product;
            $this->size = $size;
		}

		function getFname(){
       	   	return $this->fname;
   		}

        function getLname(){
            return $this->lname;
        }

        function getcardNo(){
            return $this->cardno;
        }

        function getvalidThru(){
            return $this->validthru; 
        }

        function getccv(){
            return $this->ccv;
        }

        function getAddress(){
            return $this->address;
        }

        function getCity(){
            return $this->city;
        }

        function getzipCode(){
            return $this->zipcode;
        }

        function getEmail(){
            return $this->email;
        }

        function getProduct(){
            return $this->product;
        }
        function getSize(){
            return $this->size;
        }
	}
?>
