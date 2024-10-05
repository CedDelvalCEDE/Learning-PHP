<?php

declare(strict_types=1);
define('DS', DIRECTORY_SEPARATOR);

// exercices 1

function moyenne_exo(array $arr_nb) : void {
    $total = array_sum($arr_nb);
    $count = count($arr_nb);
    $moyenne = $total / $count;
    $str_resultat = "[ " . implode(separator:" , ",array:$arr_nb) . " ] = " . $moyenne;
    echo $str_resultat;
}

// $tab = [5,2.3,6,4,8.2,9];
// moyenne_exo($tab);

// exercices 2

function moyenne_nb(array $tab) : float {
    $total = array_sum($tab);
    if ($total == 0) {
        return 0;
    }
    $count = count($tab);
    return $total / $count;
}

function convert_array_to_str(array $tab) : string {
    return "[ " . implode(separator:" , ",array:$tab) . " ]";
}

// $liste_de_nombres = [8, 7, 6.5, 4.5, 7, 8];
// $moyenne_tab = moyenne_nb($liste_de_nombres);
// $liste_de_nombres = convert_array_to_str($liste_de_nombres);
// echo "La moyenne des nombres $liste_de_nombres : $moyenne_tab";

// exercices 3

function calculer_somme(array $tab): array {
    $fine_array = [];
    $sum = 0;
    // ira plus vite avec array_filter : https://www.php.net/manual/fr/function.array-filter.php
    foreach ($tab as $nb) {
        if (!array_search(gettype($nb), ["string", "array", "object", "resource"])) {
            $sum += $nb;
            $fine_array[] = $nb;
        }
    }
    return [$sum, $fine_array];
}

function calculer_moyenne(array $tab): array {
    $info_sum = calculer_somme($tab);
    return [$info_sum[0] / count($info_sum[1]), $info_sum[1]];
}

function convertir_tableau_str(array $tab): string {
    return "[" . implode(separator:", ",array:$tab) . "]";
}

function afficher_moyenne(array $tab): void {
    $info_ave = calculer_moyenne($tab);
    $out_array = array_diff($tab, $info_ave[1]);
    $out_array = convertir_tableau_str($out_array);
    $info_ave[1] = convertir_tableau_str($info_ave[1]);
    echo "La moyenne des nombres $info_ave[1] : $info_ave[0]" . PHP_EOL;
    echo "Les valeurs ayant été rejetées $out_array " . PHP_EOL;
}

// $liste_de_nombres = [8, 'trois', 7, 6.5, 'cinq', 4.5, 7, 8];
// afficher_moyenne($liste_de_nombres);

// exercices 4

function calculer_montant_tva_prixHT($prix, $tva) {
    return $prix * ($tva / 100);
}
function ajouter_tva(float $prix, float $tva = 21) {
    return $prix + calculer_montant_tva_prixHT($prix, $tva);
}

// echo ajouter_tva(100) . PHP_EOL;
// echo ajouter_tva(100, 12) . PHP_EOL;

//exercices 5

function calculer_montant_TTC($prix, $tva) {
    return (($prix * $tva) / (100 + $tva));
}
function ajouter_tva_b(float $prix, float $tva = 21) {
    return $prix - calculer_montant_TTC($prix, $tva);
}

// echo ajouter_tva_b(121) . PHP_EOL;
// echo ajouter_tva_b(112, 12) . PHP_EOL;

// exercices 6

function fibonacci($n, $tab = [0,1]) {
    if (count($tab) + 1 <= $n) {
        $tab[] = $tab[count($tab) - 1] + $tab[count($tab) - 2];
        return fibonacci($n, $tab);
    }
    return $tab;
}

// $n = 10;
// $suiteFibo = fibonacci($n);

// echo "Suite de Fibonacci jusqu'au terme F($n) : " . PHP_EOL;
// print_r($suiteFibo);

?>