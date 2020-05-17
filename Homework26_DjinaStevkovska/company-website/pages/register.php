<div class="container" style="margin-top: 70px !important;">
    <div class="row">
      <div class="col-md-3 col-sm-12"></div>
      <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
        <div class="form">
          <div class="text-center py-4">
            <i class="fas fa-user-circle fa-3x"></i></div>
          <h3 style="text-align: center" class="pb-4">REGISTER</h3>
          <form method="POST" class="form-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
            <br>
            <input type="text" class="form-control" name="id" id="id" placeholder="Enter ID">
            <br>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
            <br>
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">

            <div class="text-right mt-0"><a href="index.php?page=login" class="btn btn-default small">Have an account? Log in</a></div>
            <button class="btn btn-primary btn-block" name="register">REGISTER</button>
            <?php
            // if ($REGISTERED === true) {
            //     echo "<div class='text-center mt-3 text-danger font-weight-bold'>Your account is already in our system!</div>";
            // }    
            ?>
          </form>
        </div>
      </div>
      <div class="col-md-3 col-sm-12"></div>
    </div>
  </div>
