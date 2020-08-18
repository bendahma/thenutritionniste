<?php require('./../../functions/init.php'); ?>

<?php 
    if(isset($_POST['saveRecette'])){
        $recetteName = $_POST['recetteName'];
        $recetteDescription = $_POST['recetteDescription'];
        $recetteIngredients = $_POST['recetteIngredients'];
        $recetteInstructions = $_POST['recetteInstructions'];
        $recetteNutritionFacts = $_POST['recetteNutritionFacts'];
        

        $sql  = "INSERT INTO `recette`(`id`, `recetteName`, `recetteDescription`, `recetteIngredients`, `recetteInstructions`, `recetteNutritionFacts`) VALUES (NULL,'$recetteName','$recetteDescription','$recetteIngredients','$recetteInstructions','$recetteNutritionFacts')";
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        if($result){
            $_SESSION['addRecetteSuccess'] = "Une nouvelle recette à été ajouter avec success";
            header("location: ../index.php");
        }
    }

?>