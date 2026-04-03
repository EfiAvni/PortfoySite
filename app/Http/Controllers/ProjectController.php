<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function createProject()
    {
        $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');

        if ($connection->connect_errno > 0) {
            die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
        }

        $title = $_POST["project_title"];
        $category = $_POST["project_category"];
        $status = $_POST["project_status"];
        $link = $_POST["project_url"];
        $image = $_POST["project_image"];
        $description = $_POST["project_description"];


        $query = $connection->prepare("INSERT INTO projects (title, category, status, link, image, description) VALUES (?, ?, ?, ?, ?, ?)");
        $query->bind_param("ssssss", $title, $category, $status, $link, $image, $description);

        if ($query->execute()) {
            $connection->close();
            return redirect()->to(route('projects') . '#proje-ekle')
                             ->with('mesaj', 'Proje başarıyla eklendi!');
        } else {
            $connection->close();
            return redirect()->to(route('anasayfa') . '#proje-ekle')
                             ->with('mesaj', 'Proje eklenirken bir hata oluştu. Lütfen tekrar deneyin.');
        }


    }

    public function listProjects()
    {
        $connection = new \mysqli('127.0.0.1', 'root', '', 'portfoysite');

        if ($connection->connect_errno > 0) {
            die("<b>Bağlantı Hatası:</b> " . $connection->connect_error);
        }

        //count kısmı

        $totalProjectQuery = $connection->query("SELECT COUNT(*) as project_count FROM projects");
        $project_count = $totalProjectQuery->fetch_assoc()['project_count'];

        $onairProjectsCountQuery = $connection->query("SELECT COUNT(*) as onair_count FROM projects WHERE status = 'Yayında'");
        $onair_count = $onairProjectsCountQuery->fetch_assoc()['onair_count'];

        $draftProjectsCountQuery = $connection->query("SELECT COUNT(*) as draft_count FROM projects WHERE status = 'Taslak'");
        $draft_count = $draftProjectsCountQuery->fetch_assoc()['draft_count'];


        //projects kısmı
        $query = $connection->prepare("SELECT * FROM projects");
        $query->execute();

        $gelenler = $query->get_result();

        $projects = array();
        while ($row = $gelenler->fetch_assoc()) {
            $projects[] = $row;
        }

        $connection->close();

        return view('projects', ['projects' => $projects],[
            'project_count' => $project_count,
            'onair_count' => $onair_count,
            'draft_count' => $draft_count
        ]);
    }
}
