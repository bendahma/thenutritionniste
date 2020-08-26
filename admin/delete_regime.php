<!-- require the init file because it contain the database connection information -->
<?php require('./../functions/init.php'); ?>

<?php
// getting the regime id from the GET global variable
$id = $_GET['regimeId'];
// thedelete SQL query with the id of the regime
$sql = "DELETE FROM `regime` WHERE id='$id' ";
// appying the delete query
$result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
// redirect to the admin/recette page
header("location: ../admin/regime.php");

?>