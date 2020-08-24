<?php include_once('./inc/header.php'); ?>
<?php 

    require('./functions/init.php');

    $sex = $_SESSION['sex'];

    $sql = "SELECT * FROM `regime` WHERE `type` = 'Prendre du poids' AND `sex` = '$sex'" ;

    $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));



?>



<!----services---->
<section id="choixProgramme" class="d-flex justify-content-center">
    <div class="container pb-5 ">
        <h1 class="my-5 d-flex justify-content-center">
            Nos Régimes Pour <span style="color:red; font-weight:900; margin-left:10px;border-bottom: 3px solid #000; padding-bottom:3px"> Prendre Du Poids </span>
        </h1>
        <hr >

        <div class=" row">
           <?php if(mysqli_num_rows($result) > 0) { while($PrendrePoids = mysqli_fetch_assoc($result)){ ?>
                    <div class="col-lg-4  mt-4" id="recetteList">
                    <a href="./detailsRegime.php?regimeId=<?php echo $PrendrePoids['id'] ?>" class="recetteLink">
                        <div class="card card-default">
                            <div class="card-body">
                                <img class="img-responsive" src="./upload/regime/<?php echo $PrendrePoids['image'] ?>" height="280px" width="310px" alt="">
                                <h5 class="text-center mt-2"><?php echo $PrendrePoids['title'] ?></h5>
                                <small><?php $PrendrePoids['sex'] ?></small>
                            </div>
                        </div>
                    </a>
                    </div>
            <?php } }else {?>
                <div class="d-flex justify-content-center mt-5" style="width:75vw">
                    <span style="color:red;font-size:5rem"> <i class="far fa-sad-tear"></i> </span>    

                </div>
                <div class="d-flex justify-content-center mb-5" style="width:75vw">
                
                <h4 class=" mt-4">Aucun Régime Disponible Pour Le Moment</h4> 

                </div>
            <?php } ?>
            
                
        </div>
    </div>
</section>

<?php include_once('./inc/footer.php'); ?>
