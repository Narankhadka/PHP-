<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array=array(1,2,3,4,5,6,7,8,9,10);
    for($i= 0;$i<count($array);$i++)
    {
        if($array[$i]%5== 0)
        {
            echo"$array[$i] &nbsp";
        }
        
    }
    ?>
</body>
</html>