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
?>
        <h3>Les boucles en Ph</h3>
<?php
        $nombre = 0;

        while($nombre<=40){
            // instructions
            echo 'ceci est la ligne N°'.$nombre. '<br>';
            $nombre+=1;
        }

        /* ++ => +1
        +=2 => +2
        decrementer
        -- => -1
        -=2=> -2
        */
            
?>
 <p>2024 => Afficher les année bisextiles (4ans) de cette année jusqu'en 2025</p>
    <?php
            $annee = 2024;
            while($annee<=2050){
                echo $annee.'<br>';
                $annee+=4;
            }
    // autre façon de faire ue boucle
    for($age=20;$age<=30;$age+=2){
        echo $age. '<br>';
    }

    // boucle pour l'affichage des données contenues dans les tableaux

    // Les tableaux => listes avec des clés
    //array
    $tableau =[5,2,3,'voiture','oiseau'];

    //5=0
    //2=1
    //3=2
    //voiture=3
    //oiseau=4

    echo $tableau[0].'<br>';
    
    //nom = tous : les noms, prénoms, âges : ID
    //20 lignes (20 personnes) = chaque ligne aura un identifiant unique
    //1 /Dupont/Pierre/30
    //2 /chicouf/Jean/24
    //3 /hernandez/José/18

    $client =[ 
                'nom'=>'Dupont',
                'adresse'=>'Rue de la république',
                'ville'=>'Toulouse',
    ];
        echo $client['nom'] .' '. $client['adresse'].' ' .$client['ville'];

    $clients = [ 
        ['nom'=>'Dupont',
        'adresse'=>'Rue de la république',
        'ville'=>'Toulouse'
        ],
        ['nom'=>'Fernandez',
                'adresse'=>'Rue de la république',
                'ville'=>'Montpellier'],
        ['nom'=>'Durand',
                'adresse'=>'Rue de la république',
                'ville'=>'Avignon'],
        ['nom'=>'François',
                'adresse'=>'Rue de la république',
                'ville'=>'Biarritz'],
        ['nom'=>'Bidouche',
                'adresse'=>'Rue de la république',
                'ville'=>'Bayonne']
    ];

    //boucle pour l'affichage des données contenues dans les tableaux
    // pour chaque = foreach
    foreach($clients as $alias=>$item){

        echo '<h3>' .$item['nom']. '</h3><p>' .$item['adresse']. ' ' .$item['ville'].'</p>';
    }


    // Création d'un blog
   //$articles = [ ];
    ?>
   

</body>
</html>