<?php
require_once __DIR__ . '/header.tpl.php';
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3 mb-3">
      <?php if (isset($_SESSION['errors'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>
            <?php
            echo $_SESSION['errors'];
            unset($_SESSION['errors']);
            ?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form action="" method="post">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
          <label for="email">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
      </form>
    </div>
  </div>
</div>

<?php
require_once __DIR__ . '/footer.tpl.php';
?>