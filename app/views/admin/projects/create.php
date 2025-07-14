<?php require_once __DIR__ . '/../../partials/header.php'; ?>

<section class="full-height px-lg-5 d-flex align-items-center">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="bg-base p-5 rounded-4 shadow">
                    <h2 class="text-center mb-4">Ajouter un projet</h2>

                    <form method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">URL Image</label>
                            <input type="text" name="image" id="image" class="form-control" placeholder="/blog-portfolio/public/assets/images/nom-image.jpg" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" rows="6" class="form-control" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label">Lien (facultatif)</label>
                            <input type="url" name="link" id="link" class="form-control">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-brand">Créer le projet</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>