<?php

namespace App\Controllers;

use App\Controllers\DAO\News;
use App\Controllers\DAO\Province;
use App\Controllers\DAO\University;
use App\Controllers\DAO\User;
use App\Controllers\DAO\News as NewsDAO;

class TheUserPageController extends BaseController
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


    public function apropos(): string
    {
        return $this->render('apropos', 'À propos | ASUNICACO');
    }

    public function contact(): string
    {
        return $this->render('contact', 'Contact | ASUNICACO');
    }

    // public function actualites(): string
    // {
    //     return view('the_user/layout', [
    //         'title' =>  'Actualites | ASUNICACO ',
    //         'content' => 'the_user/pages/actualites/actualites',
    //     ]);
    // }

    public function actualites(): string
    {
        $allNews = News::getAll();

        // 3 dernières actu
        usort($allNews, function ($a, $b) {
            return strtotime($b['publish_date']) - strtotime($a['publish_date']);
        });
        $lastThree = array_slice($allNews, 0, 3);

        return view('the_user/layout', [
            'title' => 'Actualites | ASUNICACO',
            'content' => 'the_user/pages/actualites/actualites',
            'lastThree' => $lastThree,
            'allNews' => $allNews
        ]);
    }


    public function actualiteDetail($item)
    {
        $data['actu'] = News::getById($item);
        $data['othersnews'] = News::getRecentsAll($item,10);

        // 3 dernières actu
         
        return view('the_user/layout', [
            'title' =>  'Actualites Detail | ASUNICACO',
            'content' => 'the_user/pages/actualites/actualiteDetail',
            'data'=>$data
        ]);
    }

    public function provinces(): string
    {
        // $data['news'] = News::getAll();
        $data['provinces'] = Province::getAll();
        $data['universites'] = University::getAll();
        $data['actualites'] = News::getAll(1,2);

        return view('the_user/layout', [
            'title' =>  'Provinces | ASUNICACO',
            'content' => 'the_user/pages/provinces/provinces',
            'data' => $data
        ]);
    }

    public function universite($id): string
    {
        $data['universite'] = University::getById($id);

        return view('the_user/layout', [
            'title' =>  'Universite | ASUNICACO',
            'content' => 'the_user/pages/provinces/universite',
            'data' => $data,
        ]);
    }
}
