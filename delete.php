<?php
include 'congig.php';


$user_id = 1;


$sql = "DELETE FROM users WHERE id = id";


$stmt = $pdo-> prepare($sql);


$stmt->execute([
    ':id' => $user_id
]);



echo "Kullanıcı başarıyla silindi!";

?>