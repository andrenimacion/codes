<div class="modal fade animated bounceIn fast" id="ModalSign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="modalDialog" role="document">
    <div class="modal-content" id="modalContent">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">SignIn</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: yellowgreen;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                
            <form>
                
                <div class="form-group">
                    <label for="user_img">Imagen de usuario: </label>
                    <input type="file" class="form-control" id="user_img" name="user_img" aria-describedby="user_img">
                </div>

                <div class="form-group">
                    <label for="userName">Elige un nombre de usuario: </label>
                    <input type="text" name="userName" class="form-control" id="userName"
                    aria-describedby="emailHelp" placeholder="Nombre de Usuario">
                    <small id="textHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="name">Nombre y Apellido: </label>
                    <input type="text" class="form-control" id="name"
                    name="name" aria-describedby="name"
                    placeholder="Ingrese su nombre y apellido">
                </div>

                <div class="form-group">
                    <label for="Email">Email: </label>
                    <input type="email" class="form-control" id="Email" name="Email" aria-describedby="Email" placeholder="Ingrese un email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                
                <div class="form-group">
                    <label for="repassword">Re - Password: </label>
                    <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Repita su Password">
                </div>

                <button type="submit" class="btn btn-success" id="btnPrim">Entrar</button>
            </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>

