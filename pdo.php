<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=martian_db','root','');
//$pdo = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;port=3306;dbname=heroku_c7243868a1cfbc5','b0619cf97aec22', 'ffe7c656');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);