<?php require('./functions/init.php'); ?>
<!-- Récupere les données du recette -->
<?php
    $id = $_GET['regimeId'];
    $sql = "SELECT * FROM `regime` WHERE id=$id;" ;
    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    if(mysqli_num_rows($result) == 1){
        $dataRegime = mysqli_fetch_assoc($result);
        // dir(print_r($dataRegime));
    }else{
        echo "No regime found";
    }
?>

<?php include_once('./inc/header.php'); ?>

<section class="hero">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./upload/regime/<?php echo $dataRegime['image'] ?>" alt="">
      <div class="carousel-caption d-none d-md-block">
          <div class="innerC">
          <h5><?php echo $dataRegime['title'] ?></h5>
          <small><?php echo $dataRegime['type'] ?></small>
          </div>  
      </div>    
    </div>
  </div>
</div>
</section>

<div class="container" >
    <div class="mt-5">
        <?php echo $dataRegime['description'] ?>
    </div>
    
</div>

<?php include_once('./inc/footer.php'); ?>
