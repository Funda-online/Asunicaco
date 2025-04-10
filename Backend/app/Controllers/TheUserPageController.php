<?php

namespace App\Controllers;

class TheUserPageController extends BaseController
{
    private function render(string $page, string $title): string
    {
        return view('the_user/layout', [
            'title' => $title,
            'content' => 'the_user/pages/' . $page
        ]);
    }

    public function index(): string
    {
        return $this->render('accueil', 'Accueil | ASUNICACO');
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
