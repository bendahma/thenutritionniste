<!-- The Regisster script -->

<?php 
    // require the init file with contain the database connection info
    require_once('init.php');

    // check if there is A POST Global variable with register variable
    if(isset($_POST['register'])){
        
        // get the user information from the POST global variable
        $nom = mysqli_real_escape_string($connect,$_POST['nom']);
        $prenom = mysqli_real_escape_string($connect,$_POST['prenom']); 
        $age = mysqli_real_escape_string($connect,$_POST['age']); 
        $username = mysqli_real_escape_string($connect,$_POST['username']); 
        $password = mysqli_real_escape_string($connect,$_POST['password']); 
      
        // insert the user into the database
        $sql = "INSERT INTO `users`(`id`, `nom`, `prenom`, `age`, `username`, `password`, `role`) VALUES (NULL,'$nom','$prenom','$age','$username','$password','visiteur')";
        $result = mysqli_query($connect,$sql)  or die(mysqli_error($connect)) ;
        // if the insert user is succed
        if($result) {
            // get the username and the password from the user input 
            $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
            // run the SQL QUery
            $result = mysqli_query($connect,$sql);
            // convert the mysql object to an associative array
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $row["prenom"];  
            $_SESSION['role'] = $row["role"];  
            $_SESSION['sex'] = $row['sex'];
            $_SESSION['fullName'] = $row['nom'] . ' ' . $row['prenom']; 
    }

}

?>