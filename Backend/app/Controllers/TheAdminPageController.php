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
    

    public function hash()
    {
            var_dump('mdp', PASSWORD_DEFAULT);
    }
    private function render(string $page, string $title, array $data = []): string
    {

        return view('the_admin/layout', [
            'title' => $title,
            'content' => 'the_admin/pages/' . $page,
            'data' => $data,
        ]);
    }

    public function adminLogin()
    {
        return view('the_admin/pages/adminLogin');
    }

    private function check_connexion()
    {

    }
    public function dashboard()
    {
        $data['allNews'] = News::getAll();
        $data['alluniversity'] = University::getAll();
        return $this->render('dashboard', 'Dashboard | ASUNICACO', data: $data);
    }

    public function adminActualites(): string
    {
        $this->check_connexion();

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
        $this->check_connexion();
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
        $this->check_connexion();
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
        $this->check_connexion();

        return view('the_admin/layout', [
            'title' => 'Provinces | ASUNICACO',
            'content' => 'the_admin/pages/adminProvinces/provinces',
        ]);
    }

    public function addProvince(): string
    {
        $this->check_connexion();

        return view('the_admin/layout', [
            'title' => 'Provinces | ASUNICACO',
            'content' => 'the_admin/pages/adminProvinces/addProvince',
        ]);
    }

    public function adminUniversites(): string
    {
        $this->check_connexion();
        $allUniversity = University::getAllWithProvince();
        return view('the_admin/layout', [
            'title' => 'Universites | ASUNICACO',
            'content' => 'the_admin/pages/adminUniversites/universites',
            'universites' => $allUniversity,
        ]);
    }

    public function addUniversite(): string
    {
        $this->check_connexion();
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

        // $validationRule = [
        //     'images' => [
        //         'label' => 'Images',
        //         'rules' => 'uploaded[images.0]|is_image[images.*]|max_size[images,5000]|mime_in[images,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //             'uploaded' => 'Veuillez sélectionner au moins une image.',
        //             'is_image' => 'Le fichier doit être une image.',
        //             'max_size' => 'Chaque image ne doit pas dépasser 5 Mo.',
        //             'mime_in' => 'Format non autorisé. Seuls les JPG, JPEG, PNG sont acceptés.',
        //         ]
        //     ]
        // ];

        // if (!$this->validate($validationRule)) {
        //     return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        // }

        $logoName = null;
        $file = $this->request->getFile('logo');

        // Gestion du logo
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $logoName = $file->getRandomName();
            $file->move('assets/img/logo-universite/', $logoName);
        }

        // Création de l'université
        $data = [
            'name' => $this->request->getPost('name'),
            'ville' => $this->request->getPost('ville'),
            'id_province' => $this->request->getPost('id_province'),
            'description' => $this->request->getPost('description'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'website' => $this->request->getPost('website'),
            'logo' => $logoName,
            // les images seront ajoutées après
        ];

        $imagesList = [];
        $imageFiles = $this->request->getFiles();

        if (isset($imageFiles['images'])) {
            foreach ($imageFiles['images'] as $imgFile) {
                if ($imgFile->isValid() && !$imgFile->hasMoved()) {
                    $imgName = $imgFile->getRandomName();
                    $imgFile->move('assets/img/universites/', $imgName);
                    $imagesList[] = $imgName;
                }
            }
        }

        // Ajouter les images encodées en JSON
        if (!empty($imagesList)) {
            $data['images'] = json_encode($imagesList);
        }

        $isInserted = University::insert($data);

        if ($isInserted)
            return redirect()->to('/adminUniversites')->with('success', 'Université enregistrée avec succès');

        return redirect()->to('/addUniversite')->with('error', 'Échec de l\'enregistrement de l\'université !');
    }



    public function saveUpdateUniversity()
    {
        helper(['form', 'url']);

        $id = $this->request->getPost('id_university');
        $university = University::getById($id);

        if (!$university) {
            return redirect()->to('/admin/universities')->with('error', 'Université introuvable.');
        }

        // ===== LOGO =====
        $logoFile = $this->request->getFile('logo');
        $logoName = $university['logo'];

        if ($logoFile && $logoFile->isValid() && !$logoFile->hasMoved()) {
            // Supprimer l'ancien logo s’il existe
            if (!empty($logoName) && file_exists(FCPATH . 'assets/img/logo-universite/' . $logoName)) {
                unlink(FCPATH . 'assets/img/logo-universite/' . $logoName);
            }

            $logoName = $logoFile->getRandomName();
            $logoFile->move('assets/img/logo-universite/', $logoName);
        }

        // ===== IMAGES =====
        // Images existantes
        $existingImages = json_decode($university['images'] ?? '', true) ?? [];

        // Récupération des images à supprimer
        $imagesToDelete = $this->request->getPost('delete_images') ?? [];

        // Suppression physique des images
        foreach ($imagesToDelete as $imgName) {
            $imgPath = FCPATH . 'assets/img/universites/' . $imgName;
            if (file_exists($imgPath)) {
                unlink($imgPath);
            }
        }

        // Garder uniquement les images restantes
        $remainingImages = array_filter($existingImages, function ($img) use ($imagesToDelete) {
            return !in_array($img, $imagesToDelete);
        });

        // Traitement des nouvelles images uploadées
        $newImages = [];
        $imageFiles = $this->request->getFiles();

        if (isset($imageFiles['images']) && is_array($imageFiles['images'])) {
            foreach ($imageFiles['images'] as $img) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $newImageName = $img->getRandomName();
                    $img->move('assets/img/universites/', $newImageName);
                    $newImages[] = $newImageName;
                }
            }
        }

        // Fusionner anciennes (non supprimées) + nouvelles
        $mergedImages = array_merge($remainingImages, $newImages);

        // ===== DATA UPDATE =====
        $data = [
            'name' => $this->request->getPost('name'),
            'ville' => $this->request->getPost('ville'),
            'id_province' => $this->request->getPost('id_province'),
            'description' => $this->request->getPost('description'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'website' => $this->request->getPost('website'),
            'logo' => $logoName,
            'images' => json_encode($mergedImages)
        ];

        // ===== ENREGISTREMENT =====
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

        // Supprimer les images associées (champ 'images' sous forme de JSON)
        if (!empty($university['images'])) {
            $images = json_decode($university['images'], true);

            if (is_array($images)) {
                foreach ($images as $imageFile) {
                    $imagePath = FCPATH . 'assets/img/universites/' . $imageFile;
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
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

    public function auth()
    {
        $request = $this->request;

        $email = $request->getPost('email');
        $password = $request->getPost('password');

        // On suppose ici que le login se fait par email
        $user = User::loginUser( $email, $password);

        if (!$user) {
            return redirect()->back()->withInput()->with('error', 'Identifiants incorrects');
        }

        // Connexion réussie
        session()->set([
            'id_user' => $user['id_user'],
            'username' => $user['username'],
            'email' => $user['email'],
            'access' => $user['access'],
            'logged_in' => true
        ]);

        // Redirection vers la page précédemment demandée ou vers le dashboard
        $redirectUrl = session()->get('redirect_url') ?? base_url('dashboard');
        session()->remove('redirect_url');
        return redirect()->to($redirectUrl);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

}
