<?php include('./inc/header.php'); ?>
<?php include('./functions/data.php'); ?>

<?php //include("./inc/mainNav.php"); 
?>
   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column ">

      <!-- Main Content -->
      <div id="content">

        <?php include("./inc/topNav.php"); ?>

        <div class="container">

          
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                  <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Ajouter une recette</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="">
                        <form action="./functions/recette.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="titre" style="font-size:1.2rem;color:black !important;font-weight:600">Nom du Recette</label>
                                  <input type="text" class="form-control" id="titre" name="recetteName">
                                </div>
                                <div class="form-group">
                                  <label for="description" style="font-size:1.2rem;color:black !important;font-weight:600">Description du recette</label>
                                  <textarea class="form-control" id="description" placeholder="Recette description" rows="15" name="recetteDescription"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="Ingredients" style="font-size:1.2rem;color:black !important;font-weight:600">Ingredients</label>
                                  <textarea  class="form-control" id="ingredients" placeholder="Recette ingredients" rows="15" name="recetteIngredients"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="Instructions" style="font-size:1.2rem;color:black !important;font-weight:600">Instructions</label>
                                  <textarea  class="form-control" id="Instructions" placeholder="Recette Instructions" rows="15" name="recetteInstructions"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="NutritionFacts" style="font-size:1.2rem;color:black !important;font-weight:600">Nutrition Facts</label>
                                  <textarea  class="form-control" id="NutritionFacts" placeholder="Recette Nutrition Facts" rows="15" name="recetteNutritionFacts"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="" style="font-size:1.2rem;color:black !important;font-weight:600">Image</label>
                                  <input type="file" name="recetteImage" id="" class="form-control">
                                </div>
                               
                               <div class="row">
                                 <div class="col-lg-3">
                                   <input type="submit" value="Ajouter" class="btn btn-success btn-block" name="saveRecette">
                                 </div>
                                 <div class="col-lg-3">
                                   <input type="reset" value="Supprime" class="btn btn-danger btn-block">
                                 </div>
                               </div>
    
                              
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
    
                
              </div>
        </div>
      </div>
      <?php include('./inc/footer.php'); ?>
