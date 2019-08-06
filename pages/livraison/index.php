<?php
include_once "../../connection.php";
$sql = "SELECT Laboratoire, libele, dateL, quant FROM Livraison l , Fournisseur f, Produit p 
        WHERE p.idproduit = l.idproduit AND
        l.IdFounisseur = f.IdFounisseur";
$rs = $db->query($sql);
$res = $rs->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>pharmacie - livraison</title>
    <link rel="stylesheet"  type="text/css"  href="../../css/style.css" />
</head>
<body>
<div id="source">
    <img src="../../image/ind.jpg" align="left" width="200" height="110"/>

    <img src="../../image/phar.jpg" align="right" width="230" height="130"/>
    <div align="center">
        <h3 class="titre">ESPACE DE GESTION PHARMACETIQUE  </h3>
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
<a href="nouveauLivraison.php" class="button button1">Nouvelle Livraison</a>

<table class="table" border="1">
    <tr class="thead">
        <th>FOURNISSEUR</th>
        <th>PRODUIT</th>
        <th>DATE</th>
        <th>QUANTITE</th>
        <th>ACTIONS</th>
    </tr>
    <?php foreach ($res as $re): ?>
        <tr>

            <td><?= $re->Laboratoire ?></td>
            <td><?= $re->libele ?></td>
            <td><?= $re->dateL ?></td>
            <td><?= $re->quant ?></td>
            <td>
                <a href="">Modifier</a> |
                <a href="">Supprimer </a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>

