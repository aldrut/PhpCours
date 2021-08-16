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



