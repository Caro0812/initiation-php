<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Initiation à Php<h1>
    
    <?php

    //php Mysql donne des ordres pour aller chercher  et faire les actions
    //Variables : informations qui sont stockées temporairement. Elles ne sont valables que sur la page en question
    //afficher le nom, prenom et lage d'une personne
    //Variable $= valeur

    $nom='Chicouf';//chaînes de caractères (string)
    $prenom='Pierre';
    $age=26; //nombre (int)
    $date_jour=date('d/m/y');
    //instruction d'affichage = echo $nom

    //Je m'appelle $nom $prenom et j'ai $age ans - pour les chiffres on ne met pas de ''
    //le point permet d'ajouter et de faire des espaces entre les caractères
    // = permet de définir une valeur
    // === strictement égal

    echo $nom;
    echo'mon nom est'.' '.$nom.' '.$prenom.' '.$age. '<br>';
    //Je m'appelle =>échappé le caractère

    echo 'Je m\'appelle ' .$nom.'</h1>';

    //afficher : aujourd'hui c'est l'été
    echo 'Aujourd\'hui c\'est l\'été<br>Nous sommes le '.$date_jour.'<br>';

    //Opérations :
    $taux_horaire = 10;
    $nbre_heure=600;

    $resultat=$taux_horaire * $nbre_heure;
    //ecriture possible = $resultat=10*600
    echo $resultat.'<br>';


    //LES CONDITIONS
    //Si Dupont a 18ans, il pourra voter et accéder au formulaire
    //Dupont=18 =>vrai(true) = booleen (vrai ou faux)
    //S'il a moins de 18 il ne pourra pas voter n'y accéer au formulaire -> faux (false)
    //Si (if) dupont est plus grand ou égale à 18 -> il accède à la page
    // > + grand / < moins grand / == égale
    //if = si
    //else = sinon
    //else if = sinon si

    if($age>=18){
        //instructions
        echo 'Bravo, tu peux voter !'.'<br>';
    }
    else{
         //instructions dans le cas ou la réponse est false
        echo 'Attends un peu, tu pourras voter dans quelques années'.'<br>';
    }
   
    //LES FONCTIONS
    //une suite d'instructions à réaliser
    //quand on se connecte sur une site, on vérifie le pseudo (on se connecte) et on affiche un message

    function bienvenue(){
        // on récupère les info dans le bdd (dans els variables)
        //on affiche un message
            $pseudo=' Carole';
        //on affiche un message
        //!$pseudo=> == false
        //if($pseudo)=>$pseudo==true
            if($pseudo){
            echo 'Bienvenue' .$pseudo;
            }
            else echo 'Merci de vous identifier';
        }
        echo bienvenue();

    //les boucles

    // Les tableaux => listes avec des clés
    //array
    //nom = tous : les noms, prénoms, âges : ID
    //20 lignes (20 personnes) = chaque ligne aura un identifiant unique
    //1 /Dupont/Pierre/30
    //2 /chicouf/Pierre/24
    //3 /hernandez/Pierre/18


    // Création d'un blog
   // $articles [ ]llll
    ?>
   

</body>
</html>