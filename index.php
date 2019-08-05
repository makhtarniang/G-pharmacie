<?php 
include_once "fonction.php";
$conn=connect();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>pharmacie</title>
	<link rel="stylesheet"  type="text/css"  href="css/style.css" />
</head>
<body>
	<div id="source">
	<img src="image/slt.png" align="left" width="100" height="100"/>
	
	<img src="image/etude.PNG" align="right" width="130" height="130"/>
	<div align="center">
		 <h3 class="titre">l'espace de pharmacie  </h3>
		   <ul class="bar">
			<li> <a href="" >Fournisseur</a> 
				
				<ul class="bar1">
					<li> <a href="" > liste des fournisseur </a> </li> 
					<li> <a href="ajout_fournisseur.php" > Ajouter des fournisseur </a> </li>
				</ul>	
			 </li>
			     <li> <a href="" > Produits </a> 
				<ul class="bar1">
					<li> <a href="ajout_produit.php" > Ajouter des produit </a> </li> 
					<li> <a href="liste_produit.php" > Lister des produit </a> </li>
				    </ul>
			        </li>
			<li> <a href="" > Medicaments </a> 
				<ul class="bar1">
					<li> <a href="" > Ajouter un Medicaments </a> </li> 
					<li> <a href="liste_produit.php" > Lister des Medicaments </a> </li>	
				</ul>
			</li>
			
			<li> <a href="" > Livraisons </a> 
				   <ul class="bar1">
					<li> <a href="" > Ajouter liv</a> </li> 
					<li> <a href="" > Lister des liv</a> </li>
		</ul>
     </div>
     <br><br><br><br><br><br><br><br><br><br><br>
    <div align="center"> <h1> Gestion de phamacie</h1>
    	<br>Tel:779847659 <br><br>
    	Courriel:ismail.gueye@orange-sonatel.com


    </div>
</body>	
</html>

