
<?php

// Définir les informations de connexion à la base de données
$host = 'localhost';  // L'hôte de la base de données
$dbname = 'funda';  // Le nom de la base de données
$username = 'root';  // Votre nom d'utilisateur MySQL
$password = '';  // Votre mot de passe MySQL

try {
    // Créer une instance PDO pour se connecter à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Configurer le mode d'erreur pour les exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si la connexion réussie, afficher un message de succès
    echo "Connexion réussie à la base de données !";

} catch (PDOException $e) {
    // Si une erreur de connexion se produit, afficher le message d'erreur
    echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
}
