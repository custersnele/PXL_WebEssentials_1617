<?php
$color = "white";
if (isset($_GET['color'])) {
    $color = $_GET['color'];
    setcookie('color', $color, time() + 24 * 60 * 60);
} elseif (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            background-color: <?php echo $color ?>;
        }
    </style>
</head>
<body>
<form action="oefening3Verwerking.php" method="post">
    <div>
        <label for="titel">Titel</label>
    </div>
    <div>
        <input type="text" name="titel" id="titel"/>
    </div>
    <div>
        <label for="tekst">Tekst</label>
    </div>
    <div>
        <textarea name="tekst" id="tekst" name="tekst"></textarea>
    </div>
    <div>
        <input type="submit" value="zend" name="verzendknop"/>
    </div>
</form>
<form action="oefening3.php" method="get">
    <select name="color">
        <option value="white">wit</option>
        <option value="red">rood</option>
        <option value="green">groen</option>
    </select>
    <input type="submit" value="kies"/>
</form>
</body>
</html>