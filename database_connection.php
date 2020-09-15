<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'shaima', '1111', 'oglasi');

    //check the connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    //write query for all oglasi
    $sql = 'SELECT title, descr, price, godiste, images, id  FROM novajlija';

    //make query & get result
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $oglasi = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);

    //close the connection
    mysqli_close($conn);

?>
