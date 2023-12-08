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

function htmlsc(string $s):string
{
  return htmlspecialchars($s, ENT_QUOTES);
}

function old(string $field, $post = true): string
{
  $load_data = $post ? $_POST : $_GET;
  return isset($load_data[$field]) ? htmlsc($load_data[$field]) : '';
}