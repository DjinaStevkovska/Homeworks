<?php
if (isset($_COOKIE['username'])) {
  setcookie("username", $_COOKIE["username"], time() - 360);
  header("Location: index.php?page=login");
}
?>
  <div class="container" style="margin-top: 70px !important;">
    <div class="row">
      <div class="col-md-3 col-sm-12"></div>
      <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
        <div class="form">
          <div class="text-center py-4">
            <i class="fas fa-user-circle fa-3x"></i></div>
          <h3 style="text-align: center" class="pb-4">LOGIN</h3>
          <form method="POST" class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Enter username">
            <br>
            <input type="password" class="form-control" name="pass" placeholder="Enter password">

            <div class="text-right mt-0"><a href="index.php?page=register" class="btn btn-default small">Create an account</a></div>
            <button class="btn btn-primary btn-block" name="login">LOGIN</button>
          </form>
        </div>
      </div>
      <div class="col-md-3 col-sm-12"></div>
    </div>
  </div>
