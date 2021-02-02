<?php
$mail = filter_var(trim($_POST['mail']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'nitrix');
$result = $mysql->query("SELECT * FROM `test` WHERE `email` = $mail AND `pass`= $pass");
$users = $result->fetch_assoc();
if (count($users)==0) {
    echo "Такой пользователь не найден";
    exit;
}

setcookie('user', $user['mail'], time()+ 3600 * 24, "/");

$mysql->close();
?>
