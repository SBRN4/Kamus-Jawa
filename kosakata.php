<?php
require 'function.php';

$kata = query( "SELECT * FROM kosakata");

if( isset($_GET["cari"]) ) {
    $kata = cari($_GET["pencarian"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kamus Bahasa Jawa</title>
    <link rel="stylesheet" href="css4.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">KamusJowo</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="index.php">Contact</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="kolompencarian">
            <form action= "" method="get">
            <input type="text" name="pencarian" placeholder="Masukan Kata" size="40px" autocomplete="off">
            <button type="submit" name="cari">Cari!</button>
            </form>
        </div>
        <table>
            <tr>
                <th>Indonesia</th>
                <th>Ngoko</th>
                <th>Krama alus</th>
                <th>Krama inggil</th>
            </tr>
            <?php foreach ($kata as $row) : ?>
            <tr>
                <td><?= $row["indonesia"]; ?></td>
                <td><?= $row["ngoko"]; ?></td>
                <td><?= $row["krama_alus"]; ?></td>
                <td><?= $row["krama_inggil"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>