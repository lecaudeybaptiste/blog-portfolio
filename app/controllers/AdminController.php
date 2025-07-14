<?php

class AdminController extends Controller {
    // Méthode principale pour accéder au panneau d'administration
    public function index() {
        // Vérifie si l'utilisateur est connecté et a le rôle d'admin
        if (!$this->isAdmin()) {
            // Si l'utilisateur n'est pas admin, rediriger vers la page d'accueil
            header('Location: ' . BASE_URL);
            exit;
        }

        // Affiche la vue admin/index si l'utilisateur est admin
        $this->render('admin/index');
    }
}