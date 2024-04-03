<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    // $array[][]=array(array("valvo",202), array("BMW",23), array("Saab",234));

    // for($i=0;$i<count($array);$i++):
    //     {
    //         for($j= 0;$j<count($array);$j++)  
    //         {
    //             echo "Element ".$array[$i][$j][0]." ";
    //              echo "Element ".$array[$i][$j][1]." "; 
           
            }
            // echo "<br>";
        }
       
       ?> 

    
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = array(
        array(array("valvo",202), array("BMW",23), array("Saab",234))
    );

    for($i = 0; $i < count($array); $i++)
        {
            for($j = 0; $j < count($array[$i]); $j++)  
            {
                // echo "Element ".$array[$i][$j][0]." ".$array[$i][$j][1]."<br>";
                echo "Elemnet ". $array[$i][$j][0]." ".$array[$i][$j][1]."<br>";
            }
        }
    ?>

</body>
</html>

