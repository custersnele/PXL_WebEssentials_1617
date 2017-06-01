<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function occurence($text, $symbol) {
    $result = array();
    $position = strpos($text, $symbol);
    // $position !== false
    while($position > -1) {
        array_push($result, $position);
        $position = strpos($text, $symbol, $position +1);
    }
    return $result;
}

$a = "+5x3+4=19=1+18";
$positions = occurence($a, '+');
echo "+ komt voor in $a op posities<br/>";
foreach($positions as $pos) {
    echo "positie " . ($pos + 1) . "<br/>";
}

echo "(bool)-1<br/>";
var_dump((bool)-1);
echo "<br/>";
echo "false > -1<br/>";
var_dump(false > -1);
?>
</body>
</html>