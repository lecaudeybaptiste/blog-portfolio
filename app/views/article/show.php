<?php require_once __DIR__ . '/../partials/header.php'; ?>

<section class="full-height px-lg-5">
    <div class="container">

        <h1><?= htmlspecialchars($article['title']) ?></h1>
        <p><?= nl2br(htmlspecialchars($article['content'])) ?></p>

        <hr>
        <h3 class="mt-5">Commentaires</h3>

        <?php foreach ($comments as $comment) : ?>
            <div class="mb-3 p-3 bg-base rounded-3 shadow-sm">
                <strong><?= htmlspecialchars($comment['pseudo']) ?></strong><br>
                <?= nl2br(htmlspecialchars($comment['content'])) ?>
            </div>
        <?php endforeach; ?>

        <hr>
        <?php if (isset($_SESSION['user'])) : ?>
            <form action="<?= BASE_URL ?>?url=comment/add" method="POST">
                <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                <div class="mb-3">
                    <textarea name="content" rows="4" class="form-control" placeholder="Votre commentaire..." required></textarea>
                </div>
                <button type="submit" class="btn btn-brand">Envoyer</button>
            </form>
        <?php else : ?>
            <p><a href="<?= BASE_URL ?>?url=auth/login">Connectez-vous</a> pour laisser un commentaire.</p>
        <?php endif; ?>
    </div>
</section>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>