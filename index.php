<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GuestBook :: Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hello, User
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">LogOut</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>