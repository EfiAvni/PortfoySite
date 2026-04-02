<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function database(){
        
    }

    public function dashboard()
    {
    if (!session()->has('user_id')) {
        return redirect()->route('login');
    }

    $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');

    if ($connection->connect_errno > 0) {
        die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
    }

    $projectQuery = $connection->query("SELECT COUNT(*) as project_count FROM projects");
    $project_count = $projectQuery->fetch_assoc()['project_count'];

    $messageQuery = $connection->query("SELECT COUNT(*) as message_count FROM contactMessages");
    $message_count = $messageQuery->fetch_assoc()['message_count'];

    $last3Query = $connection->query("SELECT name, subject FROM contactMessages ORDER BY created_at DESC LIMIT 3;");
    $messages = $last3Query->fetch_all(MYSQLI_ASSOC);

    $last1hourCountQuery = $connection->query("SELECT COUNT(*) as last1hourmessages FROM contactMessages WHERE created_at >= NOW() - INTERVAL 1 HOUR");
    $last1hourMessagesCount = $last1hourCountQuery->fetch_assoc()['last1hourmessages'];

    // SELECT COUNT(*) as last1hourmessages FROM contactMessages WHERE created_at >= NOW() - INTERVAL 1 HOUR;

    $connection->close();

    return view('dashboard', compact('project_count', 'message_count', 'messages', 'last1hourMessagesCount'));
    }
}
