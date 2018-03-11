<?php
// DATA UITLEZEN
    $subject = $_POST['subject'];
    $message = $_POST['message'];

// DATABASE INTERACTIE

// DATA IN DATABASE STOPPEN
// 1. VERBINDING MAKEN MET DATABASE
    $dbc = mysqli_connect('localhost', '22193_db', '12345611', '22193_db') or die ('Error connecting.');

// 2. OPDRACHT (QUERY) SCHRIJVEN VOOR DE DATABASE
    $query = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam', '$tussenvoegsel', '$achternaam','$mailadres')";

// 3. QUERY UITVOEREN
    $result = mysqli_query($dbc, $query) or die ('Error querying.');

// MAILEN MET EEN WHILE LOOP