<?php
include 'db_connect.php';  // Include fișierul de conectare la baza de date

// Interogare pentru a prelua datele din tabelul productie_sistem
$query = "SELECT * FROM productie_sistem";
$stmt = sqlsrv_query($conn, $query);

$ore = [];
$consumLunar = [];
$productieLunar = [];

while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $ore[] = $row['ora'];
    $consumLunar[] = $row['consum_energie'];
    $productieLunar[] = $row['energie_produse'];
}

// Returnăm datele sub formă de JSON pentru utilizarea în JavaScript
echo json_encode([
    'ore' => $ore,
    'consumLunar' => $consumLunar,
    'productieLunar' => $productieLunar
]);

// Închidem conexiunea la baza de date
sqlsrv_close($conn);
?>
