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

$page = $_GET['page'] ?? 1;
$per_page = 2;
$total = getCountMessages();
$pagination = new Pagination((int) $page, $per_page, $total);
$start = $pagination->getStart();
$messages = getMessage($start, $per_page);



require_once __DIR__ . '/view/templates/home.tpl.php';
