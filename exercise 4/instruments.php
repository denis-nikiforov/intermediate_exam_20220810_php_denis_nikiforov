<?php
// Connect to DB
$conn = mysqli_connect('localhost', 'denis', 'denis', 'music_shop', '4306');

// True if connected, false if not
if ($conn) {
    // Execute the query
    $query = 'SELECT * FROM instruments';
    $results = mysqli_query($conn, $query);

    //  Fetch and display the title of the music and the poster 
    $instruments = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
    echo 'Problem connecting with the database';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruments_page</title>
</head>

<body>

    <?php
    /* Part 2
            a) Create a page 'instruments.php'. This page will display all the instruments with their respective information.
            b) Titles for each instrument must be surrounded by <h3> tags.
            c) If the description is more than 30 characters long, seperate the text by adding "...".
            d) For each instrument, you will also add a column which contains a “see more” link.

*/
    foreach ($instruments as $instrument) : ?>

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

        <p> <a href="detail_page.php?id=<?=$instrument['id']; ?>">Detail page</a> </p>
        <hr>

    <?php endforeach; ?>

    <?php
    /*
Part 3 :
            a) Create a page which will dynamically display the detailed content of an instrument.
            b) You have to display all the information and the full description. 
            c) If the instrument doesn’t exist, an error message must be displayed.
*/

    ?>
</body>

</html>