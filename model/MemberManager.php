<?php

namespace Pierre\Blog\Model;

require_once('Manager.php');

class MemberManager extends Manager{

    public function getMembers()
    {
    
        // Connexion à la base de données
    
        $db = $this->dbConnect();
    
        // On récupère les 100 derniers nom
    
        $request = $db->query('SELECT id, name_member FROM members ORDER BY name_member ASC LIMIT 0, 100');
    
        return $request;
    }
    
    public function postMember($nameMember)
    {
        // pour utiliser la fonction privé dbConnect on utiilse $this qui fait référenc au fonction membre de la classe
        $db = $this->dbConnect();
    
        // On récupère les 5 derniers billets
    
        $request = $db->prepare('INSERT INTO members(name_member) VALUES(?)');
        $addMember = $request->execute(array($nameMember));
    
        return $addMember;
    }
} 
?>