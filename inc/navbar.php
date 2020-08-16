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
<a class="navbar-brand" href="#"> <img src="assets/image/logo.jpg"> The Nutritionist </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"> Accueil </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Recettes et cuisine </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ton programmes  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./aboutUs.php">About us  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">  Contacter-nous  </a>
              </li>
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item" style="color:black; font-weight:600">
                <?php if(isset($_SESSION['user'])) { 
                            echo "Bienvenue : " . $_SESSION['user'] . ' ' . '<a href="./functions/logout.php" class="badge">Logout</a>'; 
                      }else {
                        echo '<a class="nav-link " href="#"></a> <a type="button" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter"> Se connecter </a> <a class="nav-link " href="#">S\'inscrire</a> ';
                      }; ?>

                  
                </li>
          </ul>
  </ul>
</nav>
</section>