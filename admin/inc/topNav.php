<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow container">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  <i class="fa fa-bars"></i>
</button>


<!-- Topbar Navbar -->
<ul class="navbar-nav mr-auto">
<li class="nav-item" > <a class="nav-link" href="./../admin/" style="color:red; font-weight:600;font-size:1.4rem">Dashboard</a> </li>
  <li class="nav-item" > <a href="./../" class="nav-link ml-3" style="color:black; font-weight:600" target="_blank"><i class="fas fa-home mr-1"></i>  website</a> </li>
  
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:black; font-weight:600"  href="#" id="regeDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-utensils mr-1"></i>  Recette</a>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./../admin/recette.php">Listes des recettes</a>
          <a class="dropdown-item" href="./../admin/ajouter_recette.php">Ajouter une recette</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:black; font-weight:600"  href="#" id="regeDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-heartbeat mr-1"></i>  regime
        </a>
        <div class="dropdown-menu" aria-labelledby="regeDropDown">
          <a class="dropdown-item" href="./../admin/regime.php">Listes des regime</a>
          <a class="dropdown-item" href="./../admin/ajouter_regime.php">Ajouter un regime</a>
          
        </div>
      </li>
</ul>
<ul class="navbar-nav ml-auto">
  <div class="topbar-divider d-none d-sm-block"></div>

  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user'] ?></span>
      <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="./../functions/logout.php">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </li>
</ul>

</nav>
<!-- End of Topbar -->