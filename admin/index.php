<?php include('./inc/header.php'); ?>

<?php //include("./inc/mainNav.php"); 
?>
   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column ">

      <!-- Main Content -->
      <div id="content">

        <?php include("./inc/topNav.php"); ?>

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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
                    <form action="" method="POST">
                            <div class="form-group">
                              <label for="titre">Nom du Recette</label>
                              <input type="email" class="form-control" id="titre" name="recetteName">
                            </div>
                            <div class="form-group">
                              <label for="description">Description du recette</label>
                              <textarea class="form-control" id="description" placeholder="Recette description" rows="8" name="recetteDescription"></textarea>
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
                          <td >1</td>
                          <td >Reccete title Reccete title Reccete title Reccete </td>
                          <td><img src="" alt=""></td>
                          <td>
                            <select name="" id="" class="custom-select">
                              <option value="">Choisi</option>
                              <option value="">Affiche</option>
                              <option value="">Edit</option>
                              <option value="">Delete</option>
                            </select>
                          </td>
                          
                        </tr>
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
                              <label for="description">Description du régime</label>
                              <textarea class="form-control" id="description" placeholder="Recette description" rows="8" name="recetteDescription"></textarea>
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
                  <h6 class="m-0 font-weight-bold text-primary">LISTES DES RECETTES</h6>
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
                          <td >1</td>
                          <td >Reccete title Reccete title Reccete title Reccete </td>
                          <td><img src="" alt=""></td>
                          <td>
                            <select name="" id="" class="custom-select">
                              <option value="">Choisi</option>
                              <option value="">Affiche</option>
                              <option value="">Edit</option>
                              <option value="">Delete</option>
                            </select>
                          </td>
                          
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

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script src="./../assets/js/jquery.min.js"></script>
  <script src="./../assets/js/bootstrap.bundle.min.js"></script>
  <script src="./../assets/js/jquery.easing.min.js"></script>
  <script src="./../assets/js/sb-admin-2.min.js"></script>

</body>

</html>
