<?php
include_once '../../connection.php';
$fournisseurs = "SELECT IdFounisseur,Laboratoire FROM Fournisseur";
$produits = "SELECT idproduit,libele FROM Produit";
$fournisseurs = $db->query($fournisseurs);
$produits = $db->query($produits);
$fournisseurs = $fournisseurs->fetchAll(PDO::FETCH_OBJ);
$produits = $produits->fetchAll(PDO::FETCH_OBJ);

if (isset($_POST['save'])){
    include_once '../../connection.php';
    $fourniss = $_POST['fourniss'];
    $produit = $_POST['produit'];
    $datel = $_POST['datel'];
    $qte = $_POST['qte'];
    $stmt = $db->prepare("INSERT INTO Livraison(idfounisseur, idproduit, datel, quant) VALUES (:fourniss,:produit,:datel,:qte)");
    $stmt->bindParam(':fourniss',$fourniss);
    $stmt->bindParam(':produit',$produit);
    $stmt->bindParam(':datel',$datel);
    $stmt->bindParam(':qte',$qte);
    if ($stmt->execute()){
        header('Location: index.php');
    }
    else
        echo 'Non fait';
}
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

<div class="container">
    <h3 style="text-align: center; color: blue">Livraison / Nouveau</h3>
    <form method="post">
        <div class="row">
            <div class="col-25">
                <label for="fourniss">Fournisseur</label>
            </div>
            <div class="col-75">
                <select name="fourniss" id="fourniss">
                    <option value="">Choisir le fournisseur</option>
                    <?php foreach ($fournisseurs as $fournisseur): ?>
                        <option value="<?= $fournisseur->IdFounisseur?>"><?= $fournisseur->Laboratoire?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="produit">Produit</label>
            </div>
            <div class="col-75">
                <select name="produit" id="produit">
                    <option value="">Choisir un Produit</option>
                    <?php foreach ($produits as $produit): ?>
                        <option value="<?= $produit->idproduit?>"><?= $produit->libele?></option>
                    <?php endforeach; ?>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="datel">Date</label>
            </div>
            <div class="col-75">
                <input type="date" id="datel" name="datel" >
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="qte">Quantité</label>
            </div>
            <div class="col-75">
                <input type="number" id="qte" name="qte">
            </div>
        </div>
        <br>
        <div class="row button button1">
            <input type="submit" value="Ajouter" name="save">
        </div>
    </form>
</div>

</body>


