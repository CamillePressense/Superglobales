<!-- Étape 1: GET
Super, maintenant que tout est en place, nous allons nous amuser avec la variable $_GET. 
Appelez votre page avec le paramètre first_name dans l'url. localhost/{...}/exercice.php?first_name=Ada 
Sur votre page HTML, affichez "Bonjour" suivi du nom indiqué en paramètre (ici, "Bonjour Ada" donc). 
Si aucun nom n'est fourni, affichez "Bonjour anonyme" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales PHP</title>
</head>
<body>
    <?php 
    
    if (isset($_GET['user'])){
        echo 'Bonjour ' . ($_GET["user"]) . '!';
    }else{
        echo "Bonjour anonyme! ";
    }
    ?>
 

</body>
</html>
