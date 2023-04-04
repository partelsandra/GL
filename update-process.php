<?php
include_once 'database.php';
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE HAALETUS set HAALETUS_id='" . $_POST['HAALETUS_id'] . "',
    TULEMUSED_id='" . $_POST['TULEMUSED_id'] . "',
    eesnimi='" . $_POST['eesnimi'] . "',
    perenimi='" . $_POST['perenimi'] . "',
    viimane_aeg='" . $_POST['viimane_aeg'] . "' ,
    otsus='" . $_POST['otsus'] . "'
    WHERE HAALETUS_id='" . $_POST['HAALETUS_id'] . "'");
    $message = "Edukalt uuendatud!";
}
$result = mysqli_query($conn,"SELECT * FROM HAALETUS WHERE HAALETUS_id='" . $_GET['HAALETUS_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
    <title>uuendatud hääletused</title>
</head>
<body>
<form name="frmUser" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
        <a href="update.php">Isiku List</a>
    </div>
    <label for="otsus">Otsus</label>
    <select id="otsus" value="<">
        <option value="poolt">Poolt</option>
        <option value="vastu">Vastu</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Uuenda">

</form>
</body>
</html>