
<?php
if(isset($_GET['submit']))
{$nom=$_GET['nom']; $prenom=$_GET['prenom']; $password=$_GET['password']; $pays=$_GET['pays'];
echo "<hr><h2 align=\"center\">Bonjour  mr/mme <span style=\"color:blue\">$nom</span></h2><hr>";
echo "<h3><ul>";
echo "<li>Votre prenom :  $prenom</li>";
echo "<li>Votre password :  $password</li>";
echo "<li>Votre pays :  $pays</li>";
echo "</h3></ul>";
$_GLOBALS['answer']=true;
}
else{echo "<h2>Tu dois cliquer sur le bouton s'authentifier :) </h2>";
     echo "<a href=\"login.php\">Page d'inscription</a>";}
