<?php require('./../../functions/init.php'); ?>

<?php 
    if(isset($_POST['saveregime'])){
        $regimeType = mysqli_real_escape_string($connect,$_POST['regimeType']);
        $regimeTitle = mysqli_real_escape_string($connect,$_POST['regimeTitle']);
        $regimeDescription = mysqli_real_escape_string($connect,$_POST['regimeDescription']);
        $regimeImage = $_FILES['regimeImage']['name'];
        $regimeSex = $_POST['regimeSex'];
        $now = new DateTime();
        $created_at =  $now->format('Y-m-d H:i:s');
        $target = "./../../upload/regime/".basename($regimeImage);
        $sql  = "INSERT INTO `regime`(`id`, `type`, `title` ,`description`, `image`, `created_at`,`sex`) VALUES (NULL,'$regimeType','$regimeTitle','$regimeDescription','$regimeImage','$created_at','$regimeSex')";
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        move_uploaded_file($_FILES['regimeImage']['tmp_name'], $target);
        if($result){
            $_SESSION['addRecetteSuccess'] = "Un nouveau regime à été ajouter avec success";
            header("location: ../regime.php");
        }
    }

?>
<?php 
    if(isset($_POST['Updateregime'])){
        $id = $_POST['regimeId'];
        $regimeType = mysqli_real_escape_string($connect,$_POST['regimeType']);
        $regimeTitle = mysqli_real_escape_string($connect,$_POST['regimeTitle']);
        $regimeDescription = mysqli_real_escape_string($connect,$_POST['regimeDescription']);
        $regimeSex = $_POST['regimeSex'];
        if ($_FILES['regimeImage']['size'] == 0 ){
            $sql  = "UPDATE `regime` SET `type`='$regimeType',`title`='$regimeTitle',`description`='$regimeDescription',`sex`='$regimeSex' WHERE id='$id'";
            $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        }else{
            $regimeImage = $_FILES['regimeImage']['name'];
            $target = "./../../upload/regime/".basename($regimeImage);
            $sql  = "UPDATE `regime` SET `type`='$regimeType',`title`='$regimeTitle',`description`='$regimeDescription',`image`='$regimeImage',`sex`='$regimeSex' WHERE id='$id'";
            $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
            move_uploaded_file($_FILES['regimeImage']['tmp_name'], $target);
            
        }
       if($result){
            $_SESSION['success'] = "Le regime à été modifier avec success";
            header("location: ../regime.php");
        }
    }

?>