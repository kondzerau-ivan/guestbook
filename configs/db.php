<?php

$db = [
  'host' => 'localhost',
  'user' => 'root',
  'password' => '',
  'name' => 'guestbook',
];

$options = [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

$dsn = "mysql:dbname={$db['name']};host={$db['host']};charset=utf8";

$dbh = new PDO($dsn, $db['user'], $db['password'], $options);