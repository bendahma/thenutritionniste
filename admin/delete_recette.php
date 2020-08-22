<?php require('./../functions/init.php'); ?>

<?php
$id = $_GET['recetteId'];

$sql = "DELETE FROM `recette` WHERE id='$id' ";
$result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
if($result){
    $_SESSION['success'] = 'Recette supprime avec success';
}else{
    $_SESSION['error'] = 'Erreur supprime recette';
}

header("location: ../admin/recette.php");

?>