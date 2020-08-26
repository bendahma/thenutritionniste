<!-- Importing the init file witch contain the connection to the database information -->
<?php require('./../functions/init.php'); ?>


<!-- Getting the Recette data so we can display it-->
<?php

    // the sql request to select the recette data
    $sql = "SELECT * FROM `recette`;" ;
    // sending the sql request to the database and getting the data - 
    // if the request or connection not correct we display the error with die(mysqli_error)
    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    // we turn the mysqli object we recieved to an associated array to display the data 
    $dataRecette = mysqli_fetch_assoc($result);

?>

<?php

    // the sql request to select the recette data
    $sql = "SELECT * FROM `recette`;" ;
    // sending the sql request to the database and getting the data - 
    // if the request or connection not correct we display the error with die(mysqli_error)
    $dataRecette = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    
?>


<!-- Get single recette using the Get ID from the URL  -->
<?php 
    // Check if there is a recetteId in the GET Request
    if(isset($_GET['recetteId'])){
        // If there is a recette ID in the GEt
        $id = $_GET['recetteId'];
        // Select the recette based on the ID we get from the GET request
        $sql = "SELECT * FROM `recette` WHERE id='$id';" ;
        // send the sql request to the database and getting the response
        $dataRecette = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        // convertig the mysqli object to assiciative array
        $singleRecette = mysqli_fetch_assoc($dataRecette);
    }

?>
<?php

    $sql = "SELECT * FROM `regime`;" ;
    $dataregime = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    
?>

<!-- Get single regime using the Get ID from the URL  -->
<?php 
    // Check if there is a regime in the GET Request
    if(isset($_GET['regimeId'])){
        // If there is a regime ID in the GEt
        $id = $_GET['regimeId'];
        // Select the regime based on the ID we get from the GET request
        $sql = "SELECT * FROM `regime` WHERE id='$id';" ;
        // send the sql query to the database and getting the response
        $dataregime = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        // convertig the mysqli object to assiciative array
        $singleregime = mysqli_fetch_assoc($dataregime);
    }

?>
<!-- Getting the messages from the database -->
<?php 
        // Select all the messages 
        $sql = "SELECT * FROM `messages`;" ;
        // sending the sql query to the database and getting the response
        $dataMessages = mysqli_query($connect,$sql) or die(mysqli_error($connect));
?>

<?php 
    // selecting the N° of rows in the tables using the COUNT() function and naming the result count
    $userCountSql = "SELECT COUNT(*) AS 'count' FROM `users` ;";
    $recetteCountSql = "SELECT COUNT(*) AS 'count' FROM `recette` ;";
    $regimeCountSql = "SELECT COUNT(*) AS 'count' FROM `regime` ;";
    $messageCountSql = "SELECT COUNT(*) AS 'count' FROM `users` ;";
    // sending the sql query to the database 
    $userResult = mysqli_query($connect,$userCountSql) or die(mysqli_error($connect));
    $recetterResult = mysqli_query($connect,$recetteCountSql) or die(mysqli_error($connect));
    $regimeResult = mysqli_query($connect,$regimeCountSql) or die(mysqli_error($connect));
    $messageResult = mysqli_query($connect,$messageCountSql) or die(mysqli_error($connect));
    // getting the N° of rows as associative array
    $userCout = mysqli_fetch_assoc($userResult);
    $recetterCout = mysqli_fetch_assoc($recetterResult);
    $regimeCout = mysqli_fetch_assoc($regimeResult);
    $messageCout = mysqli_fetch_assoc($messageResult);
?>