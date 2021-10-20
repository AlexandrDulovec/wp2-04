<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ol>
<?php
$runners[0] = “Martin Kokeš”; 
$runners[1] = “Ondřej Čábelka”;
$runners[2] = “Filip Dubček”;
$runners[3] = “Alexandr Dulovec”;
$runners[4] = “Martin Hruška”;
$runners[5] = “Jaroslav Kašák”;
$runners[6] = “Jaroslav Melichar”;
$runners[7] = “Matěj Pošík”;
$runners[8] = ”Zuzana Sahulková”;
$runners[9] = “Nicolas Jan Sefzig”;
$runners[10] = “Daniel Šuman”;
?>
<?php
    echo count($runners); // =2
?>
<?php
for ($i = 0; $i < count($runners); $i++) {
    echo "<li> $runners[$i]  </i>";
}
?>
</ol>
</body>
</html>