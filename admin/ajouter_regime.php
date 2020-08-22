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

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Les Régimes </h1>
          </div>

          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ajouter un régime</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="">
                    <form action="./functions/regime.php" method="POST" enctype="multipart/form-data" >
                            <div class="form-group">
                              <label for="regimeType">Type de régime</label>
                              <select id="" class="form-control" name="regimeType">
                                  <option value="" selected disabled>Choisi</option>
                                  <option value="Prendre du poids" >Pour prendre du poids</option>
                                  <option value="Perds du poids" >Pour perds du poids</option>
                                  <option value="Diabetiques" >Pour les diabétiques </option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="regimeType">Sex de régime</label>
                              <select id="" class="form-control" name="regimeSex">
                                  <option value="" selected disabled>Choisi</option>
                                  <option value="Homme" >Homme</option>
                                  <option value="Femme" >Femme</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Titre du régime</label>
                              <input class="form-control" id="titreRegime" placeholder="Titre de Régime" type="text" name="regimeTitle">

                            </div>
                            <div class="form-group">
                              <label for="description">Description du régime</label>
                              <textarea class="form-control" id="description" placeholder="Recette description" rows="25" name="regimeDescription">
                                
                              </textarea>

                            </div>
                            
                            <div class="form-group">
                              <label for="Instructions">Image</label>
                              <input type="file" name="regimeImage" id="" class="form-control">
                            </div>
                           
                           <div class="row">
                             <div class="col-lg-3">
                               <input type="submit" value="Ajouter" class="btn btn-success btn-block" name="saveregime">
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