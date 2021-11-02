<h1>Aujourd'hui on découvre PHP</h1>

<?php

// J'écris un commentaire sur une ligne en php
/*
J'écris un commentaire sur plusieurs lignes

Ici j'ai écris du html à l'intérieur de mon bloc de code php, cela me génère une erreur 
<h2> Voici du html dans du php </h2>
*/

// Je créé du code hrml via php grâce à ma fonction native php echo
echo '<h2> Voici du html généré par du php</h2>'; 

// J'affiche du texte
echo 'Coucou je suis content';

// Le lien vers la documentation PHP, notre meilleure amie : https://www.php.net/manual/fr/

// Une varaible c'est une boîte dans laquelle on va stocker une information, une donnée. 

// Je créé une variable de type string (chaîne de caractère), contenant la valeur Juliette.
// Exemple de données scalaires. C'est-à-dire de donnée unique. 
/*
- string = une chaîne de caractère Exemple : "Salut"
- integer = un nombre entier Exemple : 42
- boolean = un boléen Exemple : false ou true soit vrai ou faux
- float = un nombre à virgule Exemple : 36.89
*/
$prenom = 'Juliette';
echo '<br>';
echo $prenom ;

echo '<br>';

$prenom = 'Eric';
echo $prenom;

// Ici je crée une variable de type integer.
$age = 18;
echo '<br>';
echo $age;

// Ici je crée une variable de type float
$prix = 9.99;

// Ici grâce à la fonction var_dump, j'inspecte ma variable : à la fois son type et sa valeur
// https://www.php.net/manual/fr/function.var-dump
var_dump($age);

// Autre moyen d'inspecter ma variable, la fonction print_r()
print_r($prix);

// Ici j'ai initialisé une variable dont le type est un boléen et la valeur false
$blonde = false;
echo '<br>';

// Exemples de constantes en php. La valeur d'une constante ne peut jamais être modifié pendant l'exécution du script. Le nom d'une constante doit répondre à des conventions de nommage, c'est-à-dire que son nom doit être écrit en MAJUSCULE. Par convention, les constantes sont définies en début de script (et non pas ici au milieu);
define('NOM_DE_MON_CHIEN', 'Lhassa');

echo NOM_DE_MON_CHIEN;

/*
Les données composées permettent de stocker plusieurs données scalaires.
Les tableaux sont des données composées.

2 types de tableaux

1. les tableaux SIMPLES
*/
$fruits = ['cerises', 'bananes', 'kiwi', 'citrons'];

$personne = ['Mathilde', 35, false, 'Avenue de Marville', 35400];

var_dump($personne);

var_dump($fruits);

// L'échappement \ va nous permettre de signifier à php que nous utilisons le caractère non pas comme une instruction php mais juste comme un caractère typographique. 
$prenom = "Micheline";
$phrase = 'J\'écris';

// Echo ne fonctionne pas sur des données composées comme les tableaux. J'ai une erreur si je l'utilise.
echo $fruits;
echo '<br>';
print_r($fruits);

// Je peux faire plein de trucs avec les tableaux, la documentation php me dit tout : https://www.php.net/manual/fr/book.array.php

// exemple j'ai envie de rajouter une valeur dans mon tableau $fruits

$fruits[] = "poires";

var_dump($fruits);

array_push($fruits, 'mangues', 'noisettes', 'figues');

var_dump($fruits);

var_dump($fruits[5]);

echo $fruits[5];

/*

L'index d'un tableau, si non spécifié, commence automatiquement à 0. Cependant, si je veux je peux moi-même définir les valeurs de l'index. Dès lors mon tableau devient un tableau associatif. 
*/
 $personne = [
     'prenom' =>'Mathilde', 
     'age' => 35, 
     'blonde' => false, 
     "rue" => "Avenue de Marville", 
     'codePostal' => 35400
];

$fruits = [
    'rouge' => 'cerises',
    'jaune' => 'bananes',
    'poilu' => 'kiwi',
];

var_dump($personne['codePostal']);

// Comment concatene-t-on en php ? 

$prenom = "Solène";
$age = 22 ;
echo '<br>';
echo 'Bonjour je m\'appelle '.$prenom.' j\'ai '.$age.' ans.';

/* En php, on peut réaliser toutes les opérations arithmétiques */
echo '<br>';
// L'addition 
echo 4+4; 
echo '<br>';
// La soustraction
echo 12-2;
echo '<br>';
// La multiplication
echo 4*4;
echo '<br>';
// La division
echo 25/10;
echo '<br>';
// Le modulo
echo 25 % 2; 


// On peut faire la même chose avec des variables
$numbreUn = 15 ;
$numbreDeux = 12;
echo '<br>';

echo $numbreUn+$numbreDeux;
echo '<br>';

/* 
PHP nous offre des raccourcies pour modifier une variable. 
Par exemple, on va vouloir incrémenter une variable, c'est-à-dire augmenter sa valeur de 1
*/

// J'ai des sous à la banque

$economies = 2000 ;

// Tous les jours, je rajoute un euro dans économies;
$economies++;

var_dump($economies);

// Je soustrais 1 euros à mes economies

$economies--;

var_dump($economies);
echo '<br>';

/* 
Les opérateurs combinés 
Ok on a vu comment soustraire ou rajouter 1, mais comment je fais si je veux rajouter ou soustraire plus de 1, par exemple 3
*/
$loyer = 600;
$salaire = 1500;

// Ce mois-ci je décide d'économiser tout mon salaire

$economies+=$salaire;

var_dump($economies);

// Maintenant je dois payer mon loyer via mes économies

$economies-=$loyer;

var_dump($economies);

?>