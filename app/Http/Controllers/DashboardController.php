<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function dashboard()
    {
    if (!session()->has('user_id')) {
        return redirect()->route('login');
    }

    $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');

    if ($connection->connect_errno > 0) {
        die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
    }

    // 🔹 Proje sayısı
    $projectQuery = $connection->query("SELECT COUNT(*) as project_count FROM projects");
    $project_count = $projectQuery->fetch_assoc()['project_count'];

    // 🔹 Mesaj sayısı
    $messageQuery = $connection->query("SELECT COUNT(*) as message_count FROM contactMessages");
    $message_count = $messageQuery->fetch_assoc()['message_count'];

    $connection->close();

    return view('dashboard', compact('project_count', 'message_count'));
    }
}
