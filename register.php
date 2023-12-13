<?php
require_once __DIR__ . '/configs/settings.php';

if (checkAuth()) {
  redirect('index.php');
}

$title = 'Register';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data = load(['name', 'email', 'password']);
  $validator = new Valitron\Validator($data);
  $validator->rules([
    'required' => ['name', 'email', 'password'],
    'email' => ['email'],
    'lengthMin' => [
      ['password', 6]
    ],
    'lengthMax' => [
      ['name', 100],
      ['email', 100]
    ]
  ]);
  if ($validator->validate()) {
    if (register($data)) {
      redirect('login.php');
    }
  } else {
    $_SESSION['errors'] = get_errors($validator->errors());
  }
}

require_once __DIR__ . '/view/templates/register.tpl.php';