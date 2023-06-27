<?php 

//esercizio 1

//creo le 4 variabili
$int = 6;
$float = 3.2;
$bool = true;
$string = "I'm gonna be the next king of the pirate";

//stampo tipo di dato
// var_dump($int);
// var_dump($float);
// var_dump($bool);
// var_dump($string);

//converto in costanti

//non riesco le creo da 0

const INTEGERR = 6;
const FLOATT = 3.2;
const BOOLEANO = false;
const STRINGA = "I'm gonna be the nest king of the pirates";

// var_dump(INTEGERR);
// var_dump(FLOATT);
// var_dump(BOOLEANO);
// var_dump(STRINGA);

//correzione esercizio 1

//su internet ho trovato questo metodo per assegnare i valori di una variabile ad una costante

define('MYINTEGERR',"$int");
var_dump(MYINTEGERR);
define('MYFLOAT' , "$float");
var_dump(MYFLOAT);
define('MYBOOLEAN' , "$bool"); //su terminale ora mi stampa 1 invece che true
var_dump(MYBOOLEAN);
define('MYSTRING' , "$string");
var_dump(MYSTRING);





//esercizio 2


$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
//  lo cancello perche abbiamo gia variabile con stesso valore $text6 = '$text2';
$text7 = 'bevuto';
$text8 = "tutto";

var_dump("$text1 $text2 $text3$text4 $text5 $text2 $text7 $text8.");

//esercizio 3


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
      'oscura',
      'era',
      89,
      [
        'mezzo',
        [
          'cammin',
          'Nel',
          [
            'selva',
            'la',
            [
              'via',
              'una',
              true,
            ]
          ],
        ]
      ],
      'ritrovai',
      'per'
    ],
    'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
      'Virgilio',
      'smarrita',
      'ché'
    ]
  ];
  var_dump($words1);
  var_dump($words2);

  //modifico i valori che non mi servono
  $words1[1] = "del";
  $words1[6][2] = "di";
  $words1[6][0] = "oscura,";
  $words2["elemento3"][1] = "smarrita.";

  //imbastisco come si deve
  $spazio = " ";

  //creo la sentence finale
  $finalSentence = $words1[6][3][1][1] . $spazio . $words1[6][3][0] . $spazio . $words1[1] . $spazio . $words1[6][3][1][0] . $spazio . $words1[6][2] . $spazio . $words2["elemento2"] . $spazio . $words1[2] . $spazio . $words1[4] . $spazio . $words1[6][4] . $spazio . $words1[6][5] . $spazio . $words1[0] . $spazio . $words1[6][3][1][2][0] . $spazio . $words1[6][0] . $spazio . $words2["elemento3"][2] . $spazio . $words1[6][3][1][2][1] . $spazio . $words1[7] . $spazio . $words1[6][3][1][2][2][0] . $spazio . $words1[6][1] . $spazio . $words2["elemento3"][1];
  var_dump($finalSentence);









