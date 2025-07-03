<?php
namespace App\Controllers;

use App\Controllers\DAO\News;
use App\Controllers\DAO\Province;
use App\Controllers\DAO\University;
use App\Controllers\DAO\User;
use App\Controllers\DAO\News as NewsDAO;


// use App\Controllers\BaseController;

class TheAdminPageController extends BaseController
{
    private function render(string $page, string $title, array $data = []): string
    {
        return view('the_admin/layout', [
            'title' => $title,
            'content' => 'the_admin/pages/' . $page,
            'data' => $data,
        ]);
    }

    public function adminLogin(){
        return view('the_admin/pages/adminLogin');
    }

    public function dashboard(): string
    {
        $data['allNews'] = News::getAll();
        $data['alluniversity'] = University::getAll();
        return $this->render('dashboard', 'Dashboard | ASUNICACO', data: $data);
    }

    public function adminActualites(): string
    {

        $allNews = News::getAllWithUniversity();

        return view('the_admin/layout', [
            'title' => 'Actualites | ASUNICACO',
            'content' => 'the_admin/pages/adminActualites/actualites',
            'allNews' => $allNews

        ]);
    }

    public function saveNews()
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
        $isInserted = News::insert($data);
        if ($isInserted)
            return redirect()->to('/adminActualites')->with('success', 'Actualité ajoutée avec succès !');
        return redirect()->to('/addActualite')->with('error', 'Actualité ajoutée avec succès !');
    }

    public function updateNews()
    {
        helper(['form', 'url']);

        $id = $this->request->getPost('id');
        $news = News::getById($id);

        if (!$news) {
            return redirect()->to('/adminActualites')->with('error', 'Actualité introuvable.');
        }

        $file = $this->request->getFile('image');
        $imageName = $news['image']; // Valeur par défaut : l’ancienne image

        // Si une nouvelle image est uploadée
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Supprimer l'ancienne image si elle existe
            if (!empty($news['image'])) {
                $oldImagePath = FCPATH . 'assets/img/actualites/' . $news['image'];
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Déplacer la nouvelle image
            $imageName = $file->getRandomName();
            $file->move('assets/img/actualites/', $imageName);
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'university' => (int) $this->request->getPost('university'),
            'image' => $imageName,
        ];

        $updated = News::update($id, $data);

        if ($updated) {
            return redirect()->to('/adminActualites')->with('success', 'Actualité modifiée avec succès !');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la mise à jour.');
        }
    }

    public function deleteNews($id = null)
    {
        helper(['url']);

        if (!$id) {
            return redirect()->to('/adminActualites')->with('error', 'ID d’actualité manquant.');
        }

        $news = News::getById($id);

        if (!$news) {
            return redirect()->to('/adminActualites')->with('error', 'Actualité introuvable.');
        }

        // Supprimer l’image associée s’il y en a une
        if (!empty($news['image'])) {
            $imagePath = FCPATH . 'assets/img/actualites/' . $news['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Supprimer l’actualité de la base de données
        $deleted = News::delete($id);

        if ($deleted) {
            return redirect()->to('/adminActualites')->with('success', 'Actualité supprimée avec succès.');
        } else {
            return redirect()->to('/adminActualites')->with('error', 'Erreur lors de la suppression.');
        }
    }

    public function addActualite(): string
    {
        $allUniversity = University::getAll();
        return view('the_admin/layout', [
            'title' => 'Provinces | ASUNICACO',
            'content' => 'the_admin/pages/adminActualites/addActualite',
            'allUniversity' => $allUniversity

        ]);
    }

    public function updateActualite($id)
    {
        $news = News::getById($id);

        if (!$news) {
            return redirect()->to('/adminActualites');
        }

        $allUniversity = University::getAll();
        return view('the_admin/layout', [
            'title' => 'Provinces | ASUNICACO',
            'content' => 'the_admin/pages/adminActualites/updateActualite',
            'news' => $news,
            'allUniversity' => $allUniversity
        ]);
    }

    public function updateUniversity($id)
    {
        $university = University::getById($id);
        $provinces = Province::getAll();

        if (!$university) {
            return redirect()->to('/adminUniversites');
        }

        $allUniversity = University::getAll();
        return view('the_admin/layout', [
            'title' => 'Provinces | ASUNICACO',
            'content' => 'the_admin/pages/adminUniversites/updateUniversite',
            'provinces' => $provinces,
            'university' => $university
        ]);
    }

    public function adminProvinces(): string
    {

        return view('the_admin/layout', [
            'title' => 'Provinces | ASUNICACO',
            'content' => 'the_admin/pages/adminProvinces/provinces',
        ]);
    }

    public function addProvince(): string
    {

        return view('the_admin/layout', [
            'title' => 'Provinces | ASUNICACO',
            'content' => 'the_admin/pages/adminProvinces/addProvince',
        ]);
    }

    public function adminUniversites(): string
    {
        $allUniversity = University::getAllWithProvince();
        return view('the_admin/layout', [
            'title' => 'Universites | ASUNICACO',
            'content' => 'the_admin/pages/adminUniversites/universites',
            'universites' => $allUniversity,
        ]);
    }

    public function addUniversite(): string
    {
        $provinces = Province::getAll();

        return view('the_admin/layout', [
            'title' => 'Universites | ASUNICACO',
            'content' => 'the_admin/pages/adminUniversites/addUniversite',
            'provinces' => $provinces,
        ]);
    }

    public function saveUniversity()
    {
        helper(['form', 'url']);

        // $validation = \Config\Services::validation();

        // $rules = [
        //     'name' => 'required|max_length[128]',
        //     'email' => 'permit_empty|valid_email',
        //     'website' => 'permit_empty|valid_url',
        //     'logo' => 'uploaded[logo]|is_image[logo]|max_size[logo,2048]' // max 2 Mo
        // ];

        // if (!$this->validate($rules)) {
        //     return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        // }

        $logoName = null;
        $file = $this->request->getFile('logo');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $logoName = $file->getRandomName();
            $file->move('assets/img/logo-universite/', $logoName);
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'ville' => $this->request->getPost('ville'),
            'id_province' => $this->request->getPost(index: 'id_province'),
            'description' => $this->request->getPost('description'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'website' => $this->request->getPost('website'),
            // 'faculties' => $this->request->getPost('faculties'),
            'logo' => $logoName
        ];

        $isInserted = University::insert($data);
        if ($isInserted)
            return redirect()->to('/adminUniversites')->with('success', 'Université enregistrée avec succès');
        return redirect()->to('/addUniversite')->with('error', 'Echec de l\'enregistrement de l\'université !');
    }


    public function saveUpdateUniversity()
    {
        helper(['form', 'url']);

        $id = $this->request->getPost('id_university');
        $university = University::getById($id);

        if (!$university) {
            return redirect()->to('/admin/universities')->with('error', 'Université introuvable.');
        }

        $logoFile = $this->request->getFile('logo');
        $logoName = $university['logo'];

        if ($logoFile && $logoFile->isValid() && !$logoFile->hasMoved()) {
            // Supprimer l'ancien logo s’il existe
            if (!empty($logoName) && file_exists(FCPATH . 'assets/img/universities/' . $logoName)) {
                unlink(FCPATH . 'assets/img/logo-universite/' . $logoName);
            }
            $logoName = $logoFile->getRandomName();
            $logoFile->move('assets/img/logo-universite/', $logoName);
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'ville' => $this->request->getPost('ville'),
            'id_province' => $this->request->getPost('id_province'),
            'description' => $this->request->getPost('description'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'website' => $this->request->getPost('website'),
            // 'faculties' => $this->request->getPost('faculties'),
            'logo' => $logoName,
        ];

        if (University::update($id, $data)) {
            return redirect()->to('/adminUniversites')->with('success', 'Université mise à jour avec succès.');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la mise à jour.');
        }
    }

    public function deleteUniversity($id = null)
    {
        helper(['url']);

        if (!$id) {
            return redirect()->to('/adminUniversites')->with('error', 'ID de l’université manquant.');
        }

        $university = University::getById($id);

        if (!$university) {
            return redirect()->to('/adminUniversites')->with('error', 'Université introuvable.');
        }

        // Supprimer le logo associé s’il existe
        if (!empty($university['logo'])) {
            $logoPath = FCPATH . 'assets/img/universites/' . $university['logo'];
            if (file_exists($logoPath)) {
                unlink($logoPath);
            }
        }

        // Supprimer l’université de la base de données
        $deleted = University::delete($id);

        if ($deleted) {
            return redirect()->to('/adminUniversites')->with('success', 'Université supprimée avec succès.');
        } else {
            return redirect()->to('/adminUniversites')->with('error', 'Erreur lors de la suppression.');
        }
    }


}
