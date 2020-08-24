<?php include_once('./inc/header.php'); ?>




<!----services---->
<section id="choixProgramme" class="d-flex justify-content-center">
    <div class="container pb-5 ">
        <h1 class="my-5 d-flex justify-content-center">
            Qu'est ce que tu besion
        </h1>

        <div class=" row ">
            <!-- <select name="choixRegime" id="">
                <option value="" selected disabled>Choisi un programme pour</option>
                <option value="Prendre du poids">Prendre du poids</option>
                <option value="prendre de poids">Perdre du poids</option>
            </select> -->
            <div class="col-lg-4" id="recetteList">
              <a href="./prendre.php" class="recetteLink">
                  <div class="card card-default">
                    <div class="card-body">
                          <img class="img-responsive" src="https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/articles/health_tools/safe_ways_to_gain_weight_slideshow/493ss_thinkstock_rf_six_panel_healthy_meals.jpg" height="280px" width="310px" alt="">
                          <h5 class="text-center mt-2">Régime pour Prendre Du Poids</h5>
                    </div>
                  </div>
              </a>
            </div>
            <div class="col-lg-4" id="recetteList">
              <a href="./perds.php" class="recetteLink">
                  <div class="card card-default">
                    <div class="card-body">
                          <img class="justify-content-center" src="https://i.insider.com/5bbba8e701145571de33f3c4?width=600&format=jpeg&auto=webp" height="280px" width="310px" alt="">
                          <h5 class="text-center mt-2">Régime pour Perds Du Poids</h5>
                    </div>
                  </div>
              </a>
            </div>
            <div class="col-lg-4" id="recetteList">
              <a href="./diabetiques.php" class="recetteLink">
                  <div class="card card-default">
                    <div class="card-body">
                          <img class="justify-content-center" src="data:image/jpeg;base64,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" height="280px" width="310px" alt="">
                          <h5 class="text-center mt-2">Régime Pour Les Diabétiques</h5>
                    </div>
                  </div>
              </a>
            </div>
            
                
        </div>
    </div>
</section>

<?php include_once('./inc/footer.php'); ?>
