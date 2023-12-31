<?php

use Valitron\Validator;

require_once __DIR__ . '/configs/settings.php';

$title = 'HOME';

if (isset($_POST['send-message'])) {
  $data = load(['message']);
  $validator = new Validator($data);
  $validator->rules([
    'required' => ['message'],
  ]);

  if ($validator->validate()) {
    if (saveMessage($data)) {
      redirect('index.php');
    }
  } else {
    $_SESSION['errors'] = get_errors($validator->errors());
  }
}

if (isset($_POST['edit-message'])) {
  $data = load(['message', 'id', 'page']);
  $validator = new Validator($data);
  $validator->rules([
    'required' => ['message', 'id'],
    'integer' => ['id', 'page'],
  ]);

  if ($validator->validate()) {
    if (editMessage($data)) {
      redirect("index.php?page={$data['page']}#card-{$data['id']}");
    }
  } else {
    $_SESSION['errors'] = get_errors($validator->errors());
  }
}

if (isset($_GET['do']) && $_GET['do'] == 'toggle-status') {
  $id = $_GET['id'] ?? 0;
  $status = isset($_GET['status']) ? (int)$_GET['status'] : 0;
  toggleMessageStatus($status, $id);
  $page = isset($_GET['page']) ? '?page=' . (int)$_GET['page'] : '?page = 1';
  redirect("index.php{$page}#card-{$id}");
}

$page = $_GET['page'] ?? 1;
$per_page = 5;
$total = getCountMessages();
$pagination = new Pagination((int) $page, $per_page, $total);
$start = $pagination->getStart();
$messages = getMessage($start, $per_page);



require_once __DIR__ . '/view/templates/home.tpl.php';
