<?php


$n1 = 1;
$n2 = 2;
$n3 = 3;

$t1 = "a";
$t2 = "b";
$t3 = "c";



// ====================================================================================
// FUNCTION / IF ELSEIF ELSE
// function condition($a, $b, $c)
// {
//     if ($a < $b && $b < $c) {
//         echo "les paramètres ont été entrés dans l'ordre croissant! => $a, $b, $c";
//     } elseif ($a > $b && $b > $c) {
//         echo "les paramètres ont été entrés dans l'ordre décroissant! => $a, $b, $c";
//     } else {
//         echo "les paramètres ont été entrés dans le désordre! => $a, $b, $c";
//     }
// };

// condition(99, -5, 3);
// ====================================================================================
// MULTIPLICATION
// function getMulti(float $nf1, float $nf2)
// {
//     $rslt = number_format($nf1 * $nf2, 2, ',', '`');
//     //  var_dump(round($nf1 * $nf2, 2));
//     echo "<h1>Le produit de</h1>
//     <h2> $nf1 x $nf2 est : </h2>$rslt 
//     <br>
//     <br>
//     (arondi à 2 décimals) <br>";
//     return $rslt;
// }

// function verifRetour(float $nf1, $nf2)
// {
//     $nfVerif = getMulti($nf1, $nf2);
//     echo "<br> Vérification => $nfVerif";
// }
// var_dump(getMulti(2, 6));

// ====================================================================================
// RETRAITE
// function getRetired(int $age)
// {
//     $ageRetraite = 64;
//     $diff = sqrt(($ageRetraite - $age) * ($ageRetraite - $age));

//     if ($age < $ageRetraite) {
//         echo "Il vous reste $diff ans avant la retraite!";
//     } elseif ($age > $ageRetraite) {
//         echo "Vous êtes à la retraite depuis $diff ans!";
//     } else {
//         echo "Youpiii!!! Cette année vous prenez votre retraire!";
//     }
// }
// getRetired(164);
// ====================================================================================
// CAPITALES
// function capitalCity(string $pays)
// {
//     switch ($pays) {
//         case "france":
//             echo " La capitale de $pays est Paris!";
//             break;
//         case "allemagne":
//             echo " La capitale de $pays est Berlin!";
//             break;
//         case "italie":
//             echo " La capitale de $pays est Rome!";
//             break;
//         case "portugal":
//             echo "La capitale du $pays est Lisbonne!";
//             break;
//         default:
//             echo "$pays n'est pas présent dans la base de données...";
//     }
// }

// capitalCity("italie");
// ====================================================================================
// TABLEAUX
// $tNbr = [2, 3, 61, 86, 198, 56, 354, 0, 8];

// var_dump($tNbr);
// echo "<br>";
// // echo $tNbr[0] * $tNbr[1];

// function displayT($t)
// {
//     foreach ($t as $v) {
//         echo "<br> $v";
//     }
// };

// displayT($tNbr);
// ====================================================================================
// DATE ET HEURE
// $d1 = new DateTime();
// $d2 = new DateTime("2018-09-11");
// $d3 = new DateTime("1988-01-27");
// $diffD1D2 = $d1->diff($d2);

// echo 'Cette page a été générée le ' . $d1->format('d/m/Y à H\hi\m\i\ns\s') . ' (heure locale)';
// echo "<br>";
// echo "$diffD1D2->days jours. Soit $diffD1D2->y années, $diffD1D2->m mois, $diffD1D2->d jours!";
// echo "<br>";

// $d4 = "1988-11-10";
// $d5 = (new DateTime())->format("Y-m-d");
// $diffDate = (new DateTime($d4))->diff(new DateTime());

// echo "Entre date départ ($d4) et date d'arrivée ($d5), il s'est écoulé :
// <br>
// $diffDate->y années
// <br>
// $diffDate->m mois
// <br>
// $diffDate->d jours!";

// $datetime_1 = '1988-01-27 11:15:30';
// // $datetime_2 = '2022-04-12 13:30:45';

// $start_datetime = new DateTime($datetime_1);
// $diff = $start_datetime->diff(new DateTime());

// echo "<h3>Depuis votre naissance</h3>";
// echo 'Il s\'est écoulé' . $diff->days . ' jours au total<br>';
// echo '<h3>Vous avez exactement : </h3> ';
// echo $diff->y . ' ans<br>';
// echo $diff->m . ' mois<br>';
// echo $diff->d . ' jours<br>';
// echo $diff->h . ' heures<br>';
// echo $diff->i . ' minutes<br>';
// echo $diff->s . ' secondes<br>';
// echo "<br><br>";
// var_export($diff);
// ====================================================================================
// CONTROLE DE SAISIE

$mmodel1 = "%(www\.)([a-zA-Z0-9\.]+)\.([a-z]+)%";
$exp1 = "www.gsfdg.fr www.plged.com www.geqalm.ch";
$rgx1 = preg_match_all($mmodel1, $exp1, $matches1);
// ---------------------
$model2 = "%(^[^ ]{9,})$%";
$exp2 = "dr98749847 fdbsfbfb";
$rgx2 = preg_match($model2, $exp2, $matches2);
// ---------------------
$model3 = "%toto%";
$exp3 = " gsg toto fqgljlj cvdsftoto totodfgreqs";
$rgx3 = preg_match_all($model3, $exp3, $matches3);
// var_export(count($matches3[0]));

// ---------------------

$users = [
    'joe' => 'Azer1234',
    'jack' => 'Azer-4321',
    'admin' => '1234_Azer',
];

var_export($users['joe']);
echo '<br>';
var_export(preg_match("%[!\-_]+|[A-Z]+|[1]+%", $users['joe']));
echo '<br>';
