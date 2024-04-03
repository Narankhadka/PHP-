<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $array=[];
    $array["Nepal"] = "Kathmandu";  
    $array["Albania"] = "Algiers";
    $array["Ageria"] = "Algiers";
    foreach ($array as $key => $value) {
        echo $key ." : ". $value ."<br>";   
    }
    ?>

</body>
</html>