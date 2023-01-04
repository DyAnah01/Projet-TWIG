<?php
require __DIR__ . '/vendor/autoload.php'; //méthode magic , recherche le fichier automatiquement
//autocharger les fichiers (autoload)

use Twig\Environment; //dans le namespace Twig récupère la class Environnement
use Twig\Loader\FilesystemLoader; 

$loader = new FilesystemLoader(__DIR__ .'/views');
$twig = new Environment($loader, [
    'cache' => false   
]);
//  nom, prenom, age , profession


$user = [
    'nom'=>'Rh',
    'prenom'=>'Diana',
    'age'=>'22',
    'profession'=>'étudiante'
];

// créer un tableau qui contient plusieurs articles de vêtements pour homme et femme vous devez avoir au moins 5 articles pour homme/femme ( name, picture, price, content, categorie, disponible ).
$articles = [
    [
        'name'=> 'Combishort blazer - Gris clair chiné',
        'picture'=> 'https://www.pimkie.fr/dw/image/v2/AAYN_PRD/on/demandware.static/-/Sites-pimkie-master-catalog/default/dwc98a7afc/images/781885_859A08_portrait_HD_1.JPG?sw=760&sh=938',
        'price'=> '39,99 €',
        'content'=>' Réf : 781885859A08
        - Combishort blazer gris.
        - Manches longues avec épaulettes.
        - Fermeture à double boutonnage avec boutons tissu ton sur ton.
        - Double chaîne métallique amovible sur le côté.
        - Poches côtés sous rabat.
        
        La mannequin mesure 1m73 et porte du S.',
        'categorie'=>'F',
        'disponible'=> true,
        'id'=>1
    ],
    [
        'name'=>'Combishort blazer - Noir',
        'picture'=>'https://www.pimkie.fr/dw/image/v2/AAYN_PRD/on/demandware.static/-/Sites-pimkie-master-catalog/default/dw190feeb5/images/781821_899A08_portrait_HD_1.JPG?sw=760&sh=938',
        'price'=>' 35.99 € ',
        'content'=>' Réf : 781821899A08

        - Combishort blazer noir.
        - Manches longues.
        - Fermeture à double boutonnage.
        - Poches passepoilées avant.
        - Taille élastiquée au dos.
        
        La mannequin mesure 1m75 et porte une taille 36. ',
        'categorie'=>'F',
        'disponible'=> true,
        'id'=>2
    ],
    [
        'name'=>'Veste courte en fausse fourrure - Rose',
        'picture'=>'https://www.pimkie.fr/dw/image/v2/AAYN_PRD/on/demandware.static/-/Sites-pimkie-master-catalog/default/dw68fca321/images/323727_I62A02_portrait_HD_1.JPG?sw=760&sh=938',
        'price'=>'45.99 € ',
        'content'=>' Réf : 323727I62A02

        - Veste courte en fausse fourrure rose fuschia.
        - Poches côtés.
        - Entièrement doublée de tissu ton sur ton.
        
        La mannequin mesure 1m73 et porte du S. ',
        'categorie'=>'F',
        'disponible'=>true,
        'id'=>3
    ],
    [
        'name'=>'Casquette velours ras - Noir',
        'picture'=>'https://www.pimkie.fr/dw/image/v2/AAYN_PRD/on/demandware.static/-/Sites-pimkie-master-catalog/default/dwd28ce151/images/919531_899F48_portrait_HD_1.JPG?sw=760&sh=938',
        'price'=>'12,99 €',
        'content'=>' Réf : 919531899F481010

        - Casquette noire en polaire effet velours ras.
        - Flocage LOVA devant.
        - Réglable par bride métallique couleur argent.',
        'categorie'=>'F',
        'disponible'=>false,
        'id'=>4
    ],
    [
        'name'=>'Lot de 2 chouchous - Rouge',
        'picture'=>'https://www.pimkie.fr/dw/image/v2/AAYN_PRD/on/demandware.static/-/Sites-pimkie-master-catalog/default/dw096c35fb/images/919508_A30I09_portrait_HD_1.JPG?sw=760&sh=938',
        'price'=>' 5,99 € ',
        'content'=>' Réf : 919508A30I091010

        - Lot de 2 chouchous à motif.
        - Un chouchou à motif psychédélique vert et blanc.
        - Un chouchou à motif fleuri.
        - Liseré coloré autour du chouchou.
        - Tissu satiné.',
        'categorie'=>'F',
        'disponible'=>true,
        'id'=>5
    ],
    [
        'name'=>'Pull Tricolore 0079 Noir Chiné Camel Blanc',
        'picture'=>'https://assets.laboutiqueofficielle.com/w_1100,q_auto,f_auto/media/products/2021/05/11/lbo_266242_LBO-1070546-0079_20221128T150421_01.jpg',
        'price'=>'33,99€',
        'content'=>"Coupe cintrée
        Ce produit taille normalement
        Prenez votre taille habituelle
        Taille du mannequin:1m81
        Le modèle présenté est une taille M
        
        COMPOSITION ET ENTRETIEN
        
        65% Polyester, 35% Viscose
        Lavable en Machine à 30°",
        'categorie'=>'H',
        'disponible'=>true,
        'id'=>6
    ],
    [
        'name'=>'Manteau à Capuche Amovible',
        'picture'=>'https://cdn11.bigcommerce.com/s-ktikayh2p6/images/stencil/original/products/618/22452/manteau-a-capuche-amovible__28867.1665620187.jpg?c=1',
        'price'=>'81.99€',
        'content'=>"
        Type:Manteau à capuche
        Fermeture : Zippé et boutonné
        Tissu : Laine,Polyester
        Encolure: Col rabattu
        Détails: Capuche amovible
        Manches: Manches Longues
        Disponible en Noir et Gris
        Disponible en plusieurs tailles.",
        'categorie'=>'H',
        'disponible'=>true,
        'id'=>7
    ],
    [
        'name'=>'Pull patch épaule - fil 100% recyclé - Bleu moyen',
        'picture'=>'https://www.jules.com/dw/image/v2/AAHK_PRD/on/demandware.static/-/Sites-core-master-catalog/default/dw8446b311/images/1001641_11248_V1.jpg?sw=636&sh=636&sm=fit',
        'price'=>'35.99 €',
        'content'=>"Ce pull à manches longues est doté d'un col rond en côtes, d'épaules avec patchs contrastés et d'un bas de corps et des bas de manches en bord-côtes. Sa coupe est regular, pour un porté cool et décontracté. Ce pull convient parfaitement avec un pantalon chino et des chaussures en toile.

        IN PROGRESS
        Ce produit contient minimum 15% de coton recyclé, provenant des chutes de tissus lors de la production d'autres vêtements ou du recyclage de vieux vêtements. Ce qui permet d'économiser les ressources nécessaires à la production de matières vierges.
        Ce produit contient minimum 15% de polyester recyclé, provenant du recyclage de bouteilles en plastiques usagées ou du recyclage de chute de tissus issus de la production d'autres vêtements. L'utilisation de fibres recyclées permet d'économiser les ressources nécessaires à la production de matières vierges.
        
        Le mannequin mesure 1m86 et porte une taille L.",
        'categorie'=>'H',
        'disponible'=>true,
        'id'=>8
    ],
    [
        'name'=>'Tee shirt Ile de la Réunion imprimé placé - Bleu foncé',
        'picture'=>'https://www.jules.com/dw/image/v2/AAHK_PRD/on/demandware.static/-/Sites-core-master-catalog/default/dwbcd80072/images/1003351_11824_V1.jpg?sw=1562&sh=1800&sm=fit',
        'price'=>'15,99€',
        'content'=>"Ce tee shirt imprimé poitrine papaddle, en collaboration avec le graphiste Réunionnais Hyppolyte, possède un col rond et une coupe slim, pour un porté près du corps.

        Le mannequin mesure 1m86 et porte une taille L.
        Article n° : 100335111824 ",
        'categorie'=>'H',
        'disponible'=>true,
        'id'=>9
    ],
    [
        'name'=>'Tee shirt col rond Région auvergne - Gris Anthracite',
        'picture'=>'https://www.jules.com/dw/image/v2/AAHK_PRD/on/demandware.static/-/Sites-core-master-catalog/default/dw870d1de8/images/718411_8200_V1.jpg?sw=1562&sh=1800&sm=fit',
        'price'=>'9,99 €',
        'content'=>"Clin d'œil à la région Auvergne, ce tee shirt à manches courtes et col rond est confectionné en jersey de coton doux et agréable à porter. Il présente une coupe droite idéale pour un style casual, et affiche une inscription graphique humoristique qui recentre sur l'essentiel !

        Le mannequin mesure 1m86 et porte une taille M.
        Article n°: 7184118200 ",
        'categorie'=>'H',
        'disponible'=> false,
        'id'=>10
    ]

];


$page = isset($_GET['page']) ? $_GET['page'] : null;

switch ($page){
    case 'acceuil':
        echo $twig->render('index.html.twig',[ //2paramètres , chemin et variable
        'articles' => $articles
        ]);
    break;

    case 'homme':
        echo $twig->render('hommes.html.twig',[ //2paramètres , chemin et variable
        'articles' => $articles
        ]);
    break;

    case 'femme':
        echo $twig->render('femmes.html.twig',[ //2paramètres , chemin et variable
        'articles' => $articles
        ]);
    break;

    case 'details':
        echo $twig->render('details.html.twig',[
            'articles'=>$articles,
            'id'=>$_GET['id']
        ]);
    break;
    case 'formcontact' :
        echo $twig->render('contact.html.twig', [
            'articles'=> $articles,
        ]);
    break;
    case 'validation' :
        // var_dump($_POST)
        echo $twig->render('recupemail.html.twig', [
            'array' => $_POST,
            // 'articles'=> $articles,
            // 'message1' => $_POST['monmessage'],
            // 'message2' => $_POST['monemail']
        ]);
    break;
    
    default :
        echo $twig->render('index.html.twig',[ //2paramètres , chemin et variable
            'name' => 'DIANA',
            'array' => $user ,
            'articles' => $articles
        ]);
    break;
}



// else{
//     echo "";
// }

// $_GET['page'];

//2paramètres , chemin et variable




?>