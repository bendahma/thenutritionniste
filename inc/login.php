<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                     <form method="POST" action="./functions/login.php">
                            <div class="con">
                                  <header class="head-form">
                                    <h2>Se Connecté</h2>
                                  </header>
                                  <br>
                                  <div class="field-set">
                                        <span class="input-item"> <i class="fa fa-user-circle"></i> </span>
                                        <input class="form-input" id="txt-input" type="text" placeholder="@UserName" required name="username">
                                        <br>    
                                        <span class="input-item"> <i class="fa fa-key"></i> </span>
                                        <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required name="password">
                                        <span> <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i> </span>
                                        <br>
                                        <button class="log-in" type="submit" name="login"> Se Connecté </button>
                                  </div>
                          </div>
                    </form>

                
        </div>
        <!-- <div class="modal-footer mr-auto">
          <!-- <div class="row">
            <div class="col">
              <input type="submit" name="login" class="btn btn-success btn-block" value="Login">
            </div>
          </div> -->
        </div> -->
    <!-- </form> -->

      </div>
    </div>
  </div>