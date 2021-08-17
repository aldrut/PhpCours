let maVariable;

maVariable = "du texte";

let uneAutreVariable = 23;
//string 
let chaine ="une chaine de caract";
let type = typeof chaine;
//number
let nb1 = 10;
let nb2 = 5.7;
//boolean
let vrai = true;
let faux = false;
//concat string
"chaine1"+"chaine2";

// + - * / %
//opératreur d'affectation
// += -= /= %=

//opérateur de comparaison
// < > <= >= == != === !==
10 == "10"; /*vrai*/
10 === "10"; /*faux*/

let condition = true, condition2 = true;
if(condition)
{ /* */}
if(condition)
{    /**/}else{/**/}
if(condition){/**/}
else if(condition2){/**/}
else{/**/}

//opérateur logique
// &&(et) ||(ou) !(non)
vrai && vrai; //vrai
vrai || faux; //vrai
!vrai; // faux

//opérateur ternaire
//(condition) ? "":"";

let x = 0;
x >=0 ? console.log("+"):console.log("-");

//switch
switch(x)
{
    case 0 :
        console.log("+");
        break;  
    case 1 :
        console.log("-");
        break;  
        default:
            console.log("else");
            break;
}
//while

x =0;
while (x<10)
{
    console.log(x);
    x++;
}

//do while

//for
for(let i=0; i < 10; i++)
{
    console.log(x);
}

function toto(msg)
{
    msg = "toto est de retour";
    console.log(msg);
}

const pi = 3.14159;

//tableau indicé
let tab = [1,3,5,7,9];
tab.push(11);
tab[0]; // vaut 1
tab[1]; // vaut 3

let prenom = ["Laurent","Lucien","Loic"];

for(let i = 0; i < prenom.length; i++)
{
    console.log(prenom[i]);
}

//push add 
//unshift insert au début 
//pop retire le dernnier 
//shift

let cars = 
{
    "volvo" :10,
    "renault" : 25,
    "peugeot" : 2
}

cars.volvo;
cars["volvo"];
