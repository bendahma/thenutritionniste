<?php include_once('./inc/header.php'); ?>

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

<!----SANTE---->
<section id="sante">
    <div class="container pb-5">
        <h1>
            POURQUOI FAUT IL ETRE EN BONNE SANTE
        </h1>
        <div class="row">
            <div class="col-lg-6">
            <h3>La chose la plus importante de la vie</h3> 
            On est sûr d’une chose, vous pouvez avoir toutes les merveilles du monde à vos pieds, cela ne vaudra pas la peine si votre santé fait défaut. Le bonheur commence par la bonne santé. De nombreuses personnes consacrent une grande partie de leurs efforts à se maintenir en bonne santé. Si vous demandez auprès de votre entourage, la santé figurera sans nul doute dans le top 3 des choses les plus importantes dans la vie avec l’argent, et l’amour. Bien que ce dernier perd de plus en plus l’intérêt des gens. Le monde en général a compris l’importance de la santé tant l’on consacre le droit à la santé comme un principe universel. Chacun a droit à la santé et au bien-être sans distinction et particulièrement les enfants. La santé couvre trois aspects de notre personne. Il s’agit du bien-être sur le plan corporel, psychologique, mais également social. Pour les organismes internationaux de santé, la notion s’étend à tous les éléments ayant une relation avec comme : l’accès à de l’eau potable et aux installations sanitaires. La santé publique appartient au domaine de l’ordre public à laquelle veillent les autorités publiques.
            </div>
            <div class="col-lg-6">
                <img src="https://www.erdemcetinkaya.com/wp-content/uploads/2019/06/the-chance-to-be-unlimited.jpg" alt="" style="height:60vh;width:100%">
            </div>
        </div>
    </div>
</section>

<!----services---->
<section id="services">
    <div class="container pb-5">
        <h1>
            NOS SERVICES
        </h1>
        <div class=" row services">
            <div class="col-lg-4 text-center">
            
                <div class="icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <h3> Le Regime Qui Vous Convients  </h3>   
                <p> Tous les régimes prétendument miracles risquent à la longue de vous coûter cher, non seulement en termes d'argent mais aussi en termes de santé. Pourtant cette fois, vous pensez avoir trouvé LE régime miracle.<br/>Avant de vous embarquer pour la énième fois dans cette spirale, interrogez-vous sur la méthode que vous avez décidé de suivre , notre site va vous aider à trouver le regime qui vous vas !!</p>
                <?php if(isset($_SESSION['user'])) { 
                            echo "<a href='./choisiRegime.php' class='btn btn-success btn-block mb-4'> Choisi Votre Regime " . $_SESSION['user'] . '</a> ' ; 
                      }else {
                        echo '<a type="button" class="btn btn-success btn-block mb-4" data-toggle="modal" data-target="#exampleModalCenter"> Se connecter </a>';
                      }; ?>
              </div>

            <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <h3> Recette De Cuisine <br> Healthy </h3>   
                    <p> Pas toujours faciles de savoir quoi cuisiner quand on est pressé. Nos idées de recettes originales, gourmandes et healthy, à réaliser en un clin d’œil. </p>
                    <br><br><br><br>
                    <?php if(isset($_SESSION['user'])) { 
                            echo "<a href='./recette.php' class='btn btn-primary btn-block mb-4'> Choisi une recette " . $_SESSION['user'] . '</a> ' ; 
                      }else {
                        echo '<a type="button" class="btn btn-primary btn-block mb-4" data-toggle="modal" data-target="#exampleModalCenter"> Se connecter </a>';
                      }; ?>
            </div>
                <div class="col-lg-4 text-center">
                        <div class="icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>
                         <h3> Des Experts Qui Vous Suivent  </h3>   
                    <p> Des medecins et nuttritioniste vont vous guider dans ton regime pour qu on soit sure de votre safety </p>
                    <br><br><br><br><br>
                    <?php if(isset($_SESSION['user'])) { 
                            echo "<a href='' class='btn btn-warning btn-block mb-4'> Parle avec Quelqu'un " . $_SESSION['user'] . '</a> ' ; 
                      }else {
                        echo '<a type="button" class="btn btn-warning btn-block mb-4" data-toggle="modal" data-target="#exampleModalCenter"> Se connecter </a>';
                      }; ?>
                </div>
        </div>
    </div>
</section>

<?php include_once('./inc/footer.php'); ?>
