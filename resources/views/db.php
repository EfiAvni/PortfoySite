<?php

    //veritabanı bağlantısı
    $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');
        
    if ($connection->connect_errno > 0) {
        die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
    }

    echo "MySQL bağlantısı başarıyla gerçekleştirildi.";    



    //veritabanından veri çekme
    $query = $connection->query("SELECT password FROM `users` WHERE email = 'mavni3446@gmail.com'");

    $row = mysqli_fetch_assoc($query);

    $passwd = $row["password"];

    echo $passwd;
    
    $connection->close();

