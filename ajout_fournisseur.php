<?php
  include_once"fonction.php";
              $conn=connect();
              $alls="SELECT *FROM fournisseur";
              $exe=mysqli_query($conn,$alls) or die(mysqli_error($conn));
              if (isset($_POST['btnAjout'])) {
                extract($_POST);
                $sql="INSERT INTO fournisseur(idproduit,libele, prixunitaire,stock,idCategorie) VALUES produit('$idproduit','$libele','$prixunitaire', '$stock','$idCategorie')";
                $conn=mysqli_query($conn,$sql) or die (mysqli_error($conn));
                if ($exe==true) {
                echo "<script>alert('VOUS VENEZ D'AJOUTER UNE produit')</script>";                               
                }
                else
              echo "VEUILLER REVOIR VOTRE INSERTION";
              } 
              ?>
<!DOCTYPE html>
<html>
<head>
<title>prduit</title>
<style type="text/css">
    body
    {
      position:absolute
    }
    </style>
</head>
<body>
<fieldset><legend><h2>Laboratoire</h2></legend>
<form name="monformulaire" method="POST" action="">
<table border=0 bgcolor="white" cellpadding="5" cellspacing="10" width="50%" height="50%" >
  <tr>
<td><label for="qut"><strong>Laboratoire:</strong></label></td>
<td><input type="text" name="Laboratoire" placeholder="Laboratoire" id="pu"/></td>
</tr>
<tr>
<td><label for="qut"><strong>desciptionLab:</strong></label></td>
<td><input type="text" name="desciptionLab" placeholder="votre desciptionLab" id="pu"/></td>
</tr>
<tr>
<td><label for="pu"><strong>Telephon:</strong></label></td>
<td><input type="text" name="telephon" placeholder="+221" id="qut"/></td>
</tr>
<tr>
<td><input type="submit" name="gender" value="AJOUTER"/></td>
<td><input type="reset" name="gender" value="ANNULER"/></tds>
</tr>
</table>
</form>
</fieldset>
</body>
</html>
