<?php
echo'Hello World';
//1. Определение переменных и констант:
//Объявите несколько переменных с разными типами данных: строка, число, булево значение.
//Создайте константу с помощью функции define() , например, для хранения имени сайта.
//Выведите значения переменных и констант с помощью функций echo и
//print .
$str1 = "Hello";
$str2 = "World";
$num = 123;
$bool = true;
define('SITE_NAME', 'My Site');
echo $str1, " ", $str2, "<br>";
echo $num, "<br>";
echo $bool, "<br>";
echo SITE_NAME, "<br>";
print "$str1 $str2 <br>";
print "$num <br>";
print "$bool, <br>";
print "SITE_NAME, <br>";
//2. Преобразование типов:
//Создайте переменную, содержащую строковое представление числа, и
//преобразуйте её в число.
//Выведите результат преобразования, а также тип переменной с помощью
//функции gettype() .
$str_num = "123";
$num_str = (int)$str_num;
echo $num_str, "<br>";
echo gettype($num_str), "<br>";
//3. Использование операторов:
//Создайте несколько переменных с числами и выполните над ними
//арифметические операции (сложение, вычитание, умножение, деление).
//Используйте операторы сравнения для сравнения этих переменных, выведите
//результат.
//Реализуйте простое логическое выражение с использованием операторов &&
//и || .
$num1 = 10;
$num2 = 5;
$num3 = 8;
$sum = $num1 + $num2 + $num3;
echo "Сумма: ", $sum, "<br>";
echo "Сравнение: ", ($num1 > $num2), "<br>";
echo "Логическое выражение: ", ($num1 > $num2 && $num1 > $num3), "<br>";
$difference = $num1 - $num2 - $num3;
echo "Разность: ", $difference, "<br>";
$multiplier = $num1 * $num2 * $num3;
echo "Произведение: ", $multiplier, "<br>";
$division = $num1 / $num2 / $num3;
echo "Частное: ", $division, "<br>";
echo "Остаток от деления: ", $num1 % $num2 % $num3, "<br>";
echo ($num1 < $num2) && ($num1 > $num3) || ($num2 < $num3), "<br>";
//4. Суперглобальная переменная $_SERVER:
//Выведите информацию о сервере и среде исполнения с помощью переменной
//$_SERVER . Например, выведите информацию о браузере пользователя или IP-
//адресе.
echo "Server Name: ", $_SERVER['SERVER_NAME'], "<br>";
echo "Server Software: ", $_SERVER['SERVER_SOFTWARE'], "<br>";
echo "HTTP_HOST: ", $_SERVER['HTTP_HOST'], "<br>";
echo "HTTP_USER_AGENT: ", $_SERVER['HTTP_USER_AGENT'], "<br>";
echo "REMOTE_ADDR: ", $_SERVER['REMOTE_ADDR'], "<br>";
echo "SCRIPT_NAME: ", $_SERVER['SCRIPT_NAME'], "<br>";
?>
