<?php 
    require_once('init.php');


    if(isset($_POST['register'])){
        

        $nom = mysqli_real_escape_string($connect,$_POST['nom']);
        $prenom = mysqli_real_escape_string($connect,$_POST['prenom']); 
        $age = mysqli_real_escape_string($connect,$_POST['age']); 
        $username = mysqli_real_escape_string($connect,$_POST['username']); 
        $password = mysqli_real_escape_string($connect,$_POST['password']); 
      

        $sql = "INSERT INTO `users`(`id`, `nom`, `prenom`, `age`, `username`, `password`, `role`) VALUES (NULL,'$nom','$prenom','$age','$username','$password','visiteur')";
        $result = mysqli_query($connect,$sql)  or die(mysqli_error($connect)) ;
        
        if($result) {
            $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if($count == 1) {
                $_SESSION['user'] = $row["prenom"];  
                $_SESSION['role'] = $row["role"];  
                $_SESSION['sex'] = $row['sex'];
                if($row['role'] == 'admin'){
                    header("location: ../admin/index.php");
                }else{
                    header("location: ../index.php");
            }          
            }else{
                header("location: ../index.php");
            }
    }

}

?>