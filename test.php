<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

require_once __DIR__ . '/model/model.php';

$bookConnection = new book();
$result = $bookConnection->selectById(1);
var_dump($result);