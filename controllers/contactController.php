<?php
include_once '../repository/contactRepo.php'; 
include_once '../models/contact.php';

    if(isset($_POST['contactButton'])){
        if(!(empty($_POST['message'])) && !(empty($_POST['contactEmail'])) 
        && !(empty($_POST['Name']))&& !(empty($_POST['Phone']))){
            $name = $_POST['Name'];
            $email = $_POST['contactEmail'];
            $phone = $_POST['Phone'];
            $message = $_POST['message'];

            $contact  = new Contact($name,$email,$phone,$message);
            $contactRepository = new contactRepo();

            $contactRepository->insertContact($contact);
        }
    }
?>
