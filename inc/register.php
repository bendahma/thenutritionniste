<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="registerModel" tabindex="-1" role="dialog" aria-labelledby="registerModelTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                     <form method="POST" action="./functions/register.php" >
                            <div class="con">
                                  <header class="head-form">
                                    <h2>Créer un compte</h2>
                                  </header>
                                  <br>
                                  <div class="field-set">
                                        <span class="input-item"> <i class="fas fa-user-alt"></i> </span>
                                        <input class="form-input" id="txt-input" type="text" placeholder="Nom" required name="nom">
                                        <br>    
                                        <span class="input-item"> <i class="fas fa-user-friends"></i> </span>
                                        <input class="form-input" id="txt-input" type="text" placeholder="Prenom" required name="prenom">
                                        <br>    
                                        <span class="input-item"> <i class="fas fa-calendar-week"></i> </span>
                                        <input class="form-input" id="txt-input" type="text" placeholder="Age" required name="age">
                                        <br>  
                                        <span class="input-item"> <i class="fas fa-female"></i> </span>
                                        <select name="sex" id="txt-input" class="form-input" require>
                                            <option value="" selected disabled>Sex</option>
                                            <option value="Homme" >Homme</option>
                                            <option value="Femme" >Femme</option>
                                        </select>
                                        <br>  
                                        <span class="input-item"> <i class="fa fa-user-circle"></i> </span>
                                        <input class="form-input" id="txt-input" type="text" placeholder="@UserName" required name="username">
                                        <br>      
                                        <span class="input-item"> <i class="fa fa-key"></i> </span>
                                        <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required name="password">
                                        <br>
                                        <button type="submit" class="log-in" name="register"> Créer un compte </button>
                                  </div>
                          </div>
                    </form>  
        </div>
      </div>
    </div>
  </div>