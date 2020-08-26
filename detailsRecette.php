<?php require('./functions/init.php'); ?>
<!-- Récupere les données du recette -->
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `recette` WHERE id=$id;" ;
    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    if(mysqli_num_rows($result) == 1){
        $dataRecette = mysqli_fetch_assoc($result);
        // dir(print_r($dataRecette));
    }else{
        echo "No recette found";
    }
?>

<?php include_once('./inc/header.php'); ?>

<section class="hero">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./upload/recette/<?php echo $dataRecette['recetteImage'] ?>" alt="">
      <div class="carousel-caption d-none d-md-block">
          <div class="innerC">
          <h5><?php echo $dataRecette['recetteName'] ?></h5>
          </div>  
      </div>    
    </div>
  </div>
</div>
</section>

<div class="container" >
    <div class="mt-5">
        <h3 class="mb-4" style="color:red; text-decoration:underline"><?php if(!empty($dataRecette['recetteDescription'])) echo "Description de la recette" ?></h3>
        <?php echo $dataRecette['recetteDescription'] ?>
    </div>
    <div class="mt-5">
        <h3 class="mb-4" style="color:red; text-decoration:underline"><?php if(!empty($dataRecette['recetteIngredients'])) echo "Ingredients" ?></h3>
        <?php echo $dataRecette['recetteIngredients'] ?>
    </div>
    <div class="mt-5" >
        <h3 class="mb-4" style="color:red; text-decoration:underline"><?php if(!empty($dataRecette['recetteInstructions'])) echo "Instructions" ?></h3>
        <?php echo $dataRecette['recetteInstructions'] ?>
    </div>
    <div class="mt-5">
        <h3 class="mb-4" style="color:red; text-decoration:underline"><?php if(!empty($dataRecette['recetteNutritionFacts'])) echo "Nutrition" ?></h3>
        <?php echo $dataRecette['recetteNutritionFacts'] ?>
    </div>
</div>

<?php include_once('./inc/footer.php'); ?>
