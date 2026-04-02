<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function contact()
    {
        $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');

        if ($connection->connect_errno > 0) {
            echo "Veritabanı bağlantısı başarısız.";
            die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
        }

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $query = $connection->prepare("INSERT INTO contactMessages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $query->bind_param("ssss", $name, $email, $subject, $message);
        $query->execute();

        $connection->close();

        return redirect()->to(route('anasayfa') . '#iletisim')
                 ->with('mesaj', 'Mesajınız başarıyla gönderildi!');
    }

    public function messages()
    {
        $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');
        if ($connection->connect_errno > 0) {
            echo "Veritabanı bağlantısı başarısız.";
            die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
        }

        $query = $connection->prepare("SELECT * FROM contactMessages");
        $query->execute();
        
        $gelenler = $query->get_result();

        $messages = array();
        while ($row = $gelenler->fetch_assoc()) {
            $messages[] = $row;
        }
        
        $connection->close();

        return view('contactMessages', ['tumMesajlar' => $messages]);
    }

    public function messageCount()
    {
        $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');
        if ($connection->connect_errno > 0) {
            echo "Veritabanı bağlantısı başarısız.";
            die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
        }

        $query = $connection->prepare("SELECT COUNT(*) as message_count FROM contactMessages");
        $query->execute();
        $result = $query->get_result();
        $message_count = $result->fetch_assoc()['message_count'];

        $connection->close();

        return view('dashboard', compact('message_count'));
    }
}
