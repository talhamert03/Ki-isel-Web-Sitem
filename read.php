<?php
include 'config.php';
$sql = "SELECT * FROM users";


$stmt = $pdo ->query($sql);


$users = $stmt ->fetchAll();


foreach ($users as $user) {
    echo "Kullanıcı Adı: " . $user['username'] . "<br>";
    echo "E-posta: " . $user['email']. "<br>";
    echo "----------------------------------<br>";

}
?>