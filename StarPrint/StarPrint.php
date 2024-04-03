<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  
    for ($i= 0; $i< 5; $i++) {
        for ($j= 0; $j< 5; $j++) {
            echo"*";

        }
        echo"<br>";
    }
echo"<br>";
    for ($i= 1; $i<=5; ++$i) {
        for ($j= 1; $j<=$i ; ++$j)
        {
            echo "*";
        }
        echo "<br>";
    }
    echo"<br>";
    
    // $n=5;
    //     for ($i=1; $i<= $n; $i++) {
    //         for ($j=1; $j<=$n; $j++)
    //         {
    //             if ($i == $n || $j == 1 || $j == $n || $i == 1) {
    //                 echo "*";
    //             } else {
    //                 echo " ";
    //             }
                
    //         }
    //         echo "<br>";
    //     }
    
  


$n = 5; // Define the size of the square pattern

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i == $n || $j == 1 || $j == $n || $i == 1) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}



    ?>
    
</body>
</html>