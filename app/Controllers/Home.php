<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function acceuil(){
        return view('utilisateur/create');
    }
    public function acceuilview()
    {
        $data = [
            'user_name' => session()->get('user_name'),
            'user_role' => session()->get('user_role')
        ];
    
        return view('acceuil', $data);
    }
    
}
