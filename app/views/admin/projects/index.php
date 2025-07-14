<?php require_once __DIR__ . '/../../partials/header.php'; ?>

<section class="full-height px-lg-5 d-flex align-items-center">
    <div class="container">

        <div class="mb-3">
            <a href="<?= BASE_URL ?>?url=admin/index" class="text-decoration-none text-white">
                <i class="las la-arrow-left me-2"></i> Admin
            </a>
        </div>

        <div class="row justify-content-between align-items-center mb-4">
            <div class="col">
                <h2 class="text-white">Gestion des projets</h2>
            </div>
            <div class="col-auto">
                <a href="<?= BASE_URL ?>?url=project/create" class="btn btn-brand">+ Nouveau projet</a>
            </div>
        </div>

        <?php if (!empty($projects)) : ?>
            <div class="table-responsive bg-base p-4 rounded-4 shadow">
                <table class="table table-dark table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Lien</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($projects as $project) : ?>
                            <tr>
                                <td><?= $project['id'] ?></td>
                                <td><?= htmlspecialchars($project['title']) ?></td>
                                <td><a href="<?= htmlspecialchars($project['link']) ?>" target="_blank">Voir</a></td>
                                <td>
                                    <a href="<?= BASE_URL ?>?url=project/edit&id=<?= $project['id'] ?>" class="text-warning me-2">
                                        <i class="las la-pen"></i>
                                    </a>
                                    <a href="<?= BASE_URL ?>?url=project/delete&id=<?= $project['id'] ?>"
                                       class="text-danger"
                                       onclick="return confirm('Confirmer la suppression ?');">
                                        <i class="las la-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else : ?>
            <p class="text-white">Aucun projet pour le moment.</p>
        <?php endif; ?>

        <!-- Pagination -->
        <?php if ($totalPages > 1): ?>
            <nav aria-label="Pagination">
                <ul class="pagination justify-content-center mt-4">
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?= $i === $currentPage ? 'active' : '' ?>">
                            <a class="page-link" href="<?= BASE_URL ?>?url=project/adminIndex&page=<?= $i ?>">
                                <?= $i ?>
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        <?php endif; ?>

    </div>
</section>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>