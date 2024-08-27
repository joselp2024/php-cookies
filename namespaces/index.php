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
        <li><?= $persona->getName()?> fue despedido por <?= $persona_adopted->getDespido_by() ?></li>
        <li><?= $persona2->getName()?> fue despedido por <?= $persona2_adopted->getDespido_by() ?></li>
        <li><?= $persona3->getName()?> fue despedido por <?= $persona3_adopted->getDespido_by() ?></li>
    </ul>
</body>
</html>