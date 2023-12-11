<?php
require_once __DIR__ . '/configs/settings.php';

$title = 'Login';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $data = load(['email', 'password']);

  $validator = new Valitron\Validator($data);

  $validator->rules([
    'required' => ['email', 'password'],
    'email' => ['email'],
  ]);

  if ($validator->validate()) {
    if (login($data)) {
      $_SESSION['success'] = "{$_SESSION['user']['name']} successfully logged in!";
      redirect('index.php');
    }
  } else {
    redirect('login.php');
  }
}

require_once __DIR__ . '/view/templates/login.tpl.php';
