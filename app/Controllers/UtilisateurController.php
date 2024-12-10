<?php

namespace App\Controllers;

use App\Models\UtilisateurModel;

class UtilisateurController extends BaseController
{
    protected $utilisateurModel;

    public function __construct()
    {
        $this->utilisateurModel = new UtilisateurModel();
        helper('url');
        helper('session');
    }

    // Formulaire de connexion
    public function login()
    {
        return view('utilisateur/login');
    }

    // Processus d'authentification
    public function authenticate()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->utilisateurModel->where('email', $email)->first();

        if ($user) {
            // Stocker les informations de session
            session()->set([
                'isLoggedIn' => true,
                'user_id' => $user['id'],
                'user_name' => $user['name'],
                'user_role' => $user['role']
            ]);
            return redirect()->to('/acceuil-page');
        } else {
            return redirect()->back()->with('error', 'Email ou mot de passe incorrect.');
        }
    }

    // Formulaire pour ajouter un utilisateur
    public function create()
    {
        return view('utilisateur/create');
    }

    // Ajouter un utilisateur et rediriger vers la connexion
    public function store()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];

        $this->utilisateurModel->save($data);

        // Redirection vers la page de connexion
        return redirect()->to('/utilisateur/login')->with('success', 'Compte créé avec succès. Veuillez vous connecter.');
    }

    // Déconnexion
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/utilisateur/login');
    }
}
