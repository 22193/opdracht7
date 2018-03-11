<?php

    // FORMULIER UITLEZEN (DATA BINNENHALEN)
    $mailadres = $_POST['mailadres'];
    echo $mailadres;
    // CONNECTIE MAKEN MET DE DATABASE
    $host = 'localhost';
    $username = '22193_db';
    $password = '12345611';
    $dbname = '22193_db';

    $dbc = mysqli_connect($host, $username, $password, $dbname) or die ('Error connecting.');
    // QUERT SCHRIJVEN VOOR ZOEKEN NAAR DATA
        $query = "SELECT * FROM nieuwsbrief WHERE mailadres = '$mailadres'";

    // QUERY UITVOEREN
        $result = mysqli_query($dbc,$query) or die ('Error querying (SELECT).');

    // TELLEN HOEVEEL REGELS WE NU HEBBEN
        $number_of_rows = mysqli_num_rows($result);


    // TESTEN OF ER REGELS ZIJN EN DAAR CONCLUSIES AAN VERBINDEN
        if ($number_of_rows == 0) {
            echo ' Helaas, het mailadres '. $mailadres .' staat niet in de database. <br>';
            echo '<a href="index.php">klik hier om het nogmaals te proberen...</a><br><br>';
            exit();
        }else {
            echo ' Hoera! Het mailadres ' . $mailadres . ' is gevonden in de database!';
        }

    // QUERY SCHRIJVEN VOOR VERWIJDEREN DATA
        $query = "DELETE FROM nieuwsbrief WHERE mailadres = '$mailadres'";


    // QUERY UITVOEREN
        $result = mysqli_query($dbc,$query) or die ('Error querying (DELETE).');

    // CONNECTIE VERBREKEN
        mysqli_close($dbc);


    //VERSLAG DOEN VAN HET RESULTAAT
        echo ' Het mailadres ' . $mailadres . ' is verwijdered uit de database! <br>';

        ?>

        <a href="index.php">klik hier om terug te keren naar de homepage</a><br><br>