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

//     public function actualites_detail($id = null): string
// {
//     $actualites = [
//         1 => [
//             'titre' => "Rencontre Annuelle des Recteurs...",
//             'date' => "04 Avril 2025",
//             'image' => "assets/img/actualités/act1.jpg",
//             'resume' => "La réunion annuelle...",
//             'contenu' => "Contenu complet ici..."
//         ],
//     ];

//     if (!isset($actualites[$id])) {
//         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Actualité non trouvée");
//     }

//     return view('the_user/layout', [
//         'title' => $actualites[$id]['titre'] . ' | ASUNICACO',
//         'content' => 'the_user/pages/actualites_detail',
//         'actualite' => $actualites[$id],
//     ]);
// }

    public function actualiteDetail(): string
    {
        return $this->render('actualiteDetail', 'actualiteDetail | ASUNICACO');
    }

    public function provinces(): string
    {
        return $this->render('provinces', 'Provinces | ASUNICACO');
    }
}
