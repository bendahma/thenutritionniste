<?php include('./inc/header.php'); ?>
<?php include('./functions/data.php'); ?>

<?php //include("./inc/mainNav.php"); 
?>
   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column ">

      <!-- Main Content -->
      <div id="content">

        <?php include("./inc/topNav.php"); ?>

        <div class="container">

          

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Les Recettes </h1>
          </div>
          <div class="row">
                <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">LISTES DES RECETTES</h6>
                            </div>
                            <div class="card-body">
                            <div class="pt-4 pb-2">
                                <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                    <th >#</th>
                                    <th >Nom</th>
                                    <th >Image</th>
                                    <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody style="font-weight:700;color:black">
                                
                                    <!-- check if we have recette in our database based on the data we recieved -->
                                    <?php 
                                        if(mysqli_num_rows($dataRecette) > 0){ 
                                        // if we have data loop throught it and display the data
                                            while ($row = mysqli_fetch_assoc($dataRecette)  ) { ?>
                                                    <tr>
                                                        <td ><?php echo $row['id'] ?></td>
                                                        <td ><?php echo $row['recetteName'] ?></td>
                                                        <td><img src="./../upload/recette/<?php echo $row['recetteImage'] ?>" alt="" width="60px" ></td>
                                                        <td>
                                                            <select name="" id="" class="custom-select" onchange="window.location.href=this.value;">
                                                            <option value="">Choisi</option>
                                                            <option value="./../detailsRecette.php?id=<?php echo $row['id'] ?>">Affiche</option>
                                                            <option value="./../admin/edit_recette.php?recetteId=<?php echo $row['id'] ?>">Edit</option>
                                                            <option value="./../admin/delete_recette.php?recetteId=<?php echo $row['id'] ?>">Delete</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                            <?php }; }else { ?>
                                            <!-- else show no data message -->
                                             <tr>
                                                    <td colspan="5" class="text-center" style="font-size:1.3rem">Aucun recette disponible</td>
                                            </tr>
                                        <?php }?>
                                    
                                </tbody>
                                </table>
                            </div>                  
                            </div>
                        </div>
                </div>
            </div>
        </div>
      </div>
      <?php include('./inc/footer.php'); ?>

    
