<?php
$arr1 = ['a', 'b', 'c', 'd', 'e'];
$result1 = array_map('strtoupper', $arr1);
echo "Задание 1: <br>";
print_r($result1);
echo "<br>";


$arr2 = [10, 20, 30, 40, 50];
$lastIndex2 = count($arr2) - 1;
echo "Задание 2: " . $arr2[$lastIndex2] . "<br>";


$arr3 = [1, 2, 5, 7, 3, 9];
if (array_search(3, $arr3) !== false) {
    echo "Задание 3: Значение 3 найдено в массиве. <br>";
} else {
    echo "Задание 3: Значение 3 не найдено. <br>";
}


$arr41 = [1, 2, 3];
$arr42 = ['a', 'b', 'c'];
$result4 = array_merge($arr41, $arr42);
echo "Задание 4: <br>";
print_r($result4);
echo "<br>";


$arr5 = [1, 2, 3, 4, 5];
$result5 = array_slice($arr5, 1, 3);
echo "Задание 5: <br>";
print_r($result5);
echo "<br>";


$arr6 = ['a' => 1, 'b' => 2, 'c' => 3];
$keys6 = array_keys($arr6);
$values6 = array_values($arr6);
echo "Задание 6: <br>";
print_r($keys6);
echo "<br>";
print_r($values6);
echo "<br>";


$keys7 = ['a', 'b', 'c'];
$values7 = [1, 2, 3];
$result7 = array_combine($keys7, $values7);
echo "Задание 7: <br>";
print_r($result7);
echo "<br>";


$arr8 = ['a', '-', 'b', '-', 'c', '-', 'd'];
$position8 = array_search('-', $arr8);
echo "Задание 8: " . $position8 . "<br>";


$arr9 = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
$temp = $arr9;
asort($temp);
echo "Задание 9: asort<br>";
print_r($temp);
echo "<br>";

$temp = $arr9;
arsort($temp);
echo "Задание 9: arsort<br>";
print_r($temp);
echo "<br>";

$temp = $arr9;
ksort($temp);
echo "Задание 9: ksort<br>";
print_r($temp);
echo "<br>";


$str10 = "1234567890";
$arr10 = str_split($str10);
$sum10 = array_sum($arr10);
echo "Задание 10: " . $sum10 . "<br>";


$arr11 = array_fill(0, 10, 'x');
echo "Задание 11: <br>";
print_r($arr11);
echo "<br>";


$arr121 = [1, 2, 3, 4, 5];
$arr122 = [3, 4, 5, 6, 7];
$arrAll12 = array_intersect($arr121, $arr122);
echo "Задание 12: <br>";
print_r($arrAll12);
