<?php

ini_set('display_errors', 1); //エラーの表示


//DB 接続のための準備
define('DSN', 'mysql:host=localhost;dbname=dotinstall_sns_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'mu4uJsif');

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

//セッションを開始する
session_start();