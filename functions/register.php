<?php 
    require_once('init.php');


    if(isset($_POST['register'])){
        

        $nom = mysqli_real_escape_string($connect,$_POST['nom']);
        $prenom = mysqli_real_escape_string($connect,$_POST['prenom']); 
        $age = mysqli_real_escape_string($connect,$_POST['age']); 
        $username = mysqli_real_escape_string($connect,$_POST['username']); 
        $password = mysqli_real_escape_string($connect,$_POST['password']); 
      

        $sql = "INSERT INTO `users`(`id`, `nom`, `prenom`, `age`, `username`, `password`) VALUES (NULL,'$nom','$prenom','$age','$username','$password')";
        $result = mysqli_query($connect,$sql)  or die('error inserting new user') ;
        
        if($result) {
            $_SESSION['user'] = $prenom;            
            header("location: ../index.php");
         }

    }



?>