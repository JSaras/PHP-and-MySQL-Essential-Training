<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings Functions</title>
</head>
<body>
<h1>String Functions</h1>

<?php 

    $first = "The quick brown fix";
    $second = " jumped over the lazy fox.";

    $third = $first;
    $third .= $second;

    echo $third;
?>

<br>
    Lowercase: <?php echo strtolower($third); ?> <br>
    Uppercase: <?php echo strtoupper($third); ?> <br>
    Uppercase first: <?php echo ucfirst($third); ?> <br>
    Uppercase words: <?php echo ucwords($third); ?> <br>
    
    <br>

    Length: <?php echo strlen($third); ?><br>
    Trim: <?php echo "A" . trim("B C D ") . "E"; ?><br>
    Find: <?php echo strstr($third, "brown"); ?><br>
    Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?> <br>

    <br>

    Repeat: <?php echo str_repeat($third, 2); ?> <br>
    Make substring: <?php echo substr($third, 5, 10); ?> <br>
    Find Position: <?php echo strpos($third, "z"); ?><br>
    Find Character:  <?php echo strchr($third, "z"); ?> <br>
</body>
</html>