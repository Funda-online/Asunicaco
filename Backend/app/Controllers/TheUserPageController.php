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
        return view('the_user/layout', [
            'title' =>  'Actualites | ASUNICACO ',
            'content' => 'the_user/pages/actualites/actualites',
        ]);
    }

    public function actualiteDetail(): string
    {
        return view('the_user/layout', [
            'title' =>  'Actualites Detail | ASUNICACO',
            'content' => 'the_user/pages/actualites/actualiteDetail',
        ]);
    }

    public function provinces(): string
    {
        return view('the_user/layout', [
            'title' =>  'Provinces | ASUNICACO',
            'content' => 'the_user/pages/provinces/provinces',
        ]);
    }

    public function universite(): string
    {
        return view('the_user/layout', [
            'title' =>  'UDBL | ASUNICACO',
            'content' => 'the_user/pages/provinces/universite',
        ]);
    }
}
