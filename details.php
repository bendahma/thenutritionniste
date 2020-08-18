<?php require('./functions/init.php'); ?>
<!-- Récupere les données du recette -->
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `recette` WHERE id=$id;" ;
    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    if(mysqli_num_rows($result) == 1){
        $dataRecette = mysqli_fetch_assoc($result);
    }else{
        echo "No recette found";
    }
?>

<?php include_once('./inc/header.php'); ?>

<section class="hero">
    
</section>

