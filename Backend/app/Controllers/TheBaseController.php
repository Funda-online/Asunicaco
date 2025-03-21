<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\VideoModel;
use App\Controllers\BaseController;

class TheBaseController extends BaseController
{

    /**
     * Affiche la vue d'accueil (home).
     */
    public function index() : string
    {
        return view('the_admin/Dashboard');
    }
    /**
     * Affiche la vue de tous les utilisateurs.
     */
    public function showUsers()
    {
        $userModel = new UserModel();
        $userModel->findAll();

        // return view('the_admin/show_users', $data);
    }

    public function test()
    {
        $userModel = new UserModel();
        $userModel->findAll();
    }

    /**
     * Affiche la vue pour un utilisateur spécifique.
     */
    public function showUser($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->getUser($id);

        if (!$data['user']) {
            session()->setFlashdata('error', 'Utilisateur non trouvé.');
            return redirect()->to('/thecontroller/showUsers');
        }

        return view('the_admin/show_user', $data);
    }

    /**
     * Affiche la vue de tous les événements.
     */
    public function showEvents()
    {
        $eventModel = new EventModel();
        $data['events'] = $eventModel->getEvents();

        return view('the_admin/show_events', $data);
    }

    /**
     * Affiche la vue pour un événement spécifique.
     */
    public function showEvent($id)
    {
        $eventModel = new EventModel();
        $data['event'] = $eventModel->getEvent($id);

        if (!$data['event']) {
            session()->setFlashdata('error', 'Événement non trouvé.');
            return redirect()->to('/thecontroller/showEvents');
        }

        return view('the_admin/show_event', $data);
    }

    /**
     * Affiche la vue de toutes les vidéos.
     */
    public function showVideos()
    {
        $videoModel = new VideoModel();
        $data['videos'] = $videoModel->getVideos();

        return view('the_admin/show_videos', $data);
    }

    /**
     * Affiche la vue pour une vidéo spécifique.
     */
    public function showVideo($id)
    {
        $videoModel = new VideoModel();
        $data['video'] = $videoModel->getVideo($id);

        if (!$data['video']) {
            session()->setFlashdata('error', 'Vidéo non trouvée.');
            return redirect()->to('/thecontroller/showVideos');
        }

        return view('the_admin/show_video', $data);
    }
}
