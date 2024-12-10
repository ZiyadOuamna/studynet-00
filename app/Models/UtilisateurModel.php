<?php

// app/Models/UtilisateurModel.php
// app/Models/UtilisateurModel.php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table = 'Utilisateurs';
    protected $primaryKey = 'id_utilisateur';
    protected $allowedFields = ['nom', 'email', 'mot_de_passe', 'role'];

    public function verifyLogin($email, $password)
    {
        $user = $this->where('email', $email)->first();
        if ($user) {
            return $user;
        }
        return false;
    }
}
