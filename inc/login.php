<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title rm-auto" id="exampleModalCenterTitle">Se Connecter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="./functions/login.php">
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" id="" placeholder="USERNAME" name="username">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" id="" placeholder="Password" name="password">
                </div>
                
                
        </div>
        <div class="modal-footer mr-auto">
          <div class="row">
            <div class="col">
              <input type="submit" name="login" class="btn btn-success btn-block" value="Login">
            </div>
          </div>
        </div>
    </form>

      </div>
    </div>
  </div>