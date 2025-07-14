<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio - Baptiste Lecaudey</title>

  <!-- Bootstrap CSS -->
  

  <link rel="stylesheet" href="/blog-portfolio/public/assets/css/aos.css">
  <link rel="stylesheet" href="/blog-portfolio/public/assets/css/line-awesome.min.css">
  
  <!-- Ton CSS personnalisé compilé via Sass -->
  <link rel="stylesheet" href="/blog-portfolio/public/assets/css/style.css">

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">

            <!-- MOBILE TOP BAR (Logo + Connexion + Burger) -->
            <div class="d-lg-none d-flex align-items-center justify-content-end w-100 gap-2 mb-2">
                
                <!-- Nom ou logo -->
                <a class="navbar-brand m-0 me-auto" href="<?= BASE_URL ?>?url=home/index">
                    <span class="h5 fw-bold mb-0">Portfolio - NOM</span>
                </a>

                <!-- Icône ADMIN pour mobile -->
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') : ?>
                    <a href="<?= BASE_URL ?>?url=article/adminIndex" class="text-white fs-4 me-2">
                        <i class="las la-cog"></i> <!-- ou "la-cog", "la-tools", selon le style -->
                    </a>
                <?php endif; ?>

                <!-- Connexion/Déconnexion -->
                <div class="d-flex align-items-center gap-2">
                    <?php if (!isset($_SESSION['user'])) : ?>
                        <a href="/blog-portfolio/public/?url=auth/login" class="btn btn-link text-white fs-4 p-0">
                            <i class="las la-sign-in-alt"></i>
                        </a>
                    <?php else : ?>
                        <form action="/blog-portfolio/public/?url=auth/logout" method="post" class="m-0 p-0">
                            <button type="submit" class="btn btn-link text-light fs-4 p-0">
                                <i class="las la-sign-out-alt"></i>
                            </button>
                        </form>
                    <?php endif; ?>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            
            <!-- IMAGE POUR DESKTOP UNIQUEMENT -->
            <a class="navbar-brand mx-lg-auto mb-lg-4 d-none d-lg-block" href="#">
                <img src="/blog-portfolio/public/assets/images/person.jpg" alt="" class="rounded-circle" />
            </a>

            <!-- MENU NAVIGATION -->        
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= sectionLink('accueil') ?>">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= sectionLink('services') ?>">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= sectionLink('projets') ?>">PROJETS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= sectionLink('about') ?>">À PROPOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= sectionLink('blog') ?>">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= sectionLink('contact') ?>">CONTACT</a>
                    </li>

                </ul>
            </div>

            <!-- DESKTOP ONLY: Lien vers interface admin -->
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') : ?>
                <div class="mb-2 text-center d-none d-lg-block">
                    <a href="<?= BASE_URL ?>?url=admin/index" class="text-white text-decoration-none">
                        <i class="las la-cog me-1"></i> Admin
                    </a>
                </div>
            <?php endif; ?>       

            <!-- DESKTOP ONLY: Connexion/Déconnexion bouton en bas -->        
            <div class="mt-auto mb-4 px-3 w-100 d-none d-lg-block">
                <?php if (!isset($_SESSION['user'])) : ?>
                    <a href="/blog-portfolio/public/?url=auth/login" class="btn btn-outline-light w-100">Connexion</a>
                <?php else : ?>
                    <form action="/blog-portfolio/public/?url=auth/logout" method="post">
                        <button type="submit" class="btn btn-outline-light w-100">Déconnexion</button>
                    </form>
                <?php endif; ?>
            </div>

        </div>
    </nav>

