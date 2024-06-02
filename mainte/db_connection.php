<?php

const DB_HOST = 'mysql:dbname=udemy_php;host=127.0.0.1;charset=utf8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'ywhg5fN8';


//例外処理Exception
try{
  $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //連想配列で返す
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //例外
    PDO::ATTR_EMULATE_PREPARES => false, //SQLインジェクション対策・・・フォーム内にクエリ入れてDBの値を表示するのを防ぐ
  ]);
  echo '接続成功';
}catch(PDOException $e){
  echo '接続失敗' . $e->getMessage() . "\n";
  exit();
}
