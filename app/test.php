<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
<?php
echo "<h1>PHP Ok</h1>" . PHP_EOL;

$f = fopen("./test.txt", 'w');
if ($f) {
    fwrite($f, "test test test" . PHP_EOL);
    fclose($f);
} else {
    echo "<p>Error opening!</p>" . PHP_EOL;
}

?>
</body>
</html>


