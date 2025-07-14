<?php require_once __DIR__ . '/../../partials/header.php'; ?>

<section class="full-height px-lg-5 d-flex align-items-center">
    <div class="container">

        <div class="mb-3">
            <a href="<?= $_SERVER['HTTP_REFERER'] ?? BASE_URL ?>" class="text-decoration-none text-white">
                <i class="las la-arrow-left me-2"></i> Retour
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="bg-base p-5 rounded-4 shadow">
                    <h2 class="text-center mb-4">Modifier le projet</h2>

                    <?php if (!$project) : ?>
                        <div class="container py-5">
                            <div class="alert alert-danger text-center">
                                Projet introuvable.
                            </div>
                        </div>
                    <?php else : ?>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="title" class="form-label">Titre</label>
                                <input type="text" name="title" id="title" class="form-control" value="<?= htmlspecialchars($project['title']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">URL Image</label>
                                <input type="text" name="image" id="image" class="form-control" value="<?= htmlspecialchars($project['image']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" rows="6" class="form-control" required><?= htmlspecialchars($project['description']) ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="link" class="form-label">Lien</label>
                                <input type="url" name="link" id="link" class="form-control" value="<?= htmlspecialchars($project['link']) ?>">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-brand">Enregistrer les modifications</button>
                            </div>
                        </form>
                    <?php endif; ?>

                </div>

            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>