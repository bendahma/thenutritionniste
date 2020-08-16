<?php include_once('./inc/header.php'); ?>

<!----slider----->
<!-- <div id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
          <li data-target="#headerSlider" data-slide-to="1"></li>
          <li data-target="#headerSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/image/corp.png" class="d-block w-100" alt="First">
            <div class="carousel-caption ">
              <h5> eat healthy</h5>
              <p> Let your food be your medicine </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/image/health.jpg" class="d-block w-100" alt="Second">
          
          </div>
          <div class="carousel-item">
            <img src="assets/image/junk.jpg" class="d-block w-100" alt="Third">
            <div class="carousel-caption d-none d-md-block">
              <h5> On mange tellement de choses toxiques </h5>
              <p> que ce n'est pas bon appétit que j'ai envie de dire 
                  aux gens mais BONNE CHANCE
              </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div> -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1460306855393-0410f61241c7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          <div class="innerC">
          <h5>On Mange Tellement De Choses Toxiques </h5>
            <p> Que Ce N'est Pas Bon Appétit Que J'ai Envie De Dire 
                  Aux Gens Mais BONNE CHANCE
            </p>
          </div>  
      </div>    
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1559614373-8c59819deb5f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=735&q=80" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          <div class="innerC">
          <h5>Dix Non Au Sucre! Dix Non Au Gateaux! </h5>
            <!-- <p> Que Ce N'est Pas Bon Appétit Que J'ai Envie De Dire 
                  Aux Gens Mais BONNE CHANCE
            </p> -->
          </div>  
      </div>    
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1560971017-e39da06c9a31?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=647&q=80" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          <div class="innerC">
              <h5>Retrouvez-vous!  Arrete Ca!</h5>
          </div>  
      </div>    
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!----services---->
<section id="services">
    <div class="container">
        <h1>
            our services
        </h1>
        <div class=" row services">
            <div class="col-lg-4 text-center">
                <div class="icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <h3> Le regime qui vous convients  </h3>   
                <p> Tous les régimes prétendument miracles risquent à la longue de vous coûter cher, non seulement en termes d'argent mais aussi en termes de santé. Pourtant cette fois, vous pensez avoir trouvé LE régime miracle.<br/>Avant de vous embarquer pour la énième fois dans cette spirale, interrogez-vous sur la méthode que vous avez décidé de suivre , notre site va vous aider à trouver le regime qui vous vas , qu'est ce que vous attendez inscrivez vous !!</p>
            </div>

            <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <h3> Recette de cuisine <br> healthy </h3>   
                    <p> Pas toujours faciles de savoir quoi cuisiner quand on est pressé. Nos idées de recettes originales, gourmandes et healthy, à réaliser en un clin d’œil. </p>
            </div>
                <div class="col-lg-4 text-center">
                        <div class="icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>
                         <h3> des experts qui vous suivent  </h3>   
                    <p> Des medecins et nuttritioniste vont vous guider dans ton regime pour qu on soit sure de votre safety </p>
                </div>
        </div>
    </div>
</section>

<?php include_once('./inc/footer.php'); ?>
