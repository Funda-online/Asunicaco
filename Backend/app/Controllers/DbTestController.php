<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DbTestController extends Controller
{
    public function index()
    {
        // Récupère le service de base de données
        $db = \Config\Database::connect();

        try {
            // Effectuer une requête simple pour tester la connexion
            $builder = $db->table('table_user');  // Remplacez par une table existante dans votre base de données
            $query = $builder->get();  // Essayer de récupérer quelques lignes
            $result = $query->getResult();  // Récupérer les résultats

            // Vérifier si la requête a retourné des résultats
            if ($result) {
                echo "Connexion à la base de données réussie et récupération des données réussie !";
            } else {
                echo "Connexion réussie, mais aucune donnée récupérée.";
            }

        } catch (\Exception $e) {
            // Si une exception est levée (erreur de connexion), afficher l'erreur
            echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
        }
    }
}
