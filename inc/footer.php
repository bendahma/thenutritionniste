    <!-- Footer section -->
    <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4" style="background-color:rgb(255, 160, 125) !important;">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <div class="row">
      <div class="col-md-3 mx-auto my-auto">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">The Nutritionist </h5>
      </div>
      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-4 mx-auto">

        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About Us</h5>
        <p> ... </p>

      </div>
    
      <hr class="clearfix w-100 d-md-none">



    
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">LIEN</h5>

      <ul class="list-unstyled">
        <li class="mb-3">
        <a class="" href="./" style="color:black !important; font-weight:500; text-decoration:none"><i class="fas fa-home "></i> Accueil </a>
        </li>
        <li class="mb-3">
        <a class="" href="./recette.php" style="color:black !important; font-weight:500; text-decoration:none"><i class="fas fa-utensils"></i> Recettes et cuisine </a>
        </li>
        <li class="mb-3">
        <a class="" href="./choisiRegime.php" style="color:black !important; font-weight:500; text-decoration:none"><i class="fas fa-hamburger"></i> Ton régime  </a>
        </li>
        <li class="mb-3">
        <a class="" href="./contact.php" style="color:black !important; font-weight:500; text-decoration:none"><i class="fas fa-address-card"></i>  Contacter-nous  </a>
        </li>
      </ul>

    </div>
    <hr class="clearfix w-100 d-md-none">

    <div class="col-md-3 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">CONTACTER-NOUS</h5>

      <ul class="list-unstyled">
        <li class="mb-3">
        <span><i class="fas fa-phone-alt"></i> 05.59.43.26.14 </span>
        </li>
        <li class="mb-3 ">
        <span class="align-items-center"><i class="fas fa-envelope"></i> mina.batoir2000@gmail.com </span>
        </li>
        <li class="mb-3">
        <span><i class="fas fa-map-marker-alt"></i> Skikda Skikda Algeria </span>
        </li>
        
      </ul>

    </div>

  </div>

</div>

<hr>
<?php if(!isset($_SESSION['user'])){ ?> 

<ul class="list-unstyled list-inline text-center py-2">
  <li class="list-inline-item">
    <h5 class="mb-1">Register for free</h5>
  </li>
  <li class="list-inline-item">
    <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
  </li>
</ul>

<hr>
<?php } ?>

<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
    <a class="btn-floating btn-fb mx-1">
      <i class="fab fa-facebook-f fa-2x"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-tw mx-1">
      <i class="fab fa-twitter fa-2x"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-gplus mx-1">
      <i class="fab fa-google-plus-g fa-2x"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-li mx-1">
      <i class="fab fa-linkedin-in fa-2x"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-dribbble mx-1">
      <i class="fab fa-dribbble fa-2x"> </i>
    </a>
  </li>
</ul>
<hr>

<div class="footer-copyright text-center py-3">
  © 2020 - Present Copyright:
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" > </script>

      <script src="./assets/js/script.js"></script>
</body>
</html>