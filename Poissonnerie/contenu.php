<?php

$poissons = [
   [
        "nom" => "Carpe",
        "description" => "C'est un poisson tendre mais débile",
        "prix" => 43,
        "image" => "carpe.jpg",
        "eau" => "mer",
        "protege" => false
       
  ],
    
    [
        "nom" => "Colin",
        "description" => "Un beau poissons pêcher dans le sud",
        "prix" => 34,
        "image" => "colin.jpg",
        "eau" => "douce",
        "protege" => false
    ],

    [
        "nom" => "Cabillaud",
        "description" => "C'est le prince du rayon surgelé",
        "prix" => 26,
        "image" => "cabillaud.jpg",
        "eau" => "mer",
        "protege" => false
    ],    

    [
        "nom" => "Thon",
        "description" => "C'est un poisson qui fini souvent en boîte",
        "prix" => 78,
        "image" => "thon.jpg",
        "eau" => "mer",
        "protege" => false
    ],
    
    [
        "nom" => "truite",
        "description" => "C'est bon avec de l'huile",
        "prix" => 46,
        "image" => "truite.jpg",
        "eau" => "douce",
        "protege" => false
    ],

    [
        "nom" => "Dauphin",
        "description" => "C'est bon avec de l'huile",
        "prix" => 46,
        "image" => "dauphin.jpg",
        "eau" => "mer",
        "protege" => true
    ],

    [
        "nom" => "requin Marteau",
        "description" => "C'est bon avec de l'huile",
        "prix" => 46,
        "image" => "requinMarteau.jpg",
        "eau" => "mer",
        "protege" => true
    ],
];
$affichagePoisson = false;
$typeDePoisson = false;

if( isset($_GET['type']) ){
     $typeDePoisson = $_GET['type'];
    }
    $contenuDeLaPage = "";

   

    foreach($poissons as  $poisson)
      {        
       $cartePoisson = "<div class='card mb-3 col-3 text-center mx-2'>
            <h3 class='card-header'>Poisson</h3>
            <div class='card-body'>
                <h5 class='card-title'>$poisson[nom]</h5>
                <h6 class='card-subtitle text-muted'></h6>
            </div>
            <img src='image/$poisson[image]' alt='' width='100px' class='photoPosition'>
            <div class='card-body'>
                <p class='card-text'>$poisson[description]</p>
                <p class='card-text'>$poisson[prix] € le kilo</p>
            </div>
        </div>";

        
        if(( !$typeDePoisson || $typeDePoisson == $poisson['eau']) 
        
        &&
        
       (!$poisson['protege'] || $isLog == true)){

            $contenuDeLaPage.=$cartePoisson;
            
        }
        };
        
      
?>
