<?php

session_start();
if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [10, 20, 30]; 
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['indice']) && isset($_POST['nuevo_valor'])) {
        $indice = (int)$_POST['indice'];
        $nuevo_valor = (int)$_POST['nuevo_valor'];
        
        
        if ($indice >= 0 && $indice < count($_SESSION['array'])) {
            $_SESSION['array'][$indice] = $nuevo_valor;
        }
    }
    
   
    if (isset($_POST['calcular_media'])) {
        $media = array_sum($_SESSION['array']) / count($_SESSION['array']);
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Array</title>
</head>
<body>
    <h1>Modificar valores del Array</h1>

    <p>Array actual:</p>
    <pre><?php print_r($_SESSION['array']); ?></pre>

   
    <form method="POST">
        <label for="indice">Posición a modificar (0 a 2):</label>
        <input type="number" id="indice" name="indice" min="0" max="2" required><br><br>

        <label for="nuevo_valor">Nuevo valor:</label>
        <input type="number" id="nuevo_valor" name="nuevo_valor" required><br><br>

        <button type="submit">Modificar valor</button>
    </form>

  
    <form method="POST">
        <button type="submit" name="calcular_media">Calcular valor medio</button>
    </form>

    <?php
   
    if (isset($media)) {
        echo "<p>El valor medio es: " . $media . "</p>";
    }
    ?>

</body>
</html>
