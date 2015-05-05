<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Tutorial</title>
  <?php include("class_lib.php") ?>
</head>
<body>
    
    <?php 

        $stefan = new person("stefan");
        $jeff = new person("jeff");

        // $stefan->set_name("Stefan");
        // $jeff->set_name("Jeff");

        echo $stefan->get_name();
        echo $jeff->get_name();
        phpinfo();
        
     ?>



</body>
</html>