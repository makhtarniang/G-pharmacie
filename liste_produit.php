<?php 
include_once "fonction.php";
$conn=connect();
$f="SELECT *FROM produit";
$exe=mysqli_query($conn,$f) or die (mysqli_error($conn));
?>
<h2>liste des produit</h2>
 
        <table border="1" bgcolor="F5DFB3" style="width: 50%">
        	<tr>
            <th rowspan="2">no</th>
        		<th rowspan="2">libele</th>
        		<th rowspan="2">prixunitaire</th>
                  <th rowspan="2">Stock</th>
                   <tr>
                   	<td>Modifier</td>
                    <td>Supprimer</td>
                   </tr>
	<?php 
while ($l=mysqli_fetch_array($exe)) {
  # code...?>
  <td><?=$l['idproduit']?></td>
    <td><?=$l['libele']?></td>
     <td><?=$l['prixunitaire']?></td>
    <td><?=$l['stock']?></td>
    <th><center><a href="modifier.php?marc=<?=$l['idmarc']?>">suppimer</a></center>

    <th><center><a href="modifier.php?marc=<?=$l['idmarc']?>">modifier</a></center></th>
</tr>
<?php }?>
        </table>
  	</div>
</table>
</form>
</fieldset>
</body>
</html>
</body>
</html>