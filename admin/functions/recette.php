<?php require('./../../functions/init.php'); ?>

<?php 
    if(isset($_POST['saveRecette'])){
        $recetteName = $_POST['recetteName'];
        $recetteDescription = $_POST['recetteDescription'];
        $recetteIngredients = $_POST['recetteIngredients'];
        $recetteInstructions = $_POST['recetteInstructions'];
        $recetteNutritionFacts = $_POST['recetteNutritionFacts'];
        $image = $_FILES['recetteImage']['name'];
        $create_at = NULL ;
        $target = "./../../upload/recette/".basename($image);
        $sql  = "INSERT INTO `recette`(`id`, `recetteName`, `recetteDescription`, `recetteIngredients`, `recetteInstructions`, `recetteNutritionFacts`,`image`) VALUES (NULL,'$recetteName','$recetteDescription','$recetteIngredients','$recetteInstructions','$recetteNutritionFacts','$image')";
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        move_uploaded_file($_FILES['recetteImage']['tmp_name'], $target);
        if($result){
            $_SESSION['addRecetteSuccess'] = "Une nouvelle recette à été ajouter avec success";
            header("location: ../index.php");
        }
    }

?>