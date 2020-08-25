<?php include_once('./inc/header.php'); ?>
<!-- Recette data -->
<?php

    $sql = "SELECT * FROM `recette`;" ;
    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    
?>

<section id="recetteList">
    <div class="container py-5">
        <h1 class="my-5">
            NOS RECETTES
        </h1>
        <?php if(isset($_SESSION['user'])){?>
        <div class="row  mt-4">
          <?php if(mysqli_num_rows($result) > 0){ while($dataRecette = mysqli_fetch_assoc($result)){ ?>
          <div class="col-lg-4 mb-4">
              <a href="./detailsRecette.php?id=<?php echo $dataRecette['id'] ?>" class="recetteLink">
                  <div class="card card-default">
                    <div class="card-body">
                          <img class="justify-content-center" src="./upload/recette/<?php echo $dataRecette['recetteImage'] ?>" height="200px" width="" alt="">
                          <h5 class="text-center mt-2"><?php echo $dataRecette['recetteName'] ?></h5>
                    </div>
                  </div>
              </a>
            </div>
            <?php } }else {?>
              <div class="d-flex justify-content-center " style="width:85vw">
                    <span style="color:red;font-size:5rem"> <i class="far fa-sad-tear"></i> </span>    

                </div>
                <div class="d-flex justify-content-center mb-5" style="width:85vw">
                
                <h4 class=" mt-4">Aucun Recette Disponible Pour Le Moment</h4> 

                </div>
            <?php } ?>
        </div>
        <?php }else{ ?>
            <div class="d-flex justify-content-center" style="min-width:75vw">
                  <h3>Connecté pour access à nos recettes </h3>
                
                  <div class="ml-2 align-items-center" style="border-bottom: 2px solid red;padding-bottom:5px">
                  <a type="button" class="h4 text-danger" data-toggle="modal" data-target="#exampleModalCenter"> Se connecter </a>  OU 
                  <a type="button" class="h4" data-toggle="modal" data-target="#registerModel">S'inscrire</a> 

                  </div>
                  
            </div>
            <?php } ?>
    </div>
</section>


<?php include_once('./inc/footer.php'); ?>
