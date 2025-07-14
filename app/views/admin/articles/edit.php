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
                    <h2 class="text-center mb-4">Modifier l’article</h2>

                    <?php if (!$article) : ?>
                        <div class="container py-5">
                            <div class="alert alert-danger text-center">
                                Article introuvable.
                            </div>
                        </div>
                    <?php else : ?>

                        <form method="POST">
                            <div class="mb-3">
                                <label for="title" class="form-label">Titre</label>
                                <input type="text" name="title" id="title" class="form-control" value="<?= htmlspecialchars($article['title']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">URL Image</label>
                                <input type="text" name="image" id="image" class="form-control" value="<?= htmlspecialchars($article['image']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Contenu</label>
                                <textarea name="content" id="content" rows="8" class="form-control" required><?= htmlspecialchars($article['content']) ?></textarea>
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