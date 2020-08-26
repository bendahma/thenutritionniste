<!-- require the init file because it contain the database connection information -->
<?php require('./../functions/init.php'); ?>

<?php
// getting the recette id from the GET global variable
$id = $_GET['recetteId'];
// thedelete SQL query with the id of the recette
$sql = "DELETE FROM `recette` WHERE id='$id' ";
// appying the delete query
$result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
// redirect to the admin/recette page
header("location: ../admin/recette.php");

?>