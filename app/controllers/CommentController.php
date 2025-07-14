<?php

class CommentController extends Controller
{
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user'])) {
            $commentModel = new Comment();
            $success = $commentModel->create(
                $_POST['article_id'],
                $_SESSION['user']['id'],
                $_POST['content']
            );

            header('Location: ' . BASE_URL . '?url=article/show&id=' . $_POST['article_id']);
            exit;
        } else {
            header('Location: ' . BASE_URL . '?url=auth/login');
            exit;
        }
    }
}