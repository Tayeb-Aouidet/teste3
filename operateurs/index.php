<?php
//phpinfo();

$x = 4;
$y = 2;
$z = 5;

/* operateurs
+
-
*
/
**
%
*/

//$calcul = $x + $y;
//$calcul2 = $z - $y;
//$calcul3 = $y % $x;
$calcul4 = ($x + $z) * $y;
//echo $calcul;
//echo $calcul2;
//echo $calcul3;
//echo $calcul4;

$a = 5;
$b = 7;
//$a = 23;
//$a = '5';

//$a += 6; // $a = $a + 6;
//$a -= 6; // $a = $a - 6;
//$a *= 6; // $a = $a * 6;
//$a /= 6; // $a = $a / 6;
//$a **= 6; // $a = $a ** 6;
//$a %= 6; // $a = $a % 6;

//echo $a;

$c = 'hello';
$c .= 'world';
//echo $c;

//créer 2 variables prix et tva 
//afficher le calcul du prix ttc

$p = 34;
$t = 10;

$calcul5 = $p + (($p * $t)/100);
//echo $calcul5;

//calculer l'age d'une personne en fonction de son année de naissance
$anneeDeNaissance = 1990;
$anneeEnCours = date('Y');
$age = $anneeEnCours - $anneeDeNaissance;
//echo $anneeEnCours;
echo $age . ' ans';
'<hr>';

$i = 0;
$i++; //$i = $i + 1;
// echo $i;

$j = 10;
$j +=2; // $j = $j - 1;
echo $j;
