<?php
$formations= json_decode(file_get_contents("http://localhost/API_TEST/API/formations"));
ob_start();
?>

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
            <td> <a href="formation.php?numero=<?= $formation->id ?>"><?= $formation->libelle ?></a></td> 
            <td><?= $formation->description ?></td>
            <td> <img src="<?= $formation->image ?>" width="100px;" /> </td>
            <td><a href="formationsCategorie.php?categorie=<?= $formation->categorie ?>"><?= $formation->categorie ?></a></td>

    </tr>
    <?php endforeach; ?>
</table>



<?php
$content = ob_get_clean();
require_once("templat.php");
?>