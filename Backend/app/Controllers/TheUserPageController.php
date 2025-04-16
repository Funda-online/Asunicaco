<?php

namespace App\Controllers;
use App\Controllers\DAO\News;
use App\Controllers\DAO\Province;
use App\Controllers\DAO\University;
use App\Controllers\DAO\User;

class TheUserPageController extends BaseController
{
    private function render(string $page, string $title, array $data = []): string
    {
        return view('the_user/layout', [
            'title' => $title,
            'content' => 'the_user/pages/' . $page,
            'news'=> $data['news'],
        ]);
    }

    public function index() 
    {
        $data['news'] = News::getAll();
        $data['Provinces'] = Province::getProvincesWithUniversityCount();
        var_dump ($data['Provinces']);
        // return $this->render('accueil', 'Accueil | ASUNICACO', $data);
    }

    public function apropos(): string
    {
        
        return $this->render('apropos', 'À propos | ASUNICACO');
    }

    public function contact(): string
    {
        return $this->render('contact', 'Contact | ASUNICACO');
    }

    public function actualites(): string
    {
        return $this->render('actualites', 'Actualités | ASUNICACO');
    }

    public function provinces(): string
    {
        return $this->render('provinces', 'Provinces | ASUNICACO');
    }
}
