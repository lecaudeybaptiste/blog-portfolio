<?php

class ProjectController extends Controller
{
    public function adminIndex() {

        if (!$this->isAdmin()) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $projectModel = new Project();

        // Pagination
        $perPage = 5; // Nombre de projets par page
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($currentPage - 1) * $perPage;

        $projects = $projectModel->findWithPagination($perPage, $offset);
        $total = $projectModel->countAll();
        $totalPages = ceil($total / $perPage);

        $this->render('admin/projects/index', [
            'projects' => $projects,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages
        ]);
    }
    

    public function create()
    {
        if (!$this->isAdmin()) {
            header('Location: ' . BASE_URL);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $project = new Project();
            $project->create($_POST); // à sécuriser/valider selon besoin
            $_SESSION['success'] = "Projet ajouté avec succès.";
            header('Location: ' . BASE_URL . '?url=project/adminIndex');
            exit;
        }

        $this->render('admin/projects/create');
    }

    public function edit()
    {
        if (!$this->isAdmin()) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $projectModel = new Project();
        $project = $projectModel->find($_GET['id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $projectModel->update($_GET['id'], $_POST);
            $_SESSION['success'] = "Projet modifié.";
            header('Location: ' . BASE_URL . '?url=project/adminIndex');
            exit;
        }

        $this->render('admin/projects/edit', ['project' => $project]);
    }

    public function delete()
    {
        if (!$this->isAdmin()) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $project = new Project();
        $project->delete($_GET['id']);
        $_SESSION['success'] = "Projet supprimé.";
        header('Location: ' . BASE_URL . '?url=project/adminIndex');
        exit;
    }

    public function index() {

        $projectModel = new Project();
        $projects = $projectModel->all();

        $this->render('project/index', ['projects' => $projects]);
    }
}