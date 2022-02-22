<?php

namespace Pierre\Blog\Model;

class Manager {
    // Permet de protéger la fonction met cède les droit d'utilisation aux classe fille 
    protected function dbConnect()
    {
        // Ici l'utilisation de namespace oblige à mettre un \ devant PDO car la classe PDO se trouve à la racine du dossier 
        $db = new \PDO('mysql:host=localhost;dbname=wild_test;charset=utf8', 'root', 'root');
        return $db;
    }
} 
?>