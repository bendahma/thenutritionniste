<?php include('./inc/header.php'); ?>
<?php include('./functions/data.php'); ?>

<?php //include("./inc/mainNav.php"); 
?>
   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column ">

      <!-- Main Content -->
      <div id="content">

        <?php include("./inc/topNav.php"); ?>

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Statistiques</h1>
          </div>

          <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nombre des utilisateurs</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre des recettes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre des regimes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
          </div>

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Les Recettes </h1>
          </div>
          <div class="row">
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ajouter une recette</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="">
                    <form action="./functions/recette.php" method="POST">
                            <div class="form-group">
                              <label for="titre">Nom du Recette</label>
                              <input type="text" class="form-control" id="titre" name="recetteName">
                            </div>
                            <div class="form-group">
                              <label for="description">Description du recette</label>
                              <textarea class="form-control" id="description" placeholder="Recette description" rows="15" name="recetteDescription"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="Ingredients">Ingredients</label>
                              <textarea  class="form-control" id="ingredients" placeholder="Recette ingredients" rows="4" name="recetteIngredients"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="Instructions">Instructions</label>
                              <textarea  class="form-control" id="Instructions" placeholder="Recette Instructions" rows="4" name="recetteInstructions"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="NutritionFacts">Nutrition Facts</label>
                              <textarea  class="form-control" id="NutritionFacts" placeholder="Recette Nutrition Facts" rows="4" name="recetteNutritionFacts"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="Instructions">Image</label>
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

            <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">LISTES DES RECETTES</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    
                  </div>
                </div>
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <table class="table table-bordered">
                      <thead class="thead-dark">
                        <tr>
                          <th >#</th>
                          <th >Nom</th>
                          <th >Image</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody style="font-weight:700;color:black">
                       <?php 
                              if(mysqli_num_rows($result) > 0){ 
                                    while (    $row = mysqli_fetch_assoc($result)  ) { ?>
                                          <tr>
                                              <td ><?php echo $row['id'] ?></td>
                                              <td ><?php echo substr($row['recetteName'],0,25) . ' ...' ?></td>
                                              <td><img src="" alt=""></td>
                                              <td>
                                                <select name="" id="" class="custom-select" onchange="window.location.href=this.value;">
                                                  <option value="">Choisi</option>
                                                  <option value="./../details.php?id=<?php echo $row['id'] ?>">Affiche</option>
                                                  <option value="./../admin/edit.php?id=<?php echo $row['id'] ?>">Edit</option>
                                                  <option value="./../admin/recette/delete.php?id=<?php echo $row['id'] ?>">Delete</option>
                                                </select>
                                              </td>
                                        </tr>
                                <?php }; 
                              }else { ?>
                                    <tr>
                                        <td colspan="5" class="text-center" style="font-size:1.3rem">Aucun recette disponible</td>
                                  </tr>
                              <?php }?>
                        
                      </tbody>
                    </table>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Les Régimes </h1>
          </div>
          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ajouter un régime</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="">
                    <form action="" method="POST">
                            <div class="form-group">
                              <label for="regimeType">Type de régime</label>
                              <select name="regimeType" id="" class="form-control">
                                  <option value="" selected disabled>Choisi</option>
                                  <option value="prendre" >Pour prendre du poids</option>
                                  <option value="perds" >Pour perds du poids</option>
                                  <option value="diabetiques" >Pour les diabétiques </option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Titre du régime</label>
                              <input class="form-control" id="titreRegime" placeholder="Titre de Régime" type="text" name="titreRegime">

                            </div>
                            <div class="form-group">
                              <label for="description">Description du régime</label>
                              <textarea class="form-control" id="description" placeholder="Recette description" rows="25" name="recetteDescription"></textarea>

                            </div>
                            
                            <div class="form-group">
                              <label for="Instructions">Image</label>
                              <input type="file" name="recetteImage" id="" class="form-control">
                            </div>
                           
                           <div class="row">
                             <div class="col-lg-3">
                               <input type="submit" value="Ajouter" class="btn btn-success btn-block" name="saveRegeme">
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
            <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">LISTES DES REGIMES</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <table class="table table-bordered">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Titre</th>
                          <th scope="col">Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>                  
                </div>
              </div>
            </div>

            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include('./inc/footer.php'); ?>
