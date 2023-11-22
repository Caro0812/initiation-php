<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Lien vers bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php

   /* $articles=[ 
        ['title'=>'Lorem ipsum Dolor 1',
       'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ab libero similique aliquam vero, harum eos voluptatem numquam quaerat unde mollitia fugit sequi veniam, dolorum atque ad fugiat quos assumenda.'
    ],
    ['title'=>'Lorem ipsum Dolor 2',
       'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ab libero similique aliquam vero, harum eos voluptatem numquam quaerat unde mollitia fugit sequi veniam, dolorum atque ad fugiat quos assumenda.'
    ],
    ['title'=>'Lorem ipsum Dolor 3',
       'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ab libero similique aliquam vero, harum eos voluptatem numquam quaerat unde mollitia fugit sequi veniam, dolorum atque ad fugiat quos assumenda.'
    ],
    ['title'=>'Lorem ipsum Dolor 4',
       'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ab libero similique aliquam vero, harum eos voluptatem numquam quaerat unde mollitia fugit sequi veniam, dolorum atque ad fugiat quos assumenda.'
    ]

    ];*/

            //1-requete à la base de donnees
            $bd = mysqli_connect('localhost','root','root','mini blog','8889');

            //2-ecrire la requete sql/ ASC=ascendant / DESC=descendant
            $sql ='SELECT * FROM articles ORDER BY id DESC LIMIT 3';

            //3-envoi la requette au serveur    
            $resultat = $bd->query($sql);
?>
<main class="container">
    <section class="row">
    <?php
            //4-boucle pour aller chercher les articles
            while($item = mysqli_fetch_array($resultat)){

            // 5-afficher les articles avec un echo
           echo '<div class="card col">
                    <div class="card-body">
                        <h5 class="card-title">'.$item['id'].$item['title'].'</h5>
                        <p class="card-text">'.$item['content'].'</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>'; 
    }

    // 6-Fermeture de la connexion à la base de données
    mysqli_close($bd);
    ?>
    </section>
</main>
    </body>
</html>