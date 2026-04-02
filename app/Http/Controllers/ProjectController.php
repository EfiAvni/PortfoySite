<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{

    public function listProjects()
    {
    $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');

    if ($connection->connect_errno > 0) {
        die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
    }

    $projectQuery = $connection->query("SELECT * FROM projects");
    $projects = $projectQuery->fetch_all(MYSQLI_ASSOC);

    $connection->close();

    return view('projects', compact('projects'));
    }
}
