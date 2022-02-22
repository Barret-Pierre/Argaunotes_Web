<?php $title = 'Les Argaunotes';
// Mémorise tout le contenue qui suit
ob_start();
?>

<!-- Main section -->
<main>

    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form class="new-member-form" action="index.php?action=addMember" method="POST">
        <label for="name_member">Nom de l&apos;Argonaute</label>
        <input id="name_member" name="name_member" type="text" placeholder="Charalampos" required/>
        <button type="submit">Envoyer</button>
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