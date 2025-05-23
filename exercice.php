<!-- Étape 1: GET
Super, maintenant que tout est en place, nous allons nous amuser avec la variable $_GET. 
Appelez votre page avec le paramètre first_name dans l'url. localhost/{...}/exercice.php?first_name=Ada 
Sur votre page HTML, affichez "Bonjour" suivi du nom indiqué en paramètre (ici, "Bonjour Ada" donc). 
Si aucun nom n'est fourni, affichez "Bonjour anonyme" -->

<!-- Etape 2: POST
Modifiez la page pour y ajouter un formulaire et un champ de saisie.
Une fois validé, le formulaire devra recharger cette page mais avec une variable $_POST qui contiendra le fameux firstname. Nous allons donc changer les règles relatives au nom à afficher.
Si un nom est donnée dans l'url, en GET, l'afficher ;
Sinon, si un nom est donnée en POST, afficher celui-ci ;
Autrement, afficher "anonyme" -->
    <?php 
    
    if (isset($_GET['first_name'])){
        echo 'Bonjour ' . htmlspecialchars($_GET['first_name']) . '!';
    }elseif(isset($_POST['first_name'])){
        echo 'Bonjour ' . htmlspecialchars($_POST['first_name']) .'!';
    } else {
        echo "Bonjour anonyme! ";
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales PHP</title>
</head>
<body>
    <form action="exercice.php" method="post">
    <p>Votre prénom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
    </form>
</body>
</html>
