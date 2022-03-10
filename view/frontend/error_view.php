<?php $title = 'Les Argaunotes';
// Mémorise tout le contenue qui suit
ob_start();
?>


<!-- Faire un visuel d'erreur -->
<div class="container">
    <div class="alert alert-danger">
        <p><?= 'Erreur: ' . $errorMessage;?></p>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>