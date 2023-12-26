<?php

function dump(array|object $data): void
{
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

function load(array $fillable, $post = true): array
{
  $load_data = $post ? $_POST : $_GET;
  $data = [];
  foreach ($fillable as $field) {
    if (isset($load_data[$field])) {
      $data[$field] = trim($load_data[$field]);
    } else {
      $data[$field] = '';
    }
  }
  return $data;
}

function get_errors(array $errors): string
{
  $html = '<ul class="list-unstyled">';
  foreach ($errors as $error_group) {
    foreach ($error_group as $error) {
      $html .= "<li>{$error}</li>";
    }
  }
  $html .= '</ul>';
  return $html;
}

function redirect(string $url = ''): never
{
  header("location: {$url}");
  exit();
}

function htmlsc(string $s): string
{
  return htmlspecialchars($s, ENT_QUOTES);
}

function old(string $field, $post = true): string
{
  $load_data = $post ? $_POST : $_GET;
  return isset($load_data[$field]) ? htmlsc($load_data[$field]) : '';
}

function register(array $data): bool
{
  global $dbh;
  $stmt = $dbh->prepare("SELECT COUNT(*) FROM `users` WHERE email = ?");
  $stmt->execute([$data['email']]);
  if ($stmt->fetchColumn()) {
    $_SESSION['errors'] = 'This email is already in used!';
    return false;
  };

  $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
  $stmt = $dbh->prepare("INSERT INTO `users` (name, email, password) VALUES (:name, :email, :password)");
  $stmt->execute($data);
  $_SESSION['success'] = 'You have successfully registered!';
  return true;
}

function login(array $data): bool
{
  global $dbh;
  $stmt = $dbh->prepare("SELECT * FROM `users` WHERE email = ?");
  $stmt->execute([$data['email']]);
  if ($row = $stmt->fetch()) {
    if (!password_verify($data['password'], $row['password'])) {
      $_SESSION['errors'] = 'Wrong email or password!';
      return false;
    }
  } else {
    $_SESSION['errors'] = 'Wrong email or password!';
    return false;
  }

  foreach ($row as $key => $value) {
    if ($key != 'password') {
      $_SESSION['user'][$key] = $value;
    }
  }
  return true;
}

function checkAuth(): bool
{
  return isset($_SESSION['user']);
}

function checkAdmin(): bool
{
  return isset($_SESSION['user']) && $_SESSION['user']['role'] == 2;
}

function saveMessage(array $data): bool
{
  global $dbh;
  if (!checkAuth()) {
    $_SESSION['errors'] = 'Login is required';
    return false;
  }

  $stmt = $dbh->prepare("INSERT INTO messages (user_id, text) VALUES (?, ?)");
  $stmt->execute([$_SESSION['user']['id'], $data['message']]);
  $_SESSION['success'] = 'Message successfully added!';
  return true;
}

function getMessage(): array
{
  global $dbh;
  $where = '';
  if (!checkAdmin()) {
    $where = 'WHERE status = 1';
  }
  $stmt = $dbh->prepare("SELECT * FROM messages {$where}");
  $stmt->execute();
  return $stmt->fetchAll();
}