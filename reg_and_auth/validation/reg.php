<?php
$mail = filter_var(trim($_POST['mail']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if (mb_strlen($mail)<5 || mb_strlen($mail)>90) {
    echo "Недропустимая длина ";
    exit();
}
elseif(mb_strlen($pass)<5 || mb_strlen($pass)>12) {
    echo "Недропустимая длина паролля от 2 до 12 символов";
    exit();
}

$mysql = new mysqli('localhost', 'root', '', 'nitrix');
$mysql->query("INSETR INTO `test` (`email`,`password`) VALUES('$mail','$pass')");

$mysql->close();


?>

