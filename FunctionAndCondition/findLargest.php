<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array(32,2,4,5,6,20);
    $minus_infinity = INF;
    //for all positive number 
    for($i=0;$i<count($arr);$i++)
    {
        if($minus_infinity>$arr[$i])
        {
            $minus_infinity=$arr[$i];
        }

    }
    echo $minus_infinity." ";
    ?>
</body>
</html>