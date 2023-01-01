<?php
require_once 'config.php';
$conn = new \mysqli(DATABASE['host'],DATABASE['username'],DATABASE['password'],DATABASE['db_name']);