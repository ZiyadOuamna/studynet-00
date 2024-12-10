<h1>Liste des utilisateurs</h1>
<a href="/utilisateur/create">Ajouter un utilisateur</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Rôle</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($utilisateurs as $utilisateur): ?>
        <tr>
            <td><?= $utilisateur['id_utilisateur'] ?></td>
            <td><?= $utilisateur['nom'] ?></td>
            <td><?= $utilisateur['email'] ?></td>
            <td><?= $utilisateur['role'] ?></td>
            <td>
                <a href="/utilisateur/show/<?= $utilisateur['id_utilisateur'] ?>">Voir</a>
                <a href="/utilisateur/edit/<?= $utilisateur['id_utilisateur'] ?>">Modifier</a>
                <a href="/utilisateur/delete/<?= $utilisateur['id_utilisateur'] ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
