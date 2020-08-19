<!-- 
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"> <img src="assets/image/logo.jpg"> votre guide de santer </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"> Accueil </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Recettes et cuisine </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ton programme  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Nous contacter  </a>
              </li>
          </ul>
          <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="inscription0.php"> Login   </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="inscription0.php"> Register   </a>
                </li>
          </ul>
        </div>
      </nav>
</section> -->

<section id="nav-bar">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="./"> <img src="assets/image/logo.jpg"> The Nutritionist </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><i class="fas fa-home "></i> Accueil </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./recette.php"><i class="fas fa-utensils"></i> Recettes et cuisine </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-heartbeat"></i> Ton programmes  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./aboutUs.php"><i class="fas fa-search"></i> About us  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-address-card"></i>  Contacter-nous  </a>
              </li>
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">

              <li class="nav-item dropdown no-arrow">
              <?php if(isset($_SESSION['user'])) { ?>
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600"><?php  echo "Bienvenue : " . $_SESSION['user'] ?></span>
                        <img class="img-profile rounded-circle" src="">
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                       <?php if($_SESSION['role'] == 'admin'){ ?>
                        <a class="dropdown-item" href="./admin/index.php">
                        <i class="fa fa-user-circle fa-sm fa-fw mr-2 text-gray-400"></i>
                          Admin area
                        </a>
                       <?php } ?>
                        <a class="dropdown-item" href="./functions/logout.php">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Logout
                        </a>
                      </div>
               <?php }else {
                        echo '<a type="button" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter"> Se connecter </a> <a type="button" class="nav-link" data-toggle="modal" data-target="#registerModel">S\'inscrire</a> ';
                }; ?> 
              </li>

                
          </ul>
  </ul>
</nav>
</section>