<?php
include_once 'database.php';
$result = mysqli_query($conn, "SELECT * FROM HAALETUS");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uuendamine</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <div class="container text-center">
        <h1>Hääletajad</h1>
        <table>
            <tr>
                <td>HAALETUS_id</td>
                <td>TULEMUSED_id</td>
                <td>eesnimi</td>
                <td>perenimi</td>
                <td>viimane_aeg</td>
                <td>otsus</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row["HAALETUS_id"]; ?></td>
                    <td><?php echo $row["TULEMUSED_id"]; ?></td>
                    <td><?php echo $row["eesnimi"]; ?></td>
                    <td><?php echo $row["perenimi"]; ?></td>
                    <td><?php echo $row["viimane_aeg"]; ?></td>
                    <td><?php echo $row["otsus"]; ?></td>
                    <td><a href="update-process.php?HAALETUS_id=<?php echo $row["HAALETUS_id"]; ?>">Muuda</a>
                        <a class="delete" href="delete-process.php?HAALETUS_id=<?php echo $row["HAALETUS_id"]; ?>">Kustuta</a></td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
        <a href="insert.php?HAALETUS_id=<?php echo $row["HAALETUS_id"]; ?>">Lisa uus</a>
        <a href="vote.php">Tulemused</a>
        <form class="text-center">
            <button onclick=window.open("index.php")>Avaleht</button>
        </form>
    </div>
    <?php
} else {
    echo "No result found";
}
?>
</body>
</html>