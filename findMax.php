<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function findMax($arr){
    $max = $arr[0][0];
    for ($i =0; $i<count($arr);$i++){
     for ($j=0; $j<count($arr);$j++){
         if ($arr[$i][$j]<$max){
             $max = $arr[$i][$j];
         } return $max;
     }
    }
}
$arr = [
    [3,5,2,8,1,9,2],
    [5,2,7,8,2,3,4]
];
echo "gia tri lon nhat cua ma tran la: ".findMax($arr);
?>
</body>
</html>
