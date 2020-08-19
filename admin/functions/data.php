<?php require('./../functions/init.php'); ?>


<!-- Recette data -->
<?php

    $sql = "SELECT * FROM `recette`;" ;
    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    $dataRecette = mysqli_fetch_assoc($result);
    //die(print_r($dataRecette));

?>