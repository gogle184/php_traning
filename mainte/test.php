<?php
//パスワードを記録したファイルの場所
echo __FILE__;
///Applications/XAMPP/xamppfiles/htdocs/phptest2/mainte/test.php
//パスワード（暗号化）
echo '<br>';
echo(password_hash('password123', PASSWORD_BCRYPT));
//$2y$10$ajNSevMsYGYm4o628xLj.OjA/lGU86g5uzm9arnr.hVYanoZmxu7e
