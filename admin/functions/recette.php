<!--  require  the init file with contain the connection information to the database -->
<?php require('./../../functions/init.php'); ?>
<!-- Ajouter une nouvelle recette -->
<?php 
    // check if the POST variable has saveRecette variable with mean we want to add new recette to the database
    if(isset($_POST['saveRecette'])){
        // getting the recette form variables from the POST Global Variable
        $recetteName = $_POST['recetteName'];
        $recetteDescription = mysqli_real_escape_string($connect,$_POST['recetteDescription']);
        $recetteIngredients = mysqli_real_escape_string($connect,$_POST['recetteIngredients']);
        $recetteInstructions = mysqli_real_escape_string($connect,$_POST['recetteInstructions']);
        $recetteNutritionFacts = mysqli_real_escape_string($connect,$_POST['recetteNutritionFacts']);
        $image = $_FILES['recetteImage']['name'];
        // getting the now DateTime
        $now = new DateTime();
        // Changing the format of now to yyyy-mm-d h:i:s to respect the PHPMYADMIN DateTime Format
        $created_at =  $now->format('Y-m-d H:i:s');
        // setting the path to upload the image
        $target = "./../../upload/recette/".basename($image);
        // the SQL query to insert the recette info the database
        $sql  = "INSERT INTO `recette`(`id`, `recetteName`, `recetteDescription`, `recetteIngredients`, `recetteInstructions`, `recetteNutritionFacts`,`recetteImage`, `created_at`) VALUES (NULL,'$recetteName','$recetteDescription','$recetteIngredients','$recetteInstructions','$recetteNutritionFacts','$image','$created_at')";
        // sending the SQL query to the database 
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        // uploading the image to the server
        move_uploaded_file($_FILES['recetteImage']['tmp_name'], $target);
        // if the insertion success we redirect to the admin/recette.php page
        if($result){
            header("location: ../recette.php");
        }
    }

?>

<!-- Updating recette -->

<?php 
    // check if we have a POST request with the value of UpdateRecette witch mean we are going to update the recette row
    if(isset($_POST['UpdateRecette'])){
        // getting the ID of the recette from the POST Global Variable 
        $id = $_POST['recetteId'];
        // mysqli_real_escape_string Protège les caractères spéciaux d'une chaîne pour l'utiliser dans une requête SQL
        // Getting the other variables of the reccete from the POST Global Variable 
        $recetteName = mysqli_real_escape_string($connect,$_POST['recetteName']);
        $recetteDescription = mysqli_real_escape_string($connect,$_POST['recetteDescription']);
        $recetteIngredients = mysqli_real_escape_string($connect,$_POST['recetteIngredients']);
        $recetteInstructions = mysqli_real_escape_string($connect,$_POST['recetteInstructions']);
        $recetteNutritionFacts = mysqli_real_escape_string($connect,$_POST['recetteNutritionFacts']);
        // testing if we want to update the picture of the recette
        //if FILE size is 0 then we don't want to update to picture
        if ($_FILES['recetteImage']['size'] == 0 ){
            // the SQL query to update the recette except the picture
            $sql  = "UPDATE `recette` SET `recetteName`='$recetteName',`recetteDescription`='$recetteDescription',`recetteIngredients`='$recetteIngredients',`recetteInstructions`='$recetteInstructions',`recetteNutritionFacts`='$recetteNutritionFacts' WHERE id = '$id'";
            // applying the SQL query 
            $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
 
        }else {
            // getting the name of the image from the FILE global variable
            $image = $_FILES['recetteImage']['name'];
            // setting the path to where we want to store the picture
            $target = "./../../upload/recette/".basename($image);
            // the SQL query to update the recette
            $sql  = "UPDATE `recette` SET `recetteName`='$recetteName',`recetteDescription`='$recetteDescription',`recetteIngredients`='$recetteIngredients',`recetteInstructions`='$recetteInstructions',`recetteNutritionFacts`='$recetteNutritionFacts',`recetteImage`='$image' WHERE id = '$id'";
            // applying the SQL query 
            $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
            // uploading the image to the path we chose 
            move_uploaded_file($_FILES['recetteImage']['tmp_name'], $target);
        }
        // redirecting to the admin/recette.php page after we are done updating the recette
        header("location: ../recette.php");

        
    }
?>