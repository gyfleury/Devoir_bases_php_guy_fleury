<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Devoir PHP BASES</title>
</head>
<?php

echo '<br> variable <br>';
$a = 12;
$b = 12.3;
$c = true;
$d = false;
$e = 'une ligne';
$f = "une autre ligne";

echo 
    gettype($a) . ':' . $a . ' '.
    gettype($b) . ':' . $b . ' '.
    gettype($c) . ':' . $c . ' '.
    gettype($d) . ':' . $d . ' '.
    gettype($e) . ':' . $e . ' '.
    gettype($f) . ':' . $f . '<br>';

echo '<br>Artimetique binaire<br>'; 

echo '6 % 5 = ' . (5 % 3) . '<br>';  
echo '6 - 3 = ' . (6 - 3) . '<br>';  
echo '10 + 9 = ' . (10 + 9) .'<br>';          
echo '2 * 2 = ' . (2 % 2) . '<br>';
echo '2 / 2 = ' . (2 / 2) . '<br>';

echo '<br>Artimetique logique<br>';
echo 'False et False = ' . (false && false) . '<br>';  
echo 'True et True = ' . (true && true) . '<br>';  
echo 'false ou true = ' . (false || true) .'<br>';          
echo 'true ou true = ' . (true || true) . '<br>';
echo 'not false = ' . (! false) . '<br>';

echo '<br> Condition if else elseif<br>';

$test = true;

if($test)
    echo 'Test est vrai<br>';
else
    echo 'Test est faux<br>';

$age = 47;

if($age < 18){
     echo 'Vous etes mineur<br>'; 
} else if($age >= 18 || $age < 70){
     echo 'vous etes majeur<br>';
} else if($age > 70){
     echo 'Vous etes senior<br>';
}

echo '<br>Condition switch<br>'; 
$n = 'un';

switch($n){
case 'un':
     echo 'Un<br>';
     break;
case 'deux':
     echo 'Deux<br>';
     break;
case 'trois':
     echo 'Trois<br>';
     break;
default:
    echo 'Inconnue';
    break;
}

echo '<br>Boucle for<br>';

$n = 5;

for($i=0;$i<$n;$i++)
    echo $i . '<br>';

?>
<body>
</body>
</html>
