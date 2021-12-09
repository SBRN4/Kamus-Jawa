<?php
$conn = mysqli_connect("localhost", "root", "", "db_kamus");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function cari($pencarian){
    $query = "SELECT * FROM kosakata
            WHERE
        indonesia LIKE '%pencarian%'OR
        ngoko LIKE '%pencarian%'OR
        krama_alus LIKE '%pencarian%'OR
        krama_inggil LIKE '%pencarian%'
        ";
    return query($query);
}

?>