<?php 


    if(isset($_POST['sendMessage'])){
        $username = mysqli_real_escape_string($connect,$_POST['username']); 
        $password = mysqli_real_escape_string($connect,$_POST['password']); 
      
    }


?>