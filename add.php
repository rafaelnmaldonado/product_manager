<?php
    include_once('connection.php');
    include_once('Dvd.php');
    include_once('Book.php');
    include_once('Furniture.php');

    $book = new Book('123', 'Livrão', '45', 'Book', '3');
    $dvd = new Dvd('1234', 'DVDzão', '20', 'DVD', '500');
    echo ($book->getTypeAttribute().'<br>');
    echo $dvd->getTypeAttribute().'<br><br>';

?>

<html>
    <head>
        <link rel='stylesheet' href='styles.css'>
        <title>Product Add</title>
    </head>
    <body>
        <form method="post" action="test_form.php/">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="website">
        Type:
        <select name="type">
            <option value="Dvd">DVD</option>
            <option value="Book">Book</option>
            <option value="Furniture">Furniture</option>
        </select>
        <button type="button" class="btn btn-primary">Submit</button></form>
    </body>
</html>

    
