<?php

require("Logic/createPersons.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= $persona->getName()?> <?= $persona->sayHola() ?></li>
        <li><?= $persona2->getName()?> <?= $persona->sayHola() ?></li>
        <li><?= $persona3->getName()?> <?= $persona->sayHola() ?></li>
    </ul>
</body>
</html>