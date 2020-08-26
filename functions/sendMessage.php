<?php 
    // require init file
    require_once('init.php');
    // check if the POST request has a sendMessage variable
    if(isset($_POST['sendMessage'])){
        // getting the subject and body of the message and name of the sender
        $subject = mysqli_real_escape_string($connect,$_POST['subject']); 
        $object = mysqli_real_escape_string($connect,$_POST['object']); 
        $user =  $_SESSION['fullName'];
        // setting the format of the send message
        $now = new DateTime();
        $send_at =  $now->format('Y-m-d H:i:s');
        // insert the message in the database
        $sql = "INSERT INTO `messages`(`id`, `user_name`, `object`, `body`, `send_at`) VALUES (NULL,'$user','$subject','$object','$send_at')";
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        // if the insert is successful we redirect the user to contact page then we send send success message
        if($result){
            $_SESSION['sendMessage'] = "Votre message à été envoyer avec success";
            header('location: ./../contact.php');
        }
    }


?>