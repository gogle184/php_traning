<?php
$contactFile = '.contact.dat';
//ファイル丸ごと読み込み
$fileContents = file_get_contents($contactFile);
//echo $fileContents;

//書き込み（全て上書き）
// file_put_contents($contactFile, 'テストだよ');

//書き込み（追記）
file_put_contents($contactFile, 'テストだよ', FILE_APPEND);
