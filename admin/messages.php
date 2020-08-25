<?php include('./inc/header.php'); ?>
<?php include('./functions/data.php'); ?>
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column ">

<!-- Main Content -->
<div id="content">

  <?php include("./inc/topNav.php"); ?>

  <div class="container">
        <div class="card card-default shadow">
            <div class="card-header">
                <h6>Les messages</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th width="15%">User</th>
                            <th width="20%">Sujet</th>
                            <th width="40%">Message</th>
                            <th>Envoyer Le</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; while($row = mysqli_fetch_assoc($dataMessages)){ ?>
                        <tr>
                            <td> <?php echo $i++; ?> </td>
                            <td> <?php  echo $row['user_name'] ?> </td>
                            <td> <?php  echo $row['object'] ?> </td>
                            <td> <?php  echo $row['body'] ?> </td>
                            <td> <?php  echo $row['send_at'] ?> </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
  </div>
</div>

<?php include('./inc/footer.php'); ?>
