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

    // gettype retour le type d'une variable
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
    echo 'False et False = ' . (false && false) . '<br>'; // false ne s'affiche pas
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

    echo '<br>Boucle \'while\' \'do while\' \'for\' \'foreach\'<br>';

    $n = 5;

    for($i=0;$i<$n;$i++)
	echo 'boucle for: ' . $i . '<br>';

    foreach([1,2,3,4,5] as $i)
	echo 'boucle foreach: ' . $i . '<br>';

    $i = 0;
    while($i < $n){
	echo 'boucle while: ' . $i . '<br>';
	$i += 1;
    }

    $i = 0;
    do{
	echo 'boucle do while: ' . $i . '<br>';
	$i += 1;
    }while($i < $n);

    echo '<br>Tableau (array)<br>';

    $nombres = [1,2,3,4,5,6,7,88];
    $name_nombres = [1 => 'un',2 => 'deux',3 => 'trois'];

    $a = [[1,1,1,1],
	  [2,2,2,2],
	  [3,3,3,3],
	  [4,4,4,4]];

    foreach($nombres as $n)
	echo 'array: '. $n .'<br>';
    foreach($name_nombres as $key => $name)
	echo 'array: '. $key .'=>' . $name . '<br>';

    $n = 4; // this value must match row of array $a
    $m = 4; // this value must match column of array $b

    echo '<br>Multi dimention array<br>';

    for($i=0;$i<$n;$i++){
	for($j=0;$j<$m;$j++){
            echo $a[$i][$j];
	}
	echo '<br>';
    }

    echo '<br>fonction definition && call<br>';

    function add($a,$b){
	return $a + $b;
    }

    echo 'call add function : ' . add(3444,6778) . '<br>';
    ?>
    <body>
    </body>
</html>
