 <div class="modal fade animated bounceIn fast" id="ModalLog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="modalDialog" role="document">
    <div class="modal-content" id="modalContent">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: yellowgreen;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                
            <form>
                <div class="form-group">
                    <label for="email_signIn">Nombre de usuario: </label>
                    <input type="text" class="form-control" id="email_signIn" aria-describedby="emailHelp" placeholder="Usuario">
                    <small id="textHelp" class="form-text text-muted">.</small>
                </div>
        <!-- 
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre y Apellido: </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email: </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> -->

                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
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

