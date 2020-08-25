<?php 

    require_once('init.php');

    if(isset($_POST['sendMessage'])){
        $subject = mysqli_real_escape_string($connect,$_POST['subject']); 
        $object = mysqli_real_escape_string($connect,$_POST['object']); 
        $user =  $_SESSION['fullName'];
        $now = new DateTime();
        $send_at =  $now->format('Y-m-d H:i:s');
        $sql = "INSERT INTO `messages`(`id`, `user_name`, `object`, `body`, `send_at`) VALUES (NULL,'$user','$subject','$object','$send_at')";
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        if($result){
            $_SESSION['sendMessage'] = "Votre message à été envoyer avec success";
            header('location: ./../contact.php');
        }

      
    }


?>