<?php
include_once 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Hääletamine</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container text-center">
    <h1><?php
        if (isset($_POST['save'])) {
            $eesnimi = $_POST['eesnimi'];
            $perenimi = $_POST['perenimi'];
            $otsus = $_POST['otsus'];
            $sql = "call uus_haal('$eesnimi','$perenimi','$otsus')";
            if (mysqli_query($conn, $sql)) {
                echo "Sisestatud edukalt";
            } else {
                echo "Error: Midagi läks valesti!" . $sql . "
" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?></h1>
    <a href="update.php">Tagasi nimekirja</a>
</div>
</body>
</html>