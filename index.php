<?php
$age = 32;
$amount = 19599.50;
$name = 'Martin';
$isClient = true;
$options = ['livraison en 24h', 'paiement en 3 fois'];

echo $name . ' a ' . $age . ' ans. <br>';
print($name .= $age);
print($options[1]);
var_dump($age);
var_dump($age);

if (date('H') < 12) {
    echo 'Bonjour';
} elseif (date('H') < 18) {
    echo 'Bon après-midi';
} else {
    echo 'Bonsoir';
}

echo date('jS');

$options = ['livraison en 24h', 'paiement en 3 fois'];

echo '<ul>';
foreach ($options as $option) {
    echo '<li>' . $option . '</li>';
}
echo '</ul>';

?>

<head>
    <html>

<body>
    <form action="signup.php" method="post">
        <fieldset>
            <legend>Inscription</legend>
            <input type="text" name="name" placeholder="Martin" required>
        </fieldset>
        <fieldset>
            <legend>Votre âge</legend>
            <input type="number" name="age" placeholder="32" required>
        </fieldset>
        <fieldset>
            <legend>Votre 1er dépôt</legend>
            <input type="number" name="amount" placeholder="1900.50" required>
        </fieldset>
        <input type="submit" value="S'inscrire">
    </form>
</body>

</html>
</head>