<?php
$formations= json_decode(file_get_contents("http://localhost/API_TEST/API/formations" . $_GET['categorie']));
ob_start();
?>
<h1>les formations de la catégorie <?php $_GET['categorie']; ?> </h1>
<table class="table">
    <tr>
        <td>id</td>
        <td>Nom</td> 
        <td>Description</td>
        <td>Image</td>
        <td>Catégorie</td>
    </tr>
    <?php foreach ($formations as $formation) : ?>
        <tr>    
            <td><?= $formation->id ?></td>
            <td><?= $formation->libelle ?></td> 
            <td><?= $formation->description ?></td>
            <td> <img src="<?= $formation->image ?>" width="100px;" /> </td>
            <td> <?= $formation->categorie ?></td>
    </tr>
    <?php endforeach; ?>
</table>



<?php
$content = ob_get_clean();
require_once("templat.php");
?>