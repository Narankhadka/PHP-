<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function printEven($num)
    {
        if($num%2==0)
        {
            echo  "Even number  ";
        }
        else if ($num==0){
            echo " Zero number ";
       }
       else{
        echo  "  Odd  number ";
       }

    }
    printEven(403);
    ?>

</body>
</html>