<?php
require_once __DIR__ . '/configs/db.php';
require_once __DIR__ . '/functions/helpers.php';
?>

<?php
require_once __DIR__ . '/view/templates/header.php';
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 mb-4">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    <form action="" class="mb-5">
      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 100px;"></textarea>
        <label for="message">Comments</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr class="mb-5">
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card mb-3">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">User 1</h5>
            <p class="message-created">2023-11-20 12:10</p>
          </div>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="card-actions mt-3">
            <ul class="list-group list-group-horizontal mb-3">
              <li class="list-group-item"><a href="#" class="action">Disable</a></li>
              <li class="list-group-item"><a href="#" class="action">Approve</a></li>
              <li class="list-group-item"><a href="#collapse-1" class="action" data-bs-toggle="collapse">Edit</a></li>
            </ul>
            <div class="collapse" id="collapse-1">
              <form action="">
                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="message-1" style="height: 100px;"></textarea>
                  <label for="message-1">Comments</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">User 2</h5>
            <p class="message-created">2023-11-20 12:10</p>
          </div>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="card-actions mt-3">
            <ul class="list-group list-group-horizontal mb-3">
              <li class="list-group-item"><a href="#" class="action">Disable</a></li>
              <li class="list-group-item"><a href="#" class="action">Approve</a></li>
              <li class="list-group-item"><a href="#collapse-2" class="action" data-bs-toggle="collapse">Edit</a></li>
            </ul>
            <div class="collapse" id="collapse-2">
              <form action="">
                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="message-2" style="height: 100px;"></textarea>
                  <label for="message-2">Comments</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<?php
require_once __DIR__ . '/view/templates/footer.php';
?>