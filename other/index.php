<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
  
   $arr=array("4","50","12","342","1","34");
   $largest = $arr[0];
//    echo "hello naran khadka ";
//  for ($i = 0; $i <= 100; $i++) {
//     echo "$i <br>";
//  }
// $var = "Naran khadka";
// for($i= 0;$i<count($arr);$i++)
// {
//      if($arr[$i]<$arr[$i+1])
//      {
//         echo"$i";
//      }
// }
for ($i = 0; $i < count($arr) - 1; $i++) {
    if ($arr[$i] > $arr[$i + 1]) {
       $largest = $arr[$i];
    }
}
echo"$largest <br>";
   ?>
</body>
</html>