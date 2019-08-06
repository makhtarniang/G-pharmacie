<?php
include_once "../../connection.php";
$sql = "SELECT * FROM Fournisseur";
$rs = $db->query($sql);
$res = $rs->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>pharmacie - fourniss</title>
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
<a href="ajout_fournisseur.php" class="button button1">Nouveau Fournisseur</a>

<table class="table" border="1">
    <tr class="thead">
        <th>LABORATOIRE</th>
        <th>DESCRIPTION</th>
        <th>TELEPHONE</th>
        <th>ACTIONS</th>
    </tr>
    <?php foreach ($res as $re): ?>
    <tr>
        <td><?= $re->Laboratoire ?></td>
        <td><?= $re->descriptionLab ?></td>
        <td><?= $re->Telephone ?></td>
        <td>
            <a href="">Modifier</a> |
            <a href="">Supprimer </a>
        </td>
    </tr>
        <?php endforeach; ?>
</table>
</body>
</html>