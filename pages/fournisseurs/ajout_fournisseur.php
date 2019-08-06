<?php
if (isset($_POST['save'])){
    include_once '../../connection.php';
    $labo = $_POST['labo'];
    $desclabo = $_POST['desclabo'];
    $phone = $_POST['phone'];
    $stmt = $db->prepare("INSERT INTO Fournisseur(Laboratoire, descriptionLab, Telephone) VALUES (:labo,:desclabo,:phone)");
    $stmt->bindParam(':labo',$labo);
    $stmt->bindParam(':desclabo',$desclabo);
    $stmt->bindParam(':phone',$phone);
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
<title>prduit</title>
    <link rel="stylesheet"  type="text/css"  href="../../css/style.css" />
</head>

<body>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>pharmacie - fourniss</title>
    <link rel="stylesheet"  type="text/css"  href="../../css/style.css" />
</head>
<body>
<div id="source">
    <img src="../../image/ind.jpg" align="left" width="200" height="110" alt="Logo"/>

    <img src="../../image/phar.jpg" align="right" width="230" height="130" alt=""/>
    <div align="center">
        <h3 class="titre">GESTION PHARMACIE  </h3>
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
    <h3 style="text-align: center; color: blue">Fournisseur / Nouveau</h3>
    <form method="post">
        <div class="row">
            <div class="col-25">
                <label for="labo">Laboratoire</label>
            </div>
            <div class="col-75">
                <input type="text" id="labo" name="labo" placeholder="Labo..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="phone">Telephone</label>
            </div>
            <div class="col-75">
                <input type="text" id="phone" name="phone" placeholder="Telephone..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="desclabo">Description Laboratoire</label>
            </div>
            <div class="col-75">
                <textarea id="desclabo" name="desclabo" placeholder="Decrire le Lab.." style="height:200px"></textarea>
            </div>
        </div>
        <div class="row button button1">
            <input type="submit" value="Ajouter" name="save">
        </div>
    </form>
</div>

</body>
</html>
