
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
            <h1 class="h3 mb-0 text-gray-800">Les Régimes </h1>
          </div>

        <div class="row">
             <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">LISTES DES REGIMES</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    
                  </div>
                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Titre</th>
                          <th scope="col">Type</th>
                          <th scope="col">Sex</th>
                          <th scope="col">Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- check if we have regime in our database based on the data we recieved -->
                        <?php if(mysqli_num_rows($dataregime) != 0){
                          // if we have data loop throught it and display the data
                                  while($data = mysqli_fetch_assoc($dataregime)){  
                        ?>
                                    <tr>
                                        <td > <?php echo $data['id']; ?> </td>
                                        <td width="40%"> <?php echo $data['title']; ?> </td>
                                        <td width="20%"> <?php echo $data['type']; ?> </td>
                                        <td > <?php echo $data['sex']; ?> </td>
                                        <td><img src="./../upload/regime/<?php echo $data['image'] ?>" alt="" width="60px" ></td>
                                        <td>
                                            <select name="" id="" class="custom-select" onchange="window.location.href=this.value;">
                                                  <option value="">Choisi</option>
                                                  <option value="./../detailsRegime.php?regimeId=<?php echo $data['id'] ?>">Affiche</option>
                                                  <option value="./../admin/edit_regime.php?regimeId=<?php echo $data['id'] ?>">Edit</option>
                                                  <option value="./../admin/delete_regime.php?regimeId=<?php echo $data['id'] ?>">Delete</option>
                                            </select>
                                          </td>
                                    </tr>
                                  <?php } }else { ?>
                                  <!-- else show no data message -->
                                        <tr>
                                            <td colspan="5" class="text-center" style="font-size:1.3rem">Aucun regime disponible</td>
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