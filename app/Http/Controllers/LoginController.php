<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function login()
    {
        //veritabanı bağlantısı
        $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');
            
        if ($connection->connect_errno > 0) {
            echo "Veritabanı bağlantısı başarısız.";
            die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
        }  

        $email = $_POST["email"];

        //veritabanından veri çekme
        $query = $connection->prepare("SELECT id, password FROM users WHERE email = ?");
        $query->bind_param("s", $email);
        $query->execute();

        $result = $query->get_result();
        $row = $result->fetch_assoc();

        $passwd = $row["password"]; //veritabanından çekilen şifre
        $userId = $row["id"]; //veritabanından çekilen kullanıcı id'si

        if (password_verify($_POST["password"], $passwd)) {
            session(['user_id' => $userId]);
            $connection->close();
            return redirect()->route('dashboard');
        }
        else {
            echo "Giriş başarısız. Lütfen e-posta ve şifrenizi kontrol edin.";
        }
        
        $connection->close();
    }

    public function logout()
    {
        session()->forget('user_id');
        return redirect()->route('login');
    }

}
