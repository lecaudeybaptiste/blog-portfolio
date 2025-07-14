<?php require_once __DIR__ . '/../../partials/header.php'; ?>

<section class="full-height px-lg-5 d-flex align-items-center">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="bg-base p-5 rounded-4 shadow">
                    <h2 class="text-center mb-4">Ajouter un nouvel article</h2>

                    <form method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Chemin de l'image (ex: /blog-portfolio/public/assets/images/blog-post-1.png)</label>
                            <input type="text" name="image" id="image" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Contenu</label>
                            <textarea name="content" id="content" rows="8" class="form-control" required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-brand">Publier l’article</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>