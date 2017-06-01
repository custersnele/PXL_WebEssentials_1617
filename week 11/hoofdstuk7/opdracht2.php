<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        p {
            font-size: 12px;
            font-family: monospace;
        }
    </style>
</head>

<body>
<?php
function printBoodschap($boodschap, $symbool="") {
    echo str_repeat($symbool, strlen($boodschap) + 2);
    echo "<br/>$symbool$boodschap$symbool<br/>";
    echo str_repeat($symbool, strlen($boodschap) + 2);
    echo "<br/>";
}
?>
<p>
<?php
    printBoodschap("tekst zonder kadersymbool");
    printBoodschap("tekst met kadersymbool", "*");
?>
</p>

</body>
</html>