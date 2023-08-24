<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "cafebistro_phpoo_turmab";

    $conn = new mysqli($servername, $username, $password, $databasename);

    if (!$conn)
    {
        die("conexao falhou".mysqli_connect_error());
    }
    else
    {
        echo "conectou";
    }

?>