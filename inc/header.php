<?php 
$init = "./functions/init.php";
if (file_exists($init)) {
    require_once("./functions/init.php");
}
?>
<html> 
<head>
<title>
    The Nutritionniste
</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel ="stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/71a3035f92.js" crossorigin="anonymous"></script>

<link rel ="stylesheet" href ="./assets/css/site.css">

</head>

<body>

<?php include "navbar.php"; ?>
<?php include "login.php"; ?>
<?php include "register.php"; ?>