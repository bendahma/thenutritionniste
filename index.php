<html> 
<head>
<title>
    NUTTRITION WEBSITE 
</title>
<link rel ="stylesheet" href ="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel ="stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" > </script>
</head>

<body>

<!---NAVIGATION BAR -->
<?php include "navbar.html"; ?>

<!----slider----->
<div id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
          <li data-target="#headerSlider" data-slide-to="1"></li>
          <li data-target="#headerSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/corp.png" class="d-block w-100" alt="First">
            <div class="carousel-caption ">
              <h5> eat healthy</h5>
              <p> Let your food be your medicine </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/health.jpg" class="d-block w-100" alt="Second">
          
          </div>
          <div class="carousel-item">
            <img src="image/junk.jpg" class="d-block w-100" alt="Third">
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
</div>

<!----about----->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2> about us  </h2>
            <div class="about-content">
                notre site vas vous aider à trouver le meilleur régime  qui vas avec  votre santé
                et tes conditions , des experts vont vous accompagner et vous guider pour trouver ton perfect diet 
            </div>
            <button type="button" class=" btn btn-primary">
                lire plus...
            </button>
            </div>
            <div class="col-md-6 skills-bar">
             <p>
                  eating healthy
             </p>
             <div class="progress">
                 <div class="progress-bar" style="width : 80%;"> 80% </div>
             </div>

             <p>
                   SPORT
                </p>
                <div class="progress">
                    <div class="progress-bar" style="width : 85%;"> 85% </div>
                </div>

                <p>
                       drink water
                    </p>
                    <div class="progress">
                        <div class="progress-bar" style="width : 75%;"> 75% </div>
                    </div>


                    <p>
                            meditate
                        </p>
                        <div class="progress">
                            <div class="progress-bar" style="width : 50%;"> 50% </div>
                        </div>

                      </div>
        </div>
    </div>

</section>
<!----services---->
<section id="services">
<div class="container">
    <h1>
        our services
    </h1>
    <div class=" row services">
        <div class="col-md-3 text center">
            <div class="icon">
                <i class="fa fa-desktop"></i>

            </div>
         <h3> Le regime qui vous convients  </h3>   
         <p>
     Tous les régimes prétendument miracles risquent à la longue de vous coûter cher,
      non seulement en termes d'argent mais aussi en termes de santé. Pourtant cette fois,
       vous pensez avoir trouvé LE régime miracle.
        Avant de vous embarquer pour la énième fois dans cette spirale,
         interrogez-vous sur la méthode que vous avez décidé de suivre , notre site va vous aider à trouver 
         le regime qui vous vas , qu'est ce que vous attendez inscrivez vous !!
         </p>
        </div>

        <div class="col-md-3 text center">
                <div class="icon">
                    <i class="fa fa-line-chart"></i>
    
                </div>
             <h3> recette de cuisine healthy </h3>   
             <p>
                    Pas toujours faciles de savoir quoi cuisiner quand on est pressé.
                     Nos idées de recettes originales, gourmandes et healthy, 
                     à réaliser en un clin d’œil.
             </p>
            </div>
            <div class="col-md-3 text center">
                    <div class="icon">
                        <i class="fa fa-paint-brush"></i>
        
                    </div>
                 <h3> des experts qui vous suivent  </h3>   
                 <p>
                    des medecins et nuttritioniste vont vous guider dans  
                    ton regime pour qu on soit sure de votre safety
                 </p>
                </div>
    </div>
</div>

</section>

</body>











</html>