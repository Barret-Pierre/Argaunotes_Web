<?php $title = 'Les Argaunotes';
// Mémorise tout le contenue qui suit
ob_start();
?>

<!-- Main section -->
<main>

    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form class="new-member-form" action="index.php?action=addMember" method="POST">
        <div class="col-12">
            <label for="name_member" class="form-label">Nom de l&apos;Argonaute</label>
        </div>
        <div class="row">
            <div class="col-sm-8 col-12 mb-3">
                <input id="name_member" name="name_member" type="text" placeholder="Charalampos" class="form-control" required />
            </div>
            <div class="col-sm-4 col-12">
                <button type="submit" class="btn btn-primary">Ajouter</button>  
            </div>
        </div>
    </form>

    <!-- Member list -->
    <h2>Membres de l'équipage</h2>
    <section class="member-list">

        <?php while ($data = $members->fetch()) { ?>
            <div class="member-item"><?= htmlspecialchars($data['name_member']); ?></div>
        <?php
        } // Fin de la boucle des billets
        $members->closeCursor();
        ?>
        
    </section>
</main>



<?php $content = ob_get_clean(); ?>
<!-- Stocke le contenue entre ob_start et ob_get_clean dans la variable $content -->

<?php require('template.php'); ?>