<?php
include_once 'database.php';
?>
<!doctype html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">

    <title>Hääletus</title>
</head>

<body>

    <div id="heading">
        <h1 id="vote_heading">Ei sobi</h1>
        <h2 id="vote_time"><?php echo $row["h_alguse_aeg"]; ?></h2>
    </div>

    <div id="votes">
        <?
        $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM TULEMUSED ORDER BY TULEMUSED_id DESC LIMIT 1"));
        ?>
        <div id="yes">
            <h2>Poolt:</h2>
            <h1 id="yes_value">
                <?php echo $row["poolt"]; ?>
            </h1>
        </div>
        <div id="no">
            <h2>Vastu:</h2>
            <h1 id="no_value">
                <?php echo $row["vastu"]; ?>
            </h1>
        </div>
    </div>

    <form class="text-center">
        <button onclick=window.open("update.php")>Hääleta</button>
    </form>
    </div>
    <script src="js/index.js"></script>
</body>

</html>