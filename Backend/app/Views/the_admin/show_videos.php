<!-- app/Views/admin/show_videos.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des vidéos</title>
</head>
<body>

    <h1>Liste des vidéos</h1>

    <!-- Affichage des messages Flash -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Source</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($videos as $video): ?>
                <tr>
                    <td><?= $video['id'] ?></td>
                    <td><?= $video['title'] ?></td>
                    <td><?= $video['source'] ?></td>
                    <td>
                        <a href="/admin/showVideo/<?= $video['id'] ?>">Voir</a> |
                        <a href="/admin/updateVideo/<?= $video['id'] ?>">Modifier</a> |
                        <a href="/admin/deleteVideo/<?= $video['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette vidéo ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>
    <a href="/admin">Retour à l'accueil</a>

</body>
</html>