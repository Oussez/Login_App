<?php 
session_name("user_login");
session_start(); 
$_SESSION['loggedIn'] = false;?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-success p-2" style="--bs-bg-opacity: .5;">
   <?php
        $_GLOBALS['answer']=false;
if(isset($_POST['submit']))
{$nom=$_POST['nom']; $mdp=$_POST['mdp'];
    $host="localhost:3307"; $user="root"; $pasw="root"; $dbname="login_jmeter";
    $dsn="mysql:host=$host;dbname=$dbname";
    

    try{$cnx = new PDO($dsn, $user, $pasw);
        if($cnx)
        {echo '<script>alert("~~~>La connexion à BDD est bien établie");</script>';
            $sql="select * from `user`";
            $rep=$cnx->query($sql);
            $tab=$rep->fetchAll(PDO::FETCH_ASSOC);

            foreach($tab as $t){
                if($nom == $t['username'] && $mdp == $t['password'])
                {    $_GLOBALS['answer']=true;
                         $_SESSION['loggedIn'] = "true";
                         echo "<div style=\"position:absolute;margin-left: 35%;\"><hr><h2 align=\"center\">Bonjour mr/mme <span style=\"color:blue\">$nom</span></h2><hr>";
                         echo "<h3><ul>";
                         echo "<li>Votre prenom : ".$t['username']."</li>";
                         echo "<li>Votre password : ".$t['password']."</li>";
                         echo "</h3></ul>";
                        
                         echo '<a href="logout.php"><input type="button" name="logout" class="btn btn-danger" style=" position:absolute;margin-left:3cm;" value="logout"</a></div>';
                        
                }
            }
            
            
        }
        
        else{echo '<script>alert("~~~>**** La connexion à BDD est erronée ****")</script>';}
    }
    catch(PDOException $e){
        echo '***ERREUR : '.$e->getMessage();;

    }

}
if(!isset($_POST['submit']) || $_GLOBALS['answer']==false){
    $_SESSION['loggedIn'] = "false";
    echo "<h2 align=\"center\"class=\"bg-danger bg-gradient\">Vous devez créer un compte !</h2>";
    echo "<br><br><br><a style=\"margin-left:45%;\" href=\"login.php\"><input type=\"button\" class=\"btn btn-primary\" value=\"Page d'inscription\"></a>";

}
if ($_SESSION['loggedIn'] = "true" && $_GLOBALS['answer']==true) {
    echo "<div <div class=\"badge badge-primary text-wrap\" style=\"width: 5cm;\">>You are now logged in!</div>";
}
// if ((time() - $_SESSION['loggedin'] > 1800)) )
 ?> 
</body>
</html>
