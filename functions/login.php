<?php 
    require_once('init.php');


    if(isset($_POST['login'])){
        

        $username = mysqli_real_escape_string($connect,$_POST['username']);
        $password = mysqli_real_escape_string($connect,$_POST['password']); 
      

        $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            $_SESSION['user'] = $username;            
            header("location: ../index.php");
         }else{
            header("location: /nmknkjnmklnmlkmkm,l");

         }

    }



?>