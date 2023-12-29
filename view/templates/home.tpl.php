<?php
require_once __DIR__ . '/header.tpl.php';
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 mb-4">
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
    <?php if (checkAuth()) : ?>
      <form action="" class="mb-5" method="post">
        <div class="form-floating mb-3">
          <textarea name="message" class="form-control" placeholder="Leave a comment here" id="message" style="height: 100px;"></textarea>
          <label for="message">Comments</label>
        </div>
        <button name="send-message" type="submit" class="btn btn-primary">Submit</button>
      </form>
    <?php endif; ?>
  </div>

  <div class="row row-card">
    <div class="col-12">
      <?php if (!empty($messages)) : ?>
        <?php foreach ($messages as $message) : ?>
          <div class="card mb-5 <?= !$message['status'] ? 'border-danger' : '' ?>" id="card-<?= $message['id'] ?>">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title"><?= $message['name'] ?></h5>
                <p class="message-created"><?= $message['date'] ?></p>
              </div>
              <p class="card-text"><?= nl2br(htmlsc($message['text'])) ?></p>
              <?php if (checkAdmin()) : ?>
                <div class="card-actions mt-3">
                  <ul class="list-group list-group-horizontal mb-3">
                    <?php if ($message['status'] == 1): ?>
                    <li class="list-group-item"><a href="?page=<?= $page ?>&do=toggle-status&status=0&id=<?= $message['id']?>" class="action">Disable</a></li>
                    <?php elseif ($message['status'] == 0): ?>
                    <li class="list-group-item"><a href="?page=<?= $page ?>&do=toggle-status&status=1&id=<?= $message['id']?>" class="action">Approve</a></li>
                    <?php endif ?>
                    <li class="list-group-item"><a href="#collapse-<?= $message['id'] ?>" class="action" data-bs-toggle="collapse">Edit</a></li>
                  </ul>
                  <div class="collapse" id="collapse-<?= $message['id'] ?>">
                    <form action="" method="post">
                      <div class="form-floating mb-3">
                        <textarea name="message" class="form-control" placeholder="Leave a comment here" id="message-<?= $message['id'] ?>" style="height: 100px;">
                          <?= nl2br(htmlsc($message['text'])) ?>
                        </textarea>
                        <label for="message-<?= $message['id'] ?>">Comments</label>
                      </div>
                      <input type="hidden" name="id" value="<?= $message['id'] ?>">
                      <input type="hidden" name="page" value="<?= $_GET['page'] ?>">
                      <button name="edit-message" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <p class=" fs-3 fw-bold text-center text-decoration-underline mb-5">No messages to show!</p>
      <?php endif; ?>
    </div>
  </div>
  <?php if (!empty($messages)) : ?>
    <div class="row row-pagination">
      <div class="col-12">
        <?= $pagination ?>
      </div>
    </div>
  <?php endif; ?>
</div>

<?php
require_once __DIR__ . '/footer.tpl.php';
?>