<?php 

$salt = "079c34ed9f0f9b1ab6a2fb401e023f01";

$users =[
    [
        "username" => "patrick",
        "password" => "af55bd2aea94dccf31b95e86be92312d"
    ],
    [
        "username" => "michel",
        "password" => "92925539ec27d9264f67b9160f4488fd"
    ],
    [
        "username" => "hubert",
        "password" => "06e230cc73d584415d64d447250dc6ca"
    ],
];

/* 
    - aucun champ renseigné
    - nom d'utilisateur non renseigné
    - mot de passe non renseigné
    - utilisateur inconnu
    - mot de passe invalide

*/






$formulaire = "<form  method='post' class='d-flex  align-items-center justify-content-center flex-column'>

    <div class='form-group'>
        <label for='exampleInputPseudo' class='form-label mt-4'>Votre pseudo</label>
        <input type='text' class='form-control' id='exampleInputPseudo' placeholder='entrer votre pseudo'
            name='username'>

    </div>
    <div class='form-group mb-3'>
        <label for='exampleInputPassword' class='form-label mt-4'>Mot de passe</label>
        <input type='password' class='form-control' id='exampleInputPassword'
            placeholder='Entrer votre mot de passe' name='password'>
    </div>
    <button class='btn btn-primary'>Valider</button>

</form>
";

$secrete = "<h2>– Allô Police ! Je viens d’écraser un poulet. Que dois-je faire ?
– Et bien , plumez-le et faites-le cuire à thermostat 6.
– Ah bon ! Et qu’est-ce que je fais de la moto ?
</h2>";
$messageErreur = "";
$modeFormulaire = true;




 if(
       (isset($_POST["username"]) && isset($_POST["password"])

    &&

    (!empty($_POST["username"]) && !empty($_POST["password"])) )
)

{
    $userExist = false;
    $motDePasse;
 
    foreach($users as $user){
       
         if($_POST["username"] == $user["username"]){
                 $userExist = true;
                 $motDePasse = $user['password'];  
               
        }   
           
        }

        if($userExist){
            if($motDePasse == md5($_POST['password'].$salt)){
                $modeFormulaire = false;
                
                

            }else{
                $messageErreur = 'veuillez renseigner le bon mot de passe';
            }
        }else{
                $messageErreur = 'utilisateur inconnu';
            }
                 
       
}else{
     $messageErreur = 'veuillez renseigner tous les champs !';
}


$modeFormulaire ? $contenuDeLaPage = $formulaire : $contenuDeLaPage = $secrete;
?>

