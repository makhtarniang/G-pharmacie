<?php 
define("server", "127.0.0.1");
define("user", "root");
define("password", "");
define("base", "pharmacie");
function connect()
{
    //connexion a la base de donnees 
    $c=mysqli_connect(server,user,password,base) or die (mysqli_error($c));
    return $c;
}
function deconnect($conn)
{
    $deco=mysqli_close($conn);
    return $deco;
}
?>