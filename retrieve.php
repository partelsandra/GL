<!DOCTYPE html>
<html>

<head>
    <title>Hääletuse tulemused</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Hääletuse tulemused</h1>
    <table>
        <thead>
            <tr>
                <th>Eesnimi</th>
                <th>Perenimi</th>
                <th>Hääletuse otsus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("database.php");
            $sql = "SELECT eesnimi, perenimi, otsus FROM HAALETUS";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["eesnimi"] . "</td><td>" . $row["perenimi"] . "</td><td>" . $row["otsus"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Hääletuse tulemused puuduvad</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>

</html>