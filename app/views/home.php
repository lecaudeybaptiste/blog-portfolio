<?php require_once __DIR__ . '/partials/header.php'; ?>

<?php if (isset($_SESSION['success'])) : ?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1055;">
        <div class="toast align-items-center text-bg-success border-0 show" role="alert">
            <div class="d-flex">
                <div class="toast-body">
                    <?= $_SESSION['success'] ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Fermer"></button>
            </div>
        </div>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

    <div id="content-wrapper">

        <section id="accueil" class="full-height px-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold">BIENVENUE, JE SUIS <span class="text-brand">DÉVELOPPEUR WEB</span>...</h1>
                        <p class="lead mt-2 mb-4">Je conçois des sites web modernes, performants et sur-mesure pour aider les indépendants et entrepreneurs à se démarquer en ligne.</p>
                        <div>
                            <a href="#projets" class="btn btn-brand me-3"> Mes Projets</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4">
                    <div class="col-lg-8">
                        <h6 class="text-brand">SERVICES</h6>
                        <h1>Services Proposés</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-feather"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Identité visuelle</h5>
                            <p>Création d’univers de marque cohérent, moderne et mémorable pour vous démarquer efficacement.</p>
                            <a href="#" class="link-custom">En savoir plus</a>
                        </div>
                    </div>
                
                    <div class="col-md-4">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-pencil-ruler"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Site vitrine</h5>
                            <p>Création de sites modernes, responsive et adaptés à votre activité.</p>
                            <a href="#" class="link-custom">En savoir plus</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="las la-laptop-code"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Référencement naturel (SEO)</h5>
                            <p>Optimisation de votre site pour améliorer sa visibilité sur Google et générer un trafic qualifié.</p>
                            <a href="#" class="link-custom">En savoir plus</a>
                        </div>
                    </div>


                </div>



            </div>    

        </section>

        <section id="projets" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4">
                    <div class="col-lg-8">
                        <h6 class="text-brand">WORK</h6>
                        <h1>Mes derniers projets.</h1>
                    </div>
                </div>

                <div class="row gy-4">
                    <?php foreach ($projects as $project): ?>
                        <div class="col-md-6">
                            <div class="card-custom rounded-4 bg-base shadow-effect">
                                <div class="card-custom-image rounded-4">
                                    <img src="<?= htmlspecialchars($project['image']) ?>" alt="" class="rounded-4">
                                </div>
                                <div class="card-custom-content p-4">
                                    <h4><?= htmlspecialchars($project['title']) ?></h4>
                                    <p><?= htmlspecialchars($project['description']) ?></p>
                                    <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="link-custom">Voir le projet</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="about" class="full-height px-lg-5">
            <div class="container">
                <div class="row pb-4">
                <div class="col-lg-8">
                    <h6 class="text-brand">À PROPOS</h6>
                    <h1>Apprenez à me connaître</h1>
                </div>
                </div>

                <div class="row gy-4">
                <div class="col-lg-6">
                    <p>Je suis <strong>Baptiste Lecaudey</strong>, développeur web passionné par la création de sites modernes, performants et centrés utilisateur.</p>
                    <p>Après plusieurs expériences en marketing digital et en gestion de projets, je me suis spécialisé dans le développement web pour proposer des solutions sur mesure aux indépendants, TPE et porteurs de projet.</p>
                    <p>Mon objectif ? Créer des sites clairs, efficaces et optimisés qui répondent aux vrais besoins terrain.</p>
                </div>

                <div class="col-lg-6">
                    <ul class="list-unstyled">
                    <li><i class="las la-check-circle me-2 text-brand"></i>Développement sur-mesure HTML / CSS / PHP / MySQL</li>
                    <li><i class="las la-check-circle me-2 text-brand"></i>Sites responsive et optimisés SEO</li>
                    <li><i class="las la-check-circle me-2 text-brand"></i>Intégration de maquettes et design épuré</li>
                    <li><i class="las la-check-circle me-2 text-brand"></i>Conseils pour améliorer la visibilité en ligne</li>
                    </ul>
                </div>
                </div>
            </div>
        </section>

        <section id="blog" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4">
                    <div class="col-lg-8">
                        <h6 class="text-brand">BLOG</h6>
                        <h1>Derniers articles</h1>
                    </div>
                </div>

                <div class="row gy-4">
                    <?php foreach ($articles as $article): ?>
                        <div class="col-md-4">
                            <div class="card-custom rounded-4 bg-base shadow-effect">
                                <div class="card-custom-image rounded-4">
                                    <img src="/blog-portfolio/public/assets/images/<?= htmlspecialchars($article['image']) ?>" alt="" class="rounded-4">
                                </div>
                                <div class="card-custom-content p-4">
                                    <p class="text-brand mb-2"><?= date('d/m/Y', strtotime($article['created_at'])) ?></p>
                                    <h5 class="mb-4"><?= htmlspecialchars($article['title']) ?></h5>
                                     <a href="<?= BASE_URL ?>?url=article/show&id=<?= $article['id'] ?>" class="link-custom">Lire l'article</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="contact" class="full-height px-lg-5">
            <div class="container">

                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 pb-4">
                        <h6 class="text-brand">CONTACT</h6>
                        <h1>Intéressé pour travailler ensemble ?</h1>
                    </div>

                    <div class="col-lg-8">
                        <form action="#" class="row g-lg-3 gy-3">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" placeholder="Titre">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="" rows="4" class="form-control" placeholder="Votre message.."></textarea>
                            </div>
                            <div class="form-group col-12 d-grid">
                                <button type="submit" class="btn btn-brand"> Contactez-moi</button>
                            </div>
                        </form>
                    </div>

                </div>
                
            </div>
        </section>



    </div>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
