<?php
require_once __DIR__ . '/configs/db.php';
require_once __DIR__ . '/functions/helpers.php';
?>

<?php
require_once __DIR__ . '/view/templates/header.php';
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3 mb-3">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form action="" method="post">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
      </form>
    </div>
  </div>
</div>



<?php
require_once __DIR__ . '/view/templates/footer.php';
?>