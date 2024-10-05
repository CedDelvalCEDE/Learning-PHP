<?php

// exercices 1

/*

$iter = 5;
while ($iter >= 1) {
    echo $iter . PHP_EOL;
    $iter--;
}

*/

// exercices 2

/*

$val_start = 5;
$val_end = 20;
while ($val_start <= $val_end) {
    echo $val_start . PHP_EOL;
    $val_start++;
}

*/

// exercices 3

/*

$random_nb = rand(1,20);
$fail = 0;
$entry = readline("Entrez un nombre entre 1 et 20 :");
while ($random_nb != $entry) {
    $fail++;
    if ($entry < $random_nb) {
        echo "le nombre est plus grand" . PHP_EOL;
    }
    else {
        echo "le nombre est plus petit" . PHP_EOL;
    }
    $entry = readline("Entrez un nombre entre 1 et 20 :");
}
echo "Bravo, c'était bien $entry ! vous avez fait $fail erreurs.";

*/

// exercices 4

/*

$laFineEquipe = ['Claudy', 'Jean-Claude', 'Laurence'];
foreach ($laFineEquipe as $prenom) {
    echo "$prenom" . PHP_EOL;
}

*/

// exercices 5

/*

$laFineEquipe = ['Claudy', 'Jean-Claude', 'Laurence'];
foreach ($laFineEquipe as $key => $prenom) {
    echo "$laFineEquipe[$key]" . PHP_EOL;
}

*/

// exercices 6

/*

$laFineEquipe = ['Claudy', 'Jean-Claude', 'Laurence'];
for ($i = 0; $i <= 2; $i++) {
    echo "$laFineEquipe[$i]" . PHP_EOL;
}

*/

// exercices 7

/*

$laFineEquipe = ['Claudy', 'Jean-Claude', 'Laurence'];
for ($i = 2; $i >= 0; $i--) {
    echo "$laFineEquipe[$i]" . PHP_EOL;
}

*/

// exercices 8

/*

$matrice = [
    ['-1-', '-2-', '-3-'],
    ['-4-', '-5-', '-6-'],
    ['-7-', '-8-', '-9-']
];
$resultat = "";
foreach ($matrice as $line) {
    foreach ($line as $number) {
        $resultat .= $number;
    }
    $resultat .= PHP_EOL;
}
echo $resultat;

*/

// exercices 9

$matriceHauteurLargeur = 3;
$resultat = "";
for ($i = 1; $i <= 9; $i++) {
    $resultat .= "-$i-";
    if ($i % 3 == 0) {
        $resultat .= PHP_EOL;
    }
}
echo $resultat;

?>