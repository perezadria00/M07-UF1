<?php

/*

Crea un php con un array inicial con 3 valores numéricos.
a) Crea un formulario que permita modificar el valor en una posición en concreto.
b) Consigue que se mantenga las modificaciones en el array.
c) Añade un botón para calcular el valor medio. 


*/

session_start();

if (isset($_SESSION['digits'])) {
    $_SESSION['digits'] = [
        '0' => 0,
        '1' => 0,
        '2' => 0
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Session 02</title>
</head>

<body>

    <form method="post">
        <h1>Modify array saved in session</h1>

        Position to modify:
        <select id="option">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>

        <br><br>

        New value:
        <input type="text" name="new_value" id="new_value" required>

        <br><br>

        <button type="submit">Modify</button>
        <button type="submit">Average</button>
        <button type="reset">Reset</button>
    </form>

</body>

</html>