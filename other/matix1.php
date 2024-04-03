<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $array = array(
        array(array("valvo",202), array("BMW",23), array("Saab",234)));

    // for($i = 0; $i < count($array); $i++)
    //     {
    //         for($j = 0; $j < count($array); $j++)  
    //         {
    //            echo "$array[$i][j]"." ";
    //         }
        
    //     }
    foreach($array as $key => $value) {
        foreach($value as $innerArray) {
            echo $innerArray[0] . " " . $innerArray[1] . "<br>";
        }
    }
    ?>

    
