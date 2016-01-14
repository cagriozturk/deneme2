<?php
try {
     $pdo = new PDO("mysql:host=localhost;dbname=netlise;charset=utf8;", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>