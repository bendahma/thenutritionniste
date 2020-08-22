<?php include_once('./inc/header.php'); ?>
<!-- Recette data -->
<?php

    $sql = "SELECT * FROM `recette`;" ;
    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    //die(print_r($dataRecette));

?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <a href="">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://juliasalbum.com/wp-content/uploads/2018/05/Basil-Pesto-Tomato-Mozzarella-Chicken-Bake-10-1-500x456.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <div class="carousel-caption d-none d-md-block">
                  <div class="innerC">
                      <small><b> DERNIER RECCETE</b> </small>
                      <h5> BASIL PESTO TOMATO MOZZARELLA CHICKEN BAKE </h5>
                  </div> 
                </div>  
            </div>    
          </div>
    </a>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br><br>
<section id="recetteList">
    <div class="container pb-5">
        <h1>
            NOS RECETTES
        </h1>
        <div class="row  mt-4">
          <?php while($dataRecette = mysqli_fetch_assoc($result)){ ?>
          <div class="col-lg-4">
              <a href="./detailsRecette.php?id=<?php echo $dataRecette['id'] ?>" class="recetteLink">
                  <div class="card card-default">
                    <div class="card-body">
                          <img class="justify-content-center" src="./upload/recette/<?php echo $dataRecette['recetteImage'] ?>" height="200px" width="" alt="">
                          <h5 class="text-center mt-2"><?php echo $dataRecette['recetteName'] ?></h5>
                    </div>
                  </div>
              </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>



<?php include_once('./inc/footer.php'); ?>
