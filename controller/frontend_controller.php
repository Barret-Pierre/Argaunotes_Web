<?php 

require('model/MemberManager.php');

// Ici toute les instances de classe sont préfixé avec leur namespace prédéfinit dans chaque model, pour un petit projet il n'est pas nécéssaire de faire un namespace pour eviter de retaper le namespace à chaque fois on pourra utiliser use Pierre\Blog\Model\;

function listMembers() {

    $memberManager = new Pierre\Blog\Model\MemberManager();

    $members = $memberManager->getMembers();

    require('view/frontend/list_member_view.php');

}

function addMember($nameMember) {

    $memberManager = new Pierre\Blog\Model\MemberManager();

    $memberInsert = $memberManager->postMember($nameMember);

    // Teste si la requette revoie bien le nombre de ligne impacté par la requette ou false si il ya une erreur 
    if($memberInsert === false) {
        // Grace à throw on remonte l'érreur jusqu'au catch du routeur
        throw new Exception('Impossible d\'ajouter le nom');
    } else {
        header('location: index.php?action=listMember');
    }

}

