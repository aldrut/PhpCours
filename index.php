<?php

/**ecriture en php d'une déclaration de varibale */
// $maVariable ;

//echo gettype($maVariable);

// $maVariable ="du texte";

// $uneAutreVariable = 23;
//commentaire ou /* */

//indexeur string
// $chaine ="du texte";
//récupérer le type
// $type = gettype($chaine);

//number 
//integer
// $nb1 = 10;
//float
// $nb2 = 5.7;
//boolean
// $vrai = true;
// $faux = false;

//concat string 
// $str = "chaine1"."chaine2";

// + - * /
// $a = 10;
// $b = 15;
// $c = 4;
// $d = 88;
// $sum = $a + $b - $c * $d;

//opératreur d'affectation
// $a +=5;
// $str .= "chaine3";

//opérateur de comparaison
// < > <= >= == != === !==
// 10 == "10"; /*vrai*/
// 10 === "10"; /*faux*/

//structure de contrôle
// $condition = true; $condition2 = true;
// if($condition)
// { /* */ }
// if($condition)
// { /**/ }else{ /**/ }
// if($condition){ /**/ }
// elseif($condition2){ /**/ }
// else{ /**/ }
// //opérateur logique
// // &&(et) ||(ou) !(non)
// $vrai && $vrai; //vrai
// $vrai || $faux; //vrai
// !$vrai; // faux -->

//opérateur ternaire
//(condition) ? "":"";

// $x = 0;
// echo $x >=0 ? "+" : "-";

// //switch
// switch($x)
// {
//     case 0 :
//         echo "+";
//         break;  
//     case 1 :
//         echo "-";
//         break;  
//         default:
//             echo "else";
//             break;
// }

//while

// $x =0;
// while ($x<10)
// {
//     echo $x;
//     $x++;
// }

//do while

//for
// for($i=0; $i < 10; $i++)
// {
//     echo $i;
// }

// $num = 5;
// $location = 'tree';

// $format = 'There are %d monkeys in the %s';
// echo sprintf($format, $num, $location);


// function toto($value)
// {
//     echo $value;
// }

// //function const define

// define('PI',3.14159);
// echo "la valeur de PI est " . PI;
// var_dump($condition);

// //tableau
// $tab = [1,3,5,7,9];
// $tab[0]; // 1

// $prenom = ["Laurent","Lucien","Loic"];
// $length = count($prenom);

// //for($i = 0; $i < $length; $i++)
// for($i = 0; $i < count($prenom); $i++)
// {
//     echo $prenom[$i];
// }
// //foreach

// foreach ($prenom as $item) {
//     echo $item;
// }

$tabPrenoms =["Paul","Pierre","Jacques"];

array_push($tabPrenoms,"Jean","Patrick","Nicolas");
var_dump($tabPrenoms);

array_unshift($tabPrenoms,"Jacques");
var_dump($tabPrenoms);

array_pop($tabPrenoms);
var_dump($tabPrenoms);

$first = array_shift($tabPrenoms);
var_dump($first);

//tableau associatif = 1 key  1 value
$cars = [
    "volvo"=> 10, 
    "renault" => 25, 
    "peugeot"=> 2
];

$cars["volvo"];


foreach ($cars as $key => $value) {
   // echo $key . "->>". $value .'<br>';
    printf('%s vaut %s <br>',$key,$value);
}


?>
