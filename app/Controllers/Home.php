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
    public function acceuilview(){
        return view('acceuil');
    }
}
