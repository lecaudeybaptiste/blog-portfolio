<?php require_once __DIR__ . '/../partials/header.php'; ?>

<section class="full-height d-flex justify-content-center align-items-center">
    <form method="POST" class="bg-base p-5 rounded-4 shadow w-100" style="max-width: 500px;">
        <h2 class="text-center mb-4">Inscription</h2>

        <?php if (!empty($error)) : ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <div class="form-group mb-3">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Adresse email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group mb-3">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group mb-4">
            <label for="confirm_password">Confirmer le mot de passe</label>
            <input type="password" class="form-control" name="confirm_password" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-brand">S'inscrire</button>
        </div>
    </form>
</section>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>