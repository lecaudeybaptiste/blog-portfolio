<?php

class ArticleController extends Controller
{
    public function show()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            http_response_code(404);
            echo "Article introuvable.";
            return;
        }

        $articleModel = new Article();
        $commentModel = new Comment();

        $article = $articleModel->find($id);
        $comments = $commentModel->findAllByArticle($id);

        if (!$article) {
            http_response_code(404);
            echo "Article introuvable.";
            return;
        }

        $this->render('article/show', [
            'article' => $article,
            'comments' => $comments,
        ]);
    }

    public function adminIndex() {
        
        if (!$this->isAdmin()) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $articleModel = new Article();

        $perPage = 6;
        $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($currentPage - 1) * $perPage;

        $articles = $articleModel->getPaginated($perPage, $offset);
        $totalArticles = $articleModel->countAll();
        $totalPages = ceil($totalArticles / $perPage);

        $this->render('admin/articles/index', [
            'articles' => $articles,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages
        ]);
    }

    public function create() {

        if (!$this->isAdmin()) {
            header('Location: ' . BASE_URL);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $article = new Article();
            $article->create($_POST); // il faudra sécuriser et valider
            $_SESSION['success'] = "Article ajouté avec succès.";
            header('Location: ' . BASE_URL . '?url=article/adminIndex');
            exit;
        }

        $this->render('admin/articles/create');
    }

    public function edit() {

        if (!$this->isAdmin()) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $articleModel = new Article();
        $article = $articleModel->find($_GET['id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $articleModel->update($_GET['id'], $_POST);
            $_SESSION['success'] = "Article modifié.";
            header('Location: ' . BASE_URL . '?url=article/adminIndex');
            exit;
        }

        $this->render('admin/articles/edit', ['article' => $article]);
    }

    public function delete() {
        if (!$this->isAdmin()) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $article = new Article();
        $article->delete($_GET['id']);
        $_SESSION['success'] = "Article supprimé.";
        header('Location: ' . BASE_URL . '?url=article/adminIndex');
        exit;
    }
}