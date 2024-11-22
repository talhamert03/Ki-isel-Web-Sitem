<?php
include 'config.php';


$user_id = 1;
$new_mail = 'newmail@example.com';


$sql = "UPDATE users SET email = :email WHERE id = :id";


$stmt = $pdo->prepare($sql);


$stmt-> execute( [
    ':email' => $new_mail,
    ':id'    => $user_id,
]);

echo "Kullanıcı E-posta adresi başarıyla güncellendi!";

?>