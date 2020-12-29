<?php
  require_once('../class/library.php');

?>
<?php include('../includes/menu.php');?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome, Admin</h1>      
            <p>Good Day!!, Happy Stay with Admmi Panel Dashboard..</p>
          </div>

        </div>
      </div>
    </div>

    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Admin Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form method="post">
                  <div class="form-group">
                    <label for="email">
                      Email
                    </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      </div>
                      <input type="email" class="form-control" placeholder="example@gmil.com" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pass">
                      Password
                    </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                      </div>
                      <input type="password" class="form-control" name="pass" id="pass" required>
                    </div>
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">Remember Me
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary" name="btn">Login</button>
                </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            
          </div>

        </div>
      </div>
    </div>
    <?php include('../includes/footer.php');?>
