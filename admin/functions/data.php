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