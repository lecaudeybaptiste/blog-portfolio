<?php

class Controller
{
    public function render($view, $data = [])
    {
        extract($data);
        require_once __DIR__ . '/../app/views/' . $view . '.php';
    }

    protected function isAdmin() {

        return isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin';
    }
}

function sectionLink(string $anchor): string {
    $isOnHomePage = isset($_GET['url']) && $_GET['url'] === 'home/index';
    $base = BASE_URL;
    return $isOnHomePage ? "#$anchor" : "$base?url=home/index#$anchor";
}