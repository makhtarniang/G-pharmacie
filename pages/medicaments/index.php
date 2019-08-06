<?php
include_once "../../connection.php";
$sql = "SELECT libeleCategorie, libele, prixunitaire, stock
FROM Produit p JOIN Categorie C2 on p.IdCategorie = C2.IdCategorie";
$rs = $db->query($sql);
$res = $rs->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>pharmacie - produit</title>
    <link rel="stylesheet"  type="text/css"  href="../../css/style.css" />
</head>
<body>
<div id="source">
    <img src="../../image/ind.jpg" align="left" width="200" height="110"/>

    <img src="../../image/phar.jpg" align="right" width="230" height="130"/>
    <div align="center">
        <h3 class="titre">l'espace de pharmacie  </h3>
        <ul class="bar">
            <li>
                <a href="../../pages/medicaments" >Medicaments</a>
            </li>
            <li>
                <a href="../../pages/fournisseurs" > Fournisseurs </a>
            </li>
            <li>
                <a href="../../pages/livraison" > Livraisons </a>
            </li>
    </div>
</div>

<a href="ajout_produit.php" class="button button1">Nouveau Produit</a>

<table class="table" border="1">
    <tr class="thead">
        <th>CATEGORIE</th>
        <th>LIBELLE</th>
        <th>PRIX UNITAIRE</th>
        <th>STOCK</th>
        <th>ACTIONS</th>
    </tr>
    <?php foreach ($res as $re): ?>
        <tr>

            <td><?= $re->libeleCategorie ?></td>
            <td><?= $re->libele ?></td>
            <td><?= $re->prixunitaire ?></td>
            <td><?= $re->stock ?></td>
            <td>
                <a href="">Modifier</a> |
                <a href="">Supprimer </a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>

