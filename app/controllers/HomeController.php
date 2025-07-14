<?php

class HomeController extends Controller {

    public function index() {
        
        $articleModel = new Article();
        $projectModel = new Project();

        // On récupère 3 articles et 3 projets
        $articles = $articleModel->getLast(3);
        $projects = $projectModel->getLast(3);

        $this->render('home', [
            'articles' => $articles,
            'projects' => $projects
        ]);
    }
}