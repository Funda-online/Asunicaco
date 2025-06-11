<?php

namespace App\Controllers;

use App\Controllers\DAO\News;
use App\Controllers\DAO\Province;
use App\Controllers\DAO\University;
use App\Controllers\DAO\User;
use App\Controllers\DAO\News as NewsDAO;

class Dashboard extends BaseController
{
    private function render(string $page, string $title, array $data = []): string
    {
        return view('the_user/layout', [
            'title' => $title,
            'content' => 'the_user/pages/' . $page,
            'data' => $data,
        ]);
    }

    public function index()
    {
        $data['news'] = News::getAll();
        $data['provinces'] = Province::getProvincesWithUniversityCount();
        $allNews = News::getAllWithUniversity();

        // 3 dernières actu a modifier pour ne pas tous recuperer avant
        usort($allNews, function ($a, $b) {
            return strtotime($b['publish_date']) - strtotime($a['publish_date']);
        });
        
        $data['lastThree'] = array_slice($allNews, 0, 3);

        return $this->render('accueil', 'Accueil | ASUNICACO', $data);
    }


    public function actualitesAdd(): string
    {
        return $this->render('the_admin/pages/actualites/', 'À propos | ASUNICACO');
    }

    public function contact(): string
    {
        return $this->render('contact', 'Contact | ASUNICACO');
    }

    public function actualites(): string
    {
        $data['AllNews'] = News::getAllWithUniversity();
        $data['University'] = University::getAll();

        return view('the_user/layout', [
            'title' => 'Actualites | ASUNICACO',
            'content' => 'the_admin/pages/actualites/liste',
            'data' => $data
        ]);
    }

    public function ajouter()
    {
        helper(['form', 'url']);

        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('assets/img/actualites/', $imageName);
        }
        
        $data = [
            'image' => $imageName ?? null,
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'university' => (int) $this->request->getPost('university')
        ];
        // var_dump($data);
        $isInserted = News::insert($data);

        if(  $isInserted )
            return redirect()->to('/dashboard')->with('success', 'Publication ajoutée avec succès !');
        
        return redirect()->to('/dashboard')->with('error', 'Publication ajoutée avec succès !');
    }
}
