<?php require_once __DIR__ . '/../partials/header.php'; ?>

<section class="full-height px-lg-5 d-flex align-items-center">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="bg-base p-5 rounded-4 shadow text-center">
                    <h2 class="mb-4">Panneau d’administration</h2>
                    <p class="mb-5">Bienvenue, vous pouvez gérer les contenus de votre site depuis cette interface.</p>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="bg-dark p-4 rounded-4 shadow-sm h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <h4><i class="las la-pen-nib me-2"></i>Articles</h4>
                                    <p class="text-muted">Ajoutez, modifiez ou supprimez vos articles de blog.</p>
                                </div>
                                <a href="<?= BASE_URL ?>?url=article/adminIndex" class="btn btn-brand mt-3">Gérer les articles</a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-dark p-4 rounded-4 shadow-sm h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <h4><i class="las la-project-diagram me-2"></i>Projets</h4>
                                    <p class="text-muted">Ajoutez, modifiez ou supprimez vos projets dans le portfolio.</p>
                                </div>
                                <a href="<?= BASE_URL ?>?url=project/adminIndex" class="btn btn-brand mt-3">Gérer les projets</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>