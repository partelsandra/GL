<?php
$servername = "localhost";
$username = "viigisaluleena_muutja";
$password = "-uC9RL4)RCyL";
$dbname = "viigisaluleena_haaletussysteem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Hääletaja lisamine andmebaasi
function LisaHaaletaja($eesnimi, $perenimi, $otsus) {
    global $conn;
    $sql = "INSERT INTO HAALETUS (eesnimi, perenimi, otsus) VALUES ('$eesnimi', '$perenimi', '$otsus')";
    if (mysqli_query($conn, $sql)) {
        echo "Hääletaja lisatud andmebaasi";
    } else {
        echo "Viga: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Andmebaasiühenduse sulgemine
mysqli_close($conn);
?>
