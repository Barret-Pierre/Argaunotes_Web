<?php

namespace Pierre\Blog\Model;

class Manager {
    // Permet de protéger la fonction met cède les droit d'utilisation aux classe fille 
    protected function dbConnect()
    {
        // Ici l'utilisation de namespace oblige à mettre un \ devant PDO car la classe PDO se trouve à la racine du dossier 
        $db = new \PDO('mysql:host=eu-cdbr-west-02.cleardb.net;dbname=heroku_b77ab840f797fc3;charset=utf8', 'bb210a9e77eb4b', '2cf80422');
        return $db;
    }
} 
?>