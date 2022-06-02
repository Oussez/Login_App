
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire v1.0 | Jmeter</title>
</head>
<body>
    <form action="Affichage_infos.php" method="get" name="ins" onsubmit="return Verifier()">
        <fieldset>
            <legend>Creation du compte</legend>
            <table style="height:10cm;padding-left:2cm;">
                <tr>
                    <th colspan="3">
                        <label for="nom" >Nom:</label>
                    </th>
                    <th id=nom>
                        <input type="text" id="nom"  name="nom" >
                    </th>
                </tr>

                <tr>
                    <th colspan="3">
                        <label for="prenom">Prenom:</label>
                    </th>
                    <th>
                        <input type="text" id="prenom" name="prenom" >
                    </th>
                </tr>

                <tr>
                    <th colspan="3">
                        <label for="pass">Mot de passe: </label>
                    </th>
                    <th>
                        <input type="mdp" id="pass" name="mdp"  >
                    </th>
                </tr>

                <tr>
                    <th colspan="3">
                        <label for="ville">Pays:</label>
                    </th>
                    <th>
                        <select id="ville"  name=pays>
                            <option value=maroc>Maroc</option>
                            <option value=france>France</option>
                            <option value=belgique>Belgique</option>
                            <option value=allemand>Allemand</option>
                            <option value=turque>Turque</option>
                            <option value=canda>Canada</option>
                        </select>
                    </th>
                </tr>

                
                <tr>
                    <th colspan="25"><button type="submit" class="btn btn-success" name=submit>S'authentifier</button>
                        </th>
                        <th><button type="reset" class="btn btn-danger">Initialiser</button></th>
                </tr>
            
            </table>
           

        </fieldset>
    </form>
</body>

<script>
   var nom = document.forms["ins"]["nom"];
   var prenom = document.forms["ins"]["prenom"];
   var mdp = document.forms["ins"]["mdp"];
   var pays = document.forms["ins"]["pays"];


   function Verifier() {
   if (nom.value == "")   
                                 
    {  
        alert("Ecrivez votre nom !");
        nom.focus(); 
        return false; 
    } 

    if (prenom.value == "")                                  
    {   alert("Ecrivez votre prenomss !"); 
        prenom.focus(); 
        return false; 
    } 

    if (mdp.value == "")                                  
    {   alert("Ecrivez votre mdp !"); 
        mdp.focus(); 
        return false; 
    } 
    if (pays.value == "")                                  
    {   alert("Choisir votre pays !"); 
        pays.focus(); 
        return false; 
    } 
    return true; 

}
    </script>
</html>