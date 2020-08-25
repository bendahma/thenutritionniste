<?php include_once('./inc/header.php'); ?>

<!-- Contact section -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <form class="" method="POST" action="./functions/sendMessage.php">
                    <h3 class="d-flex justify-content-center">Send us a message</h3>
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
            </div>
            <div class="col-lg-5">
                    <h3 class="mb-5">Contacter nous</h3>
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
