<!-- The Login script -->
<?php 
    // require the init file with contain the database connection info
    require_once('init.php');

    // check if there is A POST Global variable with login variable
    if(isset($_POST['login'])){
        
        // get the username and the password from the user input 
        $username = mysqli_real_escape_string($connect,$_POST['username']);
        $password = mysqli_real_escape_string($connect,$_POST['password']); 
      
        // select a user with the above username and password
        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        // run the SQL QUery
        $result = mysqli_query($connect,$sql);
        // convert the mysql object to an associative array
        $row = mysqli_fetch_assoc($result);
        // count the number of rows in the select user sql query
        $count = mysqli_num_rows($result);
        // if the N° of rows is 1 that mean there is a user with the username and password that were givin
        if($count == 1) {
            // set the prenom role sex and full name of the selected user in a session variables to be used later
            $_SESSION['user'] = $row["prenom"];  
            $_SESSION['role'] = $row["role"];  
            $_SESSION['sex'] = $row ['sex'];
            $_SESSION['fullName'] = $row['nom'] . ' ' . $row['prenom'];
            // chech the role of the login user
            if($row['role'] == 'admin'){
                // if the login user is admin it will be redirected automaticly to the admin area
                header("location: ../admin/index.php");
            }else{
                // else if is't a normale user it will be redirected to the index page of the website 
                header("location: ../index.php");
            }          
         }else{
             // if there is a problem with login or there is no user in the database with the previous info redirect to the index of the website
            header("location: ../index.php");
        }
    }
?>