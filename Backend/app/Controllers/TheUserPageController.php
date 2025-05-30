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
            'data'=> $data,
        ]);
    }

    public function index() 
    {
        $data['news'] = News::getAll();
        $data['provinces'] = Province::getProvincesWithUniversityCount();
        // var_dump ($data['Provinces']);
        return $this->render('accueil', 'Accueil | ASUNICACO', $data);
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
        // $data['news'] = News::getAll();
        $data['provinces'] = Province::getAll();
        $data['universites'] = University::getAll();

        return view('the_user/layout', [
            'title' =>  'Provinces | ASUNICACO',
            'content' => 'the_user/pages/provinces/provinces',
            'data'=>$data
        ]);
    }

    public function universite($id): string
    {
        $data ['universite']= University::getById($id);

        return view('the_user/layout', [
            'title' =>  'Universite | ASUNICACO',
            'content' => 'the_user/pages/provinces/universite',
            'data'=>$data,
        ]);
    }
}
