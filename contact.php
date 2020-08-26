<?php include_once('./inc/header.php'); ?>

<!-- Contact section -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                    <?php if(isset($_SESSION['sendMessage'])){ ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                           <h6> <?php echo $_SESSION['sendMessage'] ?> </h6> 
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } unset($_SESSION['sendMessage']);?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
            <?php if(isset($_SESSION['user'])){ ?>
                <form class="" method="POST" action="./functions/sendMessage.php">
                    <h3 class="d-flex justify-content-center">Envoie-nous un message</h3>
                        <div class="my-5">
                            <input type="text" name="subject" id="" placeholder="Sujet" class="form-control contactClass">
                        </div>
                        <div class="mt-3">
                            <textarea type="text" name="object" id=""  placeholder="Objet" cols="35" rows="7" class="form-control contactClass" ></textarea>
                        </div>
                        <div class="my-4">
                            <input type="submit" name="sendMessage" value="Send" class="btn btn-success px-5" >
                        </div>
                </form>
                <?php }else{ ?>
                    <div class="d-flex flex-column justify-content-center mt-5 " style="width:50vw">
                            <h4>Connecté pour nous envoyer une message </h4>
                             <div class="ml-2 align-items-center" >
                                 <a type="button" class="h4 text-danger" data-toggle="modal" data-target="#exampleModalCenter"> Se connecter </a>  OU 
                                 <a type="button" class="h4" data-toggle="modal" data-target="#registerModel">S'inscrire</a> 
                             </div>
                  
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-5">
                    <h3 class="my-4">Contacter nous</h3>
                    <ul class="list-unstyled">
                            <li class="mb-5">
                            <span class="font-size:1.7rem !important;"><i class="fas fa-phone-alt "></i> 05.59.43.26.14 </span>
                            </li>
                            <li class="mb-5 ">
                            <span class="align-items-center"><i class="fas fa-envelope"></i> mina.batoir2000@gmail.com </span>
                            </li>
                            <li class="mb-5">
                            <span><i class="fas fa-map-marker-alt"></i> Skikda Skikda Algeria </span>
                            </li>
                    </ul>
            </div>
        </div>
    </div>

</section>
	<!-- Contact section end -->


<?php include_once('./inc/footer.php'); ?>
