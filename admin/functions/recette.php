<?php require('./../../functions/init.php'); ?>
<!-- Ajouter une nouvelle recette -->
<?php 
    if(isset($_POST['saveRecette'])){
        $recetteName = $_POST['recetteName'];
        $recetteDescription = mysqli_real_escape_string($connect,$_POST['recetteDescription']);
        $recetteIngredients = mysqli_real_escape_string($connect,$_POST['recetteIngredients']);
        $recetteInstructions = mysqli_real_escape_string($connect,$_POST['recetteInstructions']);
        $recetteNutritionFacts = mysqli_real_escape_string($connect,$_POST['recetteNutritionFacts']);
        $image = $_FILES['recetteImage']['name'];
        $now = new DateTime();
        $created_at =  $now->format('Y-m-d H:i:s');
        $target = "./../../upload/recette/".basename($image);
        $sql  = "INSERT INTO `recette`(`id`, `recetteName`, `recetteDescription`, `recetteIngredients`, `recetteInstructions`, `recetteNutritionFacts`,`recetteImage`, `created_at`) VALUES (NULL,'$recetteName','$recetteDescription','$recetteIngredients','$recetteInstructions','$recetteNutritionFacts','$image','$created_at')";
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        move_uploaded_file($_FILES['recetteImage']['tmp_name'], $target);
        if($result){
            $_SESSION['addRecetteSuccess'] = "Une nouvelle recette à été ajouter avec success";
            header("location: ../recette.php");
        }
    }

?>

<!-- Mettre a jours une recette -->

<?php 

    if(isset($_POST['UpdateRecette'])){
        $id = $_POST['recetteId'];
        $recetteName = $_POST['recetteName'];
        $recetteDescription = mysqli_real_escape_string($connect,$_POST['recetteDescription']);
        $recetteIngredients = mysqli_real_escape_string($connect,$_POST['recetteIngredients']);
        $recetteInstructions = mysqli_real_escape_string($connect,$_POST['recetteInstructions']);
        $recetteNutritionFacts = mysqli_real_escape_string($connect,$_POST['recetteNutritionFacts']);
        if ($_FILES['recetteImage']['size'] == 0 ){
            $sql  = "UPDATE `recette` SET `recetteName`='$recetteName',`recetteDescription`='$recetteDescription',`recetteIngredients`='$recetteIngredients',`recetteInstructions`='$recetteInstructions',`recetteNutritionFacts`='$recetteNutritionFacts' WHERE id = '$id'";
            $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
 
        }else {
            $image = $_FILES['recetteImage']['name'];
            $target = "./../../upload/recette/".basename($image);
            $sql  = "UPDATE `recette` SET `recetteName`='$recetteName',`recetteDescription`='$recetteDescription',`recetteIngredients`='$recetteIngredients',`recetteInstructions`='$recetteInstructions',`recetteNutritionFacts`='$recetteNutritionFacts',`recetteImage`='$image' WHERE id = '$id'";
            $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
            move_uploaded_file($_FILES['recetteImage']['tmp_name'], $target);
        }

    
        if($result){
            $_SESSION['success'] = 'Update recette success';
        }else{
            $_SESSION['error'] = 'Update recette failed';
        }
        header("location: ../recette.php");

        
    }

?>