<?php include('./inc/header.php'); ?>
<?php include('./functions/data.php'); ?>
   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column ">

      <!-- Main Content -->
      <div id="content">

        <?php include("./inc/topNav.php"); ?>

        <div class="container">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nombre des utilisateurs</div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                        <?php echo $userCout['count']; ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre des recettes</div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                          <?php echo $recetterCout['count']; ?>
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-utensils fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre des regimes</div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                            <?php echo $regimeCout['count']; ?>

                      </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hamburger fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre des messages</div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                            <?php echo $messageCout['count']; ?>

                      </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
          </div>
          
          
          <!-- Content Row -->
          
            
            
          <!-- </div> -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include('./inc/footer.php'); ?>
