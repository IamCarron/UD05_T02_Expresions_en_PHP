<?php
    $suma=$_POST['N1']+$_POST['N2'];
    $resta=$_POST['N1']-$_POST['N2'];
    $multiplicacion=$_POST['N1']*$_POST['N2'];
    $divison=$_POST['N1']/$_POST['N2'];
    echo "<h1>La multplicación es: $suma<h1/>";
    echo "<h1>La multplicación es: $resta<h1/>";
    echo "<h1>La multplicación es: $multiplicacion<h1/>";
    echo "<h1>La multplicación es: $divison<h1/>";
?>