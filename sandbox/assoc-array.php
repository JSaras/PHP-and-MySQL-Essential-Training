<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative Array</title>
</head>
<body>
    <h1>Associative Array</h1>

    <?php $assoc = array("first_name" => "Jeff", "last_name" => Saras); ?>
    <?php echo $assoc[first_name] . " " . $assoc[last_name]; ?>
    <br>
    <?php $assoc["first_name"] = "Larry"; ?>
    <?php echo $assoc[first_name] . " " . $assoc[last_name]; ?>
</body>
</html>