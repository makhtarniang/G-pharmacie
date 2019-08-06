<?php
include_once '../../connection.php';
$categories = "SELECT IdCategorie, libeleCategorie FROM Categorie";
$categories = $db->query($categories);
$categories = $categories->fetchAll(PDO::FETCH_OBJ);

if (isset($_POST['save'])){
    include_once '../../connection.php';
    $libele = $_POST['libele'];
    $pu = $_POST['pu'];
    $stk = $_POST['stk'];
    $cat = $_POST['cat'];
    $stmt = $db->prepare("INSERT INTO Produit(libele, prixunitaire, stock, IdCategorie) VALUES (:libele,:pu,:stk,:cat)");
    $stmt->bindParam(':libele',$libele);
    $stmt->bindParam(':pu',$pu);
    $stmt->bindParam(':stk',$stk);
    $stmt->bindParam(':cat',$cat);
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ajout Produit</title>
    <link rel="stylesheet"  type="text/css"  href="../../css/style.css" />


</head>
<body style="background-color: #A8BACE">
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
<br><br>
<div class="container">
    <h3 style="text-align: center; color: blue">Produit / Nouveau</h3>
    <form method="post">
        <div class="row">
            <div class="col-25">
                <label for="libele">Libele </label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="libele" placeholder="Libele..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="pu">Prix Unitaire</label>
            </div>
            <div class="col-75">
                <input type="text" id="pu" name="pu" placeholder="Prix Unitaire..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="stk">Stock</label>
            </div>
            <div class="col-75">
                <input type="text" id="stk" name="stk" placeholder="Stock..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="cat">Categorie</label>
            </div>
            <div class="col-75">
                <select id="cat" name="cat">
                    <option value="">Choisir La Categorie</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category->IdCategorie?>"><?= $category->libeleCategorie?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <br>
        <div class="row button button1">
            <input type="submit" value="Ajouter" name="save">
        </div>
    </form>
</div>

</body>
</html>