<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
function isPrimeOrNot($num)
{
    
    if($num==1)
    {
        return 0;
    }
   for($i =2;$i<=$num/2;$i++)
   {
    if($num%$i==0)
    {
        return 0;
    }
   }
   return 1;
}
 $num=13;
 
if(isPrimeOrNot($num)==0)
{
    echo "Not Prime";
}
else{
    echo "Prime number";
}
?>
</body>
</html>