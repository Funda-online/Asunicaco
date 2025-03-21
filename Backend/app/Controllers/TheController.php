<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\VideoModel;
use CodeIgniter\Controller;

class TheController extends Controller
{

       //---------------------------------CREATE--------------------------------------
    // Créer un utilisateur
    public function createUser()
    {
        // Récupérer les données envoyées par POST
        $data = $this->request->getPost();

        // Validation des données
        if (!$this->validate([
            'user_type'    => 'required|string|max_length[50]',
            'username'     => 'required|string|max_length[50]|is_unique[table_user.username]',
            'password'     => 'required|string|min_length[6]',
        ])) {
            // Si la validation échoue, retour à la page d'accueil avec message d'erreur
            session()->setFlashdata('error', 'Les informations saisies sont invalides.');
            return redirect()->to('/TheHome');
        }

        // Insérer l'utilisateur
        $userModel = new UserModel();
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT); // Hash du mot de passe
        if ($userModel->createUser($data)) {
            session()->setFlashdata('success', 'Utilisateur créé avec succès.');
        } else {
            session()->setFlashdata('error', 'Échec de la création de l\'utilisateur.');
        }

        // Rediriger vers la page d'accueil
        return redirect()->to('/TheHome');
    }

    // Créer un événement
    public function createEvent()
    {
        // Récupérer les données envoyées par POST
        $data = $this->request->getPost();

        // Validation des données
        if (!$this->validate([
            'event_type'        => 'required|string|max_length[50]',
            'date'              => 'required|valid_date',
            'title'             => 'required|string|max_length[50]',
            'event_description' => 'string|max_length[255]',
            'speaker'           => 'string|max_length[50]',
            'speaker_descrption'=> 'string|max_length[255]',
            'user_id'           => 'required|integer',
        ])) {
            // Si la validation échoue, retour à la page d'accueil avec message d'erreur
            session()->setFlashdata('error', 'Les informations de l\'événement sont invalides.');
            return redirect()->to('/TheHome');
        }

        // Insérer l'événement
        $eventModel = new EventModel();
        if ($eventModel->createEvent($data)) {
            session()->setFlashdata('success', 'Événement créé avec succès.');
        } else {
            session()->setFlashdata('error', 'Échec de la création de l\'événement.');
        }

        // Rediriger vers la page d'accueil
        return redirect()->to('/TheHome');
    }

    // Créer une vidéo
    public function createVideo()
    {
        // Récupérer les données envoyées par POST
        $data = $this->request->getPost();

        // Validation des données
        if (!$this->validate([
            'link'              => 'required|valid_url',
            'title'             => 'required|string|max_length[50]',
            'vidéo_description' => 'string|max_length[255]',
            'source'            => 'string|max_length[50]',
            'type'              => 'string|max_length[50]',
            'user_id'           => 'required|integer',
        ])) {
            // Si la validation échoue, retour à la page d'accueil avec message d'erreur
            session()->setFlashdata('error', 'Les informations de la vidéo sont invalides.');
            return redirect()->to('/TheHome');
        }

        // Insérer la vidéo
        $videoModel = new VideoModel();
        if ($videoModel->createVideo($data)) {
            session()->setFlashdata('success', 'Vidéo ajoutée avec succès.');
        } else {
            session()->setFlashdata('error', 'Échec de l\'ajout de la vidéo.');
        }

        // Rediriger vers la page d'accueil
        return redirect()->to('/TheHome');
    }



       //---------------------------------UPDATE--------------------------------------

    // Mettre à jour un utilisateur
    public function updateUser($id)
    {
        // Récupérer les données envoyées par POST
        $data = $this->request->getPost();

        // Validation des données
        if (!$this->validate([
            'user_type'    => 'required|string|max_length[50]',
            'username'     => 'required|string|max_length[50]',
            'password'     => 'required|string|min_length[6]',
        ])) {
            // Si la validation échoue, retour à la page d'accueil avec message d'erreur
            session()->setFlashdata('error', 'Les informations saisies sont invalides.');
            return redirect()->to('/TheHome');
        }

        // Hash du mot de passe
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

        // Mettre à jour l'utilisateur
        $userModel = new UserModel();
        if ($userModel->updateUser($id, $data)) {
            session()->setFlashdata('success', 'Utilisateur mis à jour avec succès.');
        } else {
            session()->setFlashdata('error', 'Échec de la mise à jour de l\'utilisateur.');
        }

        // Rediriger vers la page d'accueil
        return redirect()->to('/TheHome');
    }

    // Mettre à jour un événement
    public function updateEvent($id)
    {
        // Récupérer les données envoyées par POST
        $data = $this->request->getPost();

        // Validation des données
        if (!$this->validate([
            'event_type'        => 'required|string|max_length[50]',
            'date'              => 'required|valid_date',
            'title'             => 'required|string|max_length[50]',
            'event_description' => 'string|max_length[255]',
            'speaker'           => 'string|max_length[50]',
            'speaker_descrption'=> 'string|max_length[255]',
            'user_id'           => 'required|integer',
        ])) {
            // Si la validation échoue, retour à la page d'accueil avec message d'erreur
            session()->setFlashdata('error', 'Les informations de l\'événement sont invalides.');
            return redirect()->to('/TheHome');
        }

        // Mettre à jour l'événement
        $eventModel = new EventModel();
        if ($eventModel->updateEvent($id, $data)) {
            session()->setFlashdata('success', 'Événement mis à jour avec succès.');
        } else {
            session()->setFlashdata('error', 'Échec de la mise à jour de l\'événement.');
        }

        // Rediriger vers la page d'accueil
        return redirect()->to('/TheHome');
    }

    // Mettre à jour une vidéo
    public function updateVideo($id)
    {
        // Récupérer les données envoyées par POST
        $data = $this->request->getPost();

        // Validation des données
        if (!$this->validate([
            'link'              => 'required|valid_url',
            'title'             => 'required|string|max_length[50]',
            'vidéo_description' => 'string|max_length[255]',
            'source'            => 'string|max_length[50]',
            'type'              => 'string|max_length[50]',
            'user_id'           => 'required|integer',
        ])) {
            // Si la validation échoue, retour à la page d'accueil avec message d'erreur
            session()->setFlashdata('error', 'Les informations de la vidéo sont invalides.');
            return redirect()->to('/TheHome');
        }

        // Mettre à jour la vidéo
        $videoModel = new VideoModel();
        if ($videoModel->updateVideo($id, $data)) {
            session()->setFlashdata('success', 'Vidéo mise à jour avec succès.');
        } else {
            session()->setFlashdata('error', 'Échec de la mise à jour de la vidéo.');
        }

        // Rediriger vers la page d'accueil
        return redirect()->to('/TheHome');
    }



       //---------------------------------DELETE--------------------------------------
    // Supprimer un utilisateur
    public function deleteUser($id)
    {
        // Supprimer l'utilisateur
        $userModel = new UserModel();
        if ($userModel->deleteUser($id)) {
            session()->setFlashdata('success', 'Utilisateur supprimé avec succès.');
        } else {
            session()->setFlashdata('error', 'Échec de la suppression de l\'utilisateur.');
        }

        // Rediriger vers la page d'accueil
        return redirect()->to('/TheHome');
    }

    // Supprimer un événement
    public function deleteEvent($id)
    {
        // Supprimer l'événement
        $eventModel = new EventModel();
        if ($eventModel->deleteEvent($id)) {
            session()->setFlashdata('success', 'Événement supprimé avec succès.');
        } else {
            session()->setFlashdata('error', 'Échec de la suppression de l\'événement.');
        }

        // Rediriger vers la page d'accueil
        return redirect()->to('/TheHome');
    }

    // Supprimer une vidéo
    public function deleteVideo($id)
    {
        // Supprimer la vidéo
        $videoModel = new VideoModel();
        if ($videoModel->deleteVideo($id)) {
            session()->setFlashdata('success', 'Vidéo supprimée avec succès.');
        } else {
            session()->setFlashdata('error', 'Échec de la suppression de la vidéo.');
        }

        // Rediriger vers la page d'accueil
        return redirect()->to('/TheHome');
    }





    //---------------------------------READ--------------------------------------

    // Afficher tous les utilisateurs
    public function showUsers()
    {
        // Charger le modèle
        $userModel = new UserModel();

        // Récupérer les utilisateurs (vous pouvez ajouter une pagination ou une limitation ici)
        $data['users'] = $userModel->getUsers();

        // Charger la vue avec les données
        return view('admin/show_users', $data);
    }

    // Afficher un utilisateur spécifique par ID
    public function showUser($id)
    {
        // Charger le modèle
        $userModel = new UserModel();

        // Récupérer les données de l'utilisateur
        $data['user'] = $userModel->getUser($id);

        // Vérifier si l'utilisateur existe
        if (!$data['user']) {
            session()->setFlashdata('error', 'Utilisateur non trouvé.');
            return redirect()->to('/admin/users');
        }

        // Charger la vue avec les données de l'utilisateur
        return view('admin/show_user', $data);
    }


    // Afficher tous les événements
    public function showEvents()
    {
        // Charger le modèle
        $eventModel = new EventModel();

        // Récupérer les événements
        $data['events'] = $eventModel->getEvents();

        // Charger la vue avec les événements
        return view('admin/show_events', $data);
    }

    // Afficher un événement spécifique par ID
    public function showEvent($id)
    {
        // Charger le modèle
        $eventModel = new EventModel();

        // Récupérer les données de l'événement
        $data['event'] = $eventModel->getEvent($id);

        // Vérifier si l'événement existe
        if (!$data['event']) {
            session()->setFlashdata('error', 'Événement non trouvé.');
            return redirect()->to('/admin/events');
        }

        // Charger la vue avec les données de l'événement
        return view('admin/show_event', $data);
    }

    // Afficher toutes les vidéos
    public function showVideos()
    {
        // Charger le modèle
        $videoModel = new VideoModel();

        // Récupérer les vidéos
        $data['videos'] = $videoModel->getVideos();

        // Charger la vue avec les vidéos
        return view('admin/show_videos', $data);
    }

    // Afficher une vidéo spécifique par ID
    public function showVideo($id)
    {
        // Charger le modèle
        $videoModel = new VideoModel();

        // Récupérer les données de la vidéo
        $data['video'] = $videoModel->getVideo($id);

        // Vérifier si la vidéo existe
        if (!$data['video']) {
            session()->setFlashdata('error', 'Vidéo non trouvée.');
            return redirect()->to('/admin/videos');
        }

        // Charger la vue avec les données de la vidéo
        return view('admin/show_video', $data);
    }
}
