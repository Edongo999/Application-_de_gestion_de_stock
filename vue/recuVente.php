<?php
include 'entete.php';

if (!empty($_GET['id'])) {
    $vente = getVente($_GET['id']);
}
?>
<div class="home-content">
    <div class="page">
        <div class="alignement">
            <div>
                <h2>Landry-TECH Stock</h2>
            </div>
            <div>
                <p>Recu N° #: <?= $vente['id'] ?></p>
                <p>Date: <?= date('d/m/Y H:i:s', strtotime($vente['date_vente'])) ?></p>
                <p>Nom: <?= $vente['nom'] . " " . $vente['prenom'] ?></p>
                <p>Tel: <?= $vente['telephone'] ?></p>
                <p>Adresse: <?= $vente['adresse'] ?></p>
            </div>
        </div>
        
        <div class="box1">
            <table class="mtable">
                <tr>
                    <th>Designation</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Prix total</th>
                </tr>

                <tr>
                    <td><?= $vente['nom_article'] ?></td>
                    <td><?= $vente['quantite'] ?></td>
                    <td><?= $vente['prix_unitaire'] ?></td>
                    <td><?= $vente['prix'] ?></td>
                </tr>
            </table>
        </div>        
    </div>
</div>

<?php
include 'pied.php';
?>

<script>
function setPrix() {
    var article = document.querySelector('#id_article');
    var quantite = document.querySelector('#quantite');
    var prix = document.querySelector('#prix');

    var prixUnitaire = article.options[article.selectedIndex].getAttribute('data-prix');

    prix.value = Number(quantite.value) * Number(prixUnitaire);
}
</script>
