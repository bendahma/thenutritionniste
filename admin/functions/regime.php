<!--  require  the init file with contain the connection information to the database -->
<?php require('./../../functions/init.php'); ?>
<!-- Ajouter une nouvelle regime -->
<?php 
    // check if the POST variable has saveregime variable with mean we want to add new regime to the database
    if(isset($_POST['saveregime'])){
        // getting the regime form variables from the POST Global Variable
        $regimeType = mysqli_real_escape_string($connect,$_POST['regimeType']);
        $regimeTitle = mysqli_real_escape_string($connect,$_POST['regimeTitle']);
        $regimeDescription = mysqli_real_escape_string($connect,$_POST['regimeDescription']);
        $regimeImage = $_FILES['regimeImage']['name'];
        $regimeSex = $_POST['regimeSex'];
        // getting the now DateTime
        $now = new DateTime();
        // Changing the format of now to yyyy-mm-d h:i:s to respect the PHPMYADMIN DateTime Format
        $created_at =  $now->format('Y-m-d H:i:s');
        $target = "./../../upload/regime/".basename($regimeImage);
        // the SQL query to insert the regime info the database
        $sql  = "INSERT INTO `regime`(`id`, `type`, `title` ,`description`, `image`, `created_at`,`sex`) VALUES (NULL,'$regimeType','$regimeTitle','$regimeDescription','$regimeImage','$created_at','$regimeSex')";
        // sending the SQL query to the database 
        $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        // uploading the image to the server
        move_uploaded_file($_FILES['regimeImage']['tmp_name'], $target);
        // if the insertion success we redirect to the admin/regime.php page
        if($result){
            header("location: ../regime.php");
        }
    }

?>
<!-- Updating regime -->
<?php 
    // check if we have a POST request with the value of Updateregime witch mean we are going to update the Regime row
    if(isset($_POST['Updateregime'])){
        // getting the ID of the regime from the POST Global Variable 
        $id = $_POST['regimeId'];
        // Getting the other variables of the reccete from the POST Global Variable 
        $regimeType = mysqli_real_escape_string($connect,$_POST['regimeType']);
        $regimeTitle = mysqli_real_escape_string($connect,$_POST['regimeTitle']);
        $regimeDescription = mysqli_real_escape_string($connect,$_POST['regimeDescription']);
        $regimeSex = $_POST['regimeSex'];
        // testing if we want to update the picture of the regime
        //if FILE size is 0 then we don't want to update to picture
        if ($_FILES['regimeImage']['size'] == 0 ){
            // the SQL query to update the regime except the picture
            $sql  = "UPDATE `regime` SET `type`='$regimeType',`title`='$regimeTitle',`description`='$regimeDescription',`sex`='$regimeSex' WHERE id='$id'";
            // applying the SQL query 
            $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
        }else{
            // getting the name of the image from the FILE global variable
            $regimeImage = $_FILES['regimeImage']['name'];
            // setting the path to where we want to store the picture
            $target = "./../../upload/regime/".basename($regimeImage);
            // the SQL query to update the regime
            $sql  = "UPDATE `regime` SET `type`='$regimeType',`title`='$regimeTitle',`description`='$regimeDescription',`image`='$regimeImage',`sex`='$regimeSex' WHERE id='$id'";
            // applying the SQL query 
            $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
            // uploading the image to the path we chose 
            move_uploaded_file($_FILES['regimeImage']['tmp_name'], $target);
            
        }
                // redirecting to the admin/regime.php page after we are done updating the regime
       if($result){
            header("location: ../regime.php");
        }
    }

?>