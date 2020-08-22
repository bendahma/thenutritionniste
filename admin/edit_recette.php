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
                                  <label for="titre">Nom du Recette</label>
                                  <input type="text" class="form-control" id="titre" name="recetteName" 
                                  value="<?php echo $singleRecette["recetteName"]; ?>">
                                </div>
                                <div class="form-group">
                                  <label for="description">Description du recette</label>
                                  <textarea class="form-control" id="description" placeholder="Recette description" rows="15" name="recetteDescription">
                                          <?php echo $singleRecette['recetteDescription']; ?>
                                  </textarea>
                                </div>
                                <div class="form-group">
                                  <label for="Ingredients">Ingredients</label>
                                  <textarea  class="form-control" id="ingredients" placeholder="Recette ingredients" rows="15" name="recetteIngredients">
                                            <?php echo $singleRecette['recetteIngredients']; ?>
                                  </textarea>
                                </div>
                                <div class="form-group">
                                  <label for="Instructions">Instructions</label>
                                  <textarea  class="form-control" id="Instructions" placeholder="Recette Instructions" rows="15" name="recetteInstructions">
                                                  <?php echo $singleRecette['recetteInstructions']; ?>
                                  </textarea>
                                </div>
                                <div class="form-group">
                                  <label for="NutritionFacts">Nutrition Facts</label>
                                  <textarea  class="form-control" id="NutritionFacts" placeholder="Recette Nutrition Facts" rows="15" name="recetteNutritionFacts">
                                         <?php echo $singleRecette['recetteNutritionFacts']; ?>
                                  </textarea>
                                </div>
                                <div class="form-group">
                                  <label for="">Image</label>
                                  <input type="file" name="recetteImage" id="" class="form-control">
                                </div>
                                <input type="hidden" value="<?php if(isset($singleRecette)){ echo $singleRecette['id'] ;} ?>"  name="recetteId" >
                                        
                               <div class="row">
                                 <div class="col-lg-3">
                                     
                                   <input type="submit" value="Ajouter" class="btn btn-success btn-block" 
                                        name="<?php 
                                                if(isset($singleRecette)){ 
                                                    echo 'UpdateRecette';
                                                }else {
                                                    echo 'saveRecette';
                                            }  ?>">
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
