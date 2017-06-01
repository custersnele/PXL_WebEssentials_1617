<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_GET['getal'])) {
    $getal = $_GET['getal'];
}
?>
<form action="oefening2.php" method="get">
    <label for="getal">Getal:</label>
    <input type="number" name="getal" id="getal"
           value="<?php echo ($getal == null? '':$getal); ?>"/>
    <input type="submit" value="test" />
</form>
<?php
if ($getal != null) {
    if ($getal < 0) {
        if ($getal % 2 == 0){
            $message = "negatief en even";
        } else {
            $message = "negatief en oneven";
        }
    } else {
        if ($getal > 10) {
            $message = "groter dan 10";
        } else {
            $message = "tussen 0 en 10";
        }
    }
    echo $message;
}
?>
</body>
</html>