<h1>Modifier un utilisateur</h1>
<form action="/utilisateur/update/<?= $utilisateur['id_utilisateur'] ?>" method="post">
    <label>Nom :</label>
    <input type="text" name="nom" value="<?= $utilisateur['nom'] ?>" required>
    <label>Email :</label>
    <input type="email" name="email" value="<?= $utilisateur['email'] ?>" required>
    <label>Mot de passe :</label>
    <input type="password" name="mot_de_passe">
    <label>Rôle :</label>
    <select name="role">
        <option value="etudiant" <?= $utilisateur['role'] == 'etudiant' ? 'selected' : '' ?>>Étudiant</option>
        <option value="admin" <?= $utilisateur['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
    </select>
    <button type="submit">Mettre à jour</button>
</form>
