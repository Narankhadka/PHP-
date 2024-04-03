<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // for loop in php 
    $arr=array(1,3,4,5,6,7);
     for($i= 0;$i<count($arr);$i++)
     {
        echo"".$arr[$i]." ";

     }
     echo"<br><br>";

        //forech in php
        $array=[];
        $array["Java"]="Spring boots";
        $array["php"]= "laravel";
        $array["python"]= "Django";
        foreach($array as $k=>$v)
        {
            echo $k." : ".$v."<br>";
           
        }
     


    ?>


</body>
</html>