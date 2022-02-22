<?php
require('controller/frontend_controller.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listMember') {
            listMembers();
        } elseif ($_GET['action'] == 'addMember') {
                if (!empty($_POST['name_member'])) {
                    addMember(($_POST['name_member']));
                } else {
                    // Autre Exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
        }
    } else {
        listMembers();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/error_view.php');
}
