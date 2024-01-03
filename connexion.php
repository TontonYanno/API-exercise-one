<?php
$connexion = new PDO('mysql:host=localhost;dbname=personne', "root", "1111");
try {
    $connexion = new PDO("mysql:host=localhost;dbname=personne", "root", "1111");
    // Configuration pour afficher les erreurs PDO
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à MySQL : " . $e->getMessage());
}

?>