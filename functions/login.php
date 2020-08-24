<?php 
    require_once('init.php');


    if(isset($_POST['login'])){
        

        $username = mysqli_real_escape_string($connect,$_POST['username']);
        $password = mysqli_real_escape_string($connect,$_POST['password']); 
      

        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            $_SESSION['user'] = $row["prenom"];  
            $_SESSION['role'] = $row["role"];  
            $_SESSION['sex'] = $row ['sex'];
            if($row['role'] == 'admin'){
                header("location: ../admin/index.php");
            }else{
                header("location: ../index.php");
            }          
         }else{
            header("location: ../index.php");
        }
    }
?>