<?php

/* 
Une condition a pour objectif de 
1) vérifier la validité d'une opération/instruction 
2) afin de réaliser des actions/opérations en fonction

Pour réaliser une condition, on va utiliser ce qu'on appelle une structure de contrôle => ici on va donc utiliser l'instruction IF

Pour vérifier la validité d'une opération/instructions, je vais utiliser les opérateurs de comparaison

< signifie inférieur à 
exemple : 
1 < 3 = vrai

> signifie supérieur à 
exemple :
10 > 1 = vrai 
9 > 10 = faux

<= signifie inférieur ou égal
exemple : 
131 <= 42 = faux
12 <= 12 = vrai

>= signifie supérieur ou égal
exemple : 
131 >= 42 = vrai
15 >= 12 = vrai

== signifie que les valeurs sont égales 
exemple : 
1 == 1 = vrai 
1 == "1" = vrai 
1 == true = vrai

=== signifie que à la fois la valeur et le type sont égaux
exemple : 
1 === 1 = vrai
1 === "1" = faux
*/

$condition = false ;

if ($condition) {
    echo "Bonjour";
} else {
    echo "Bonsoir";
}

echo '<br>';

if (5 < 3) {
    echo "Je vais bien merci";
} else {
    echo "J'aime le chocolat";
}

echo '<br>';

if (40 === '40') {
    echo "J'aime le week-end";
} else {
    echo "Je n'aime pas les lundis";
}

echo '<br>';

$orange = "orange";
$cerise = "cerise";
$banane = "banane";
$pomme = "pomme";
$maturite = 3 ;
$maceration = 15;

if ($maturite == 3) {
    echo 'C\'est le moment de récolter les '.$pomme;
} elseif ($maturite > 12) {
    echo 'Les '.$pomme.'s sont pourries';
} elseif ($maturite > 8) {
    echo 'On peut faire un cafouti de '.$cerise;
} elseif ($maceration >12) {
    echo 'C\'est le moment de boire une petite liqueur';
} else {
    echo 'Je ne sais pas quoi faire';
}

echo '<br>';

/* Une autre manière d'écrire ce qu'il y a dessus, en utilisant les opérations logiques 
documentation : https://www.php.net/manual/fr/language.operators.logical.php
*/ 
if ($maturite == 3 || $maturite > 12 || $maturite > 8 || $maceration > 12) {
    echo "On va préparer une salade de fruits";
} else {
    echo "Je vais faire la fête tout seul ce soir";
}
echo '<br>';

if ($maturite == 3 && $maceration > 12) {
    echo 'J\'aime bien les liqueurs';
} else {
    echo 'Les fruits sont rotis';
}

// Quelques fonctions utiles à connaître et à utiliser

// empty : vérifie si la valeur contenue dans ma variable est vide ou indefinie. 
echo '<br>';

$age = 1 ;

if (empty($age)){
    echo "attention, vous n'avez pas renseigné votre âge";
    print_r($age);

} else {
    echo "vous avez ".$age. " ans";
    print_r($age);
}

// on va souvent préférer isset. Isset qui est une fonction de php qui va venir vérifier si la variable est définie 

echo '<br>';

if (isset($age)){
    echo "Votre variable est bien initialisée";
} else {
    echo "la variable n'est pas définie";
}

// Qu'est-ce que l'opérateur et l'écriture ternaire ? Dans la réalité, on se retrouve souvent à définir une variable en fonction d'un test ou bien déclencher des action en fonction d'un test, c'est-à-dire d'une condition

// Par exemple, quelle heure est-il ?
echo '<br>';
$heure = 12 ;

// S'il est moins de 20h, je suis en forme, sinon je suis fatiguée
if ($heure < 20) {
    echo 'je suis en forme';
} else {
    echo 'je suis fatiguée';
}
echo '<br>';
$etat = $heure < 20 ? 'Je suis en forme' : 'Je suis fatiguée';
 echo $etat;
 


/* Les boucles nous permettent d'exécuter une MEME série d'instructions plusieurs fois. Par exemple, si j'ai envie d'écrire 20 <li> en utilisant html, je suis obligé de faire du copié/collé (ou emmet ca va plus vite). Avec PHP, je vais pouvoir générer mes li via une boucle. */ 

$i = 20;

for ($i = 0 ; $i <=20 ; $i++){
    echo "<li>Je suis un li </li>";
}

// Nous avons le FOR, le WHILE, et on a le FOREACH

/* FOR 
En java 
for (int i=1 ; i < 100 ; i++){
    system.out.print(i);
}
*/

for ($i=1 ; $i < 100 ; $i++){
    echo $i;
}

/*
Dans une boucle de type FOR j'ai donc 3 instructions essentielles : 
1) l'initialisation
2) la condition
3) l'incrémentation
*/

/* La boucle WHILE permet de boucler tant que la condition définie dans le while est vrai. Tant que la condition est vrai on boucle, dès qu'elle est fausse on s'arrête */

$economie = 0;

while($economie < 100){
    $economie+=10;
    echo "Je continue de travailler";
    echo '<br>';
}
echo "C'est bon je peux arrêter de travailler";

/* La boucle do-while : la principale différence de la boucle do-while par rapport à la boucle while est que la première iteration de la boucle do-while est toujours exécutée (l'expression est testée à la fin de la première itération), ce qui n'est pas le cas lorsque vous utilisez une boucle while (la condition est vérifiée dès le début de chaque itération)*/

echo '<br>';

$i = 5;

do {
    echo $i;
} while ($i > 9);


// Déclaration et initialisation du compteur
$i = 0;
// Boucle générant la table de multiplication du 8
do
{
  echo "8 x ". $i . " = " . (8*$i) . "<br/>";
  // Incrémentation du compteur
  $i++;
}
while($i <= 10);

// le FOREACH va me permettre de parcourir chacun des éléments d'un tableau et de faire des instructions.

$fruits = [
    'rouge'=>'cerise', 
    'jaune'=>'banane', 
    'vert'=>'pomme', 
    'violet'=>'citrons'
];

// Ici on stocke la valeur de chaque élément du tableau $fruits dans la variable $fruit
foreach ($fruits as $fruit){
    echo $fruit ; 
    echo '<br>';
};

// Ici on stocke la valeur de chaque élément du tableau $fruits dans la variable $fruit et l'index ou clé de chaque élément du tableau dans $index
foreach ($fruits as $index => $fruit){
    echo "le ".$fruit."c'est ".$index;
    echo '<br>';
}

/* Pour définir une fonction en php, j'utilise le mot-clé function suivi du nom que je donne à ma fonction et ensuite je déclare ma fonction. 
function NOM DE MA FONCTION() DECLA de la fonction 
*/
// ICI je déclare ma fonction
function DisplayHello(){
    echo 'Hello Je suis une fonction';
}

// ICI j'utilise ma fonction
DisplayHello();

function CalculSurface($longueur, $largeur){
    return $longueur*$largeur;
}

$calcul = CalculSurface(2, 5);
var_dump($calcul);

function CalculPerimetre($longueur, $largeur){
    $perimetre = 2 * ($longueur+$largeur);
    return $perimetre;
}

$calculPerimetre = CalculPerimetre(5, 10);
var_dump($calculPerimetre);

function FaisDuCafe(string $water, string $coffeeSeeds){
    return "Une tasse ".$water." avec ".$coffeeSeeds;
}

$tasseCafe = FaisDuCafe('eau', 'arabica');

var_dump($tasseCafe);

?>