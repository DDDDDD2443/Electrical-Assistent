<?php
// Detaliile serverului tău SQL
$serverName = "LAPTOP-C0B364G1\DANIELASERVER";  // Numele serverului SQL Server
$connectionOptions = array(
    "Database" => "dashboard_solar",  // Numele bazei de date
    "Uid" => "sa",                    // Utilizatorul SQL Server
    "PWD" => "parola_sql"             // Parola utilizatorului SQL Server
);

// Conectarea la SQL Server
$conn = sqlsrv_connect($LAPTOP-C0B364G1\DANIELASERVER, $connectionOptions);

// Verificarea conexiunii
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
