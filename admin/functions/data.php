<?php require('./../functions/init.php'); ?>


<!-- Recette data -->
<?php

    $sql = "SELECT * FROM `recette`;" ;
    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    $dataRecette = mysqli_fetch_assoc($result);

?>

<?php

    $sql = "SELECT * FROM `recette`;" ;
    $dataRecette = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    
?>
<!-- Get single recette data -->

<?php 
    if(isset($_GET['recetteId'])){
        $id = $_GET['recetteId'];
        $sql = "SELECT * FROM `recette` WHERE id='$id';" ;
        $dataRecette = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        $singleRecette = mysqli_fetch_assoc($dataRecette);
    }

?>
<?php

    $sql = "SELECT * FROM `regime`;" ;
    $dataregime = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    
?>

<!-- Get single regime -->
<?php 
    if(isset($_GET['regimeId'])){
        $id = $_GET['regimeId'];
        $sql = "SELECT * FROM `regime` WHERE id='$id';" ;
        $dataregime = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        $singleregime = mysqli_fetch_assoc($dataregime);
    }

?>

<?php 
        $sql = "SELECT * FROM `messages`;" ;
        $dataMessages = mysqli_query($connect,$sql) or die(mysqli_error($connect));
?>

<?php 

    $userCountSql = "SELECT COUNT(*) AS 'count' FROM `users` ;";
    $recetteCountSql = "SELECT COUNT(*) AS 'count' FROM `recette` ;";
    $regimeCountSql = "SELECT COUNT(*) AS 'count' FROM `regime` ;";
    $messageCountSql = "SELECT COUNT(*) AS 'count' FROM `users` ;";

    $userResult = mysqli_query($connect,$userCountSql) or die(mysqli_error($connect));
    $recetterResult = mysqli_query($connect,$recetteCountSql) or die(mysqli_error($connect));
    $regimeResult = mysqli_query($connect,$regimeCountSql) or die(mysqli_error($connect));
    $messageResult = mysqli_query($connect,$messageCountSql) or die(mysqli_error($connect));

    $userCout = mysqli_fetch_assoc($userResult);
    $recetterCout = mysqli_fetch_assoc($recetterResult);
    $regimeCout = mysqli_fetch_assoc($regimeResult);
    $messageCout = mysqli_fetch_assoc($messageResult);



?>