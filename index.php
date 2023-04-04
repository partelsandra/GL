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
<?php
if (isset($_POST['uus_haaletus'])) {
    // Call your MySQL procedure using the following syntax
    $sql = "call uus_haaletus()";

    if (mysqli_query($conn, $sql)) {
        echo "Procedure executed successfully.";
    } else {
        echo "Error executing procedure: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<div class="container text-center">
    <h1>E-hääletamine</h1>
    <a href="update.php">Käesolev hääletus</a>
    <!--<a href="retrieve-LOGI.php">LOGI</a><br>-->
    <a href="vote.php">Tulemused</a><br><br>

    <form method="post">
        <button type="submit" name="uus_haaletus" class="favorite styled" onclick=window.open("vote.php")>Alusta uut
            hääletamist
        </button>
    </form>
</div>
</body>
</html>

