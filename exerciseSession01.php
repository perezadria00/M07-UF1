<?php



session_start(); // Iniciar la sesión


if ($_SERVER['REQUEST_METHOD'] === 'POST'){ 
    
    $worker = $_POST['name']; 
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    
    $_SESSION["name"] = $worker; 

    $_SESSION["product"] = $product;

    if (isset($_POST["add"])){
        switch($product){
            case 'milk':
                $_SESSION['milk'] += $quantity;
                break;
                case 'soda':
                    $_SESSION['soda'] += $quantity;
                    break;
                    }
    }

    if (isset($_POST["remove"])){
        switch($product){
            case 'milk':
                $_SESSION['milk'] -= $quantity;
                break;
                case 'soda':
                    $_SESSION['soda'] -= $quantity;
                    break;
                    }
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Management</title>

</head>

<body>

    <h1>Supermarket Management</h1>

    <form method="post">
        <b>Worker Name:</b>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>

        <h2>Choose a Product:</h2>
        <select name="product" id="product">
            <option value="soda">Soda</option>
            <option value="milk">Milk</option>
        </select><br>

        <h2>Product Quantity:</h2>
        <input type="number" name="quantity" id="quantity" min="1" required><br><br>

        <input type="submit" id="add" name="add" value="Add">
        <input type="submit" id="remove" name="remove" value="Remove">
        <input type="reset" value="Reset"><br>
    </form>

    <br>
    <h1>Inventory:</h1>
        Worker: <?php echo $_SESSION['worker'] ?>
        Milk units:
        Soda units:

    

</body>

</html>