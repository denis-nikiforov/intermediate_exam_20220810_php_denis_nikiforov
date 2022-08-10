<?php
// 1. Get the ID from the URL
$id = $_GET['id'];

// 2. Connect to DB
$conn = mysqli_connect('localhost', 'denis', 'denis', 'music_shop', '4306');

// 3. Run the query
$query = "SELECT * FROM instruments WHERE id = $id";
$result = mysqli_query($conn, $query);

// 4. Fetch and display the title of the music and the poster 
$instrument = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description page</title>

</head>

<body>
<h3>
            Name of instrument :
            <?= $instrument['name']; ?>
        </h3>

        <p>
            <strong> Brand name : </strong>
            <strong> <?= $instrument['brand name']; ?>
        </p>

        <p>
            <strong>Price : </strong>
            EUR <?= $instrument['price']; ?>
        </p>

        <p>
            <strong>Category : </strong>
            <?= $instrument['type']; ?>
        </p>

        <img src="../assets/<?= $instrument['photo'] ?>" alt="" width="200px">

        <p>
            <strong>Description : </strong>
            <?= $instrument['description']; ?>
        </p>



</body>




</html>