<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Jmeter_ | Login </title>

    <style>
            .img{width:1020px; height:250px;
                padding-right:50%; margin-left:12.5cm;}
    </style>
</head>
<body class="bg-success p-2" style="--bs-bg-opacity: .5;">
    <h2 align="center" style="margin-top:0.4cm;border:0.2cm green dotted">Page d'authentification</h2><br><br>
    <image src="login.png" alt="login by oussez v1.0" class="img">
    <div style="position:absolute; top:9cm; margin-left: 35%; margin-top:2cm;">
    
        <form action="bienvenu.php" method="post">
        <label  for="nom"><b>Nom d'utilisateur : </b></label>
        <input  required class="border border-primary" name="nom" id="nom" type="text"><br><br>

        <label for="mdp"><b>Mot de passe :&nbsp</b></label>
        <input required class="border border-primary" name="mdp" id="mdp" type="password" style="margin-left:0.7cm;">
        <br><br>
        <div>
        <button type="submit" name="submit" class="btn btn-success" style="width:9cm; text-decoration:solid">login</button>
        <a href="Formulaire.php"><button type="button" class="btn btn-primary">register
        <span class="position-absolute  start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
        </button></a>
        </div>
      </div>
    </form>
</body>
</html>