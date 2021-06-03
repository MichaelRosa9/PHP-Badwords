<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad words</title>
</head>
<body>
  <?php
    $name = $_GET['name'];
    $censor = $_GET['censor'];
    $string1 = "Lorem";
    $string2 = "ipsum dolor sit amet consectetur adipisicing elit. Libero alias vel, fugit quasi accusamus accusantium. Numquam facere vel voluptate. Ex quasi quo necessitatibus saepe minima quasi aliquid eum incidunt libero.";

    $string3 = "$string1 $string2";
    $string4 = "$name $string2";
    $string5 = "$name $string2";
    ?>
    <p><strong>2 stringhe messe uno dopo l'altra:</strong> <?php echo $string1 ?> <?php echo $string2 ?></p>

    <p><strong>Stringa concatenata:</strong> <?php echo $string3 ?></p>

    <p><strong>Stringa concatenata con dentro '$_GET':</strong> <?php echo $string4 ?></p>

    <p><strong>Utilizzo del metodo str_replace sullaStringa concatenata con dentro '$_GET' e utilizzando un altro '$_GET' che e' contenuto al metodo cambio la parola 'quasi' contenuto nella stringa:</strong> <?php echo str_replace("quasi", $censor, $string5) ?></p>

</body>
</html>