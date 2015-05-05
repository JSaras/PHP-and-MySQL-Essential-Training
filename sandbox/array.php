<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>

    <?php $numbers = array(4, 8, 54, 23, 12); 
        echo $numbers[1];
    ?>

    <?php $mixed = array(6, "fox", "dog", array("x", "y", "z"));?>
    <?php echo $mixed[2]; ?><br>
    <?php echo $mixed[3]; ?><br>
    

    <?php echo $mixed[3][1]; ?><br>

    <?php $mixed[2] = "cat"; ?>
    <?php $mixed[4] = "mouse"; ?>
    <pre><?php echo print_r($mixed); ?></pre>

    
</body>
</html>