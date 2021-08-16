<?php

/**ecriture en php d'une déclaration de varibale */
$maVariable ;

//echo gettype($maVariable);

$maVariable ="du texte";

$uneAutreVariable = 23;
//commentaire ou /* */

//indexeur string
$chaine ="du texte";
//récupérer le type
$type = gettype($chaine);

//number 
//integer
$nb1 = 10;
//float
$nb2 = 5.7;
//boolean
$vrai = true;
$faux = false;

//concat string 
$str = "chaine1"."chaine2";

// + - * /
$a = 10;
$b = 15;
$c = 4;
$d = 88;
$sum = $a + $b - $c * $d;

//opératreur d'affectation
$a +=5;
$str .= "chaine3";

//opérateur de comparaison
// < > <= >= == != === !==
10 == "10"; /*vrai*/
10 === "10"; /*faux*/

//structure de contrôle
$condition = true; $condition2 = true;
if($condition)
{ /* */ }
if($condition)
{ /**/ }else{ /**/ }
if($condition){ /**/ }
elseif($condition2){ /**/ }
else{ /**/ }
//opérateur logique
// &&(et) ||(ou) !(non)
$vrai && $vrai; //vrai
$vrai || $faux; //vrai
!$vrai; // faux

//opérateur ternaire
//(condition) ? "":"";

$x = 0;
echo $x >=0 ? "+" : "-";

//switch
switch($x)
{
    case 0 :
        echo "+";
        break;  
    case 1 :
        echo "-";
        break;  
        default:
            echo "else";
            break;
}

//while

$x =0;
while ($x<10)
{
    echo $x;
    $x++;
}

//do while

//for
for($i=0; $i < 10; $i++)
{
    echo $i;
}


var_dump($condition);

?>
