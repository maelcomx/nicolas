<?php 
    // $a = 15;
    // $b = 10;
 
    // echo "La somme de $a et $b est de : " . ($a / $b);
    // $a = ["Nicolas", "Ismael", "Carlos", "Evra"];

    // $fruit = [
    //     "Pomme",
    //     "Mangue",
    //     "Orange",
    //     "Ananas",
    //     "Citron",
    // ];

    // $fruit[] = "Pomme de terre";
    // $fruit[2] = "Un fruit";

    // array_push($fruit, "Tomate", "Banane");


    $etudiants = [
        "E1" => [
            "nom" => "Aka",
            "prenoms" => "Nicolas"
        ],
        "E2" => [
            "nom" => "Kourouma",
            "prenoms" => "Ismael"
        ]
    ];


    // echo "<pre>";
    //     var_dump($etudiants["E2"]["prenoms"]);
    // echo "</pre>";
    // echo "<hr>";

    // $abc = 10;
    // $abc += 10;
    // echo $abc;


    // $x = "10";
    // $y = 10;

    // echo $x === $y;

// Déclaration de classes
class Etudiant { }
class Professeur { }

// Instanciation d'un objet de type Etudiant
$hugo = new Etudiant();
// Test du type de l'objet
if($hugo instanceof Etudiant) {
    echo '<p style="color:red">Hugo est un étudiant !</p>';
} else {
    echo 'Hugo est un professeur !';
}