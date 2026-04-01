<?php

$password = "ahmet3446"; // kullanıcının gerçek şifresi

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;