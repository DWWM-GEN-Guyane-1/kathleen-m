<!-- Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.  **Attention** age est de type entier.  
Afficher : "Bonjour" + **lastname** + **firstname** + ",tu as" + **age** + "ans". -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo7-php</title>
</head>
<body>
<?php
$lastname="Quinn";
$firstname="Leen";
$age=25;

echo 'Bonjour'.$lastname.$firstname.',tu as' .$age. 'ans';
?>
</body>
</html>