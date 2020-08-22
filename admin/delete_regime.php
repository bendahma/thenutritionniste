<?php require('./../functions/init.php'); ?>

<?php
$id = $_GET['regimeId'];

$sql = "DELETE FROM `regime` WHERE id='$id' ";
$result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
if($result){
    $_SESSION['success'] = 'regime supprime avec success';
}else{
    $_SESSION['error'] = 'regime supprime recette';
}

header("location: ../admin/regime.php");

?>