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
        // Valider les données envoyées depuis le formulaire
        $data = $this->request->getPost();
    
        // Vérification et hashage du mot de passe
      
    
        // Sauvegarde dans la base de données
        if ($this->utilisateurModel->save($data)) {
            return redirect()->to('/utilisateur/login')->with('success', 'Utilisateur créé avec succès. Connectez-vous.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Erreur lors de la création de l’utilisateur.');
        }
    }

    // Déconnexion
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/utilisateur/login');
    }
}
