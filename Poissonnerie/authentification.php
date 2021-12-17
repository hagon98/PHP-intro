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

$isLog = false;

if(isset($_POST['logout'])){
    unset($_SESSION['isLog']);
}

if(
    isset($_SESSION['isLog']) && $_SESSION['isLog']
){
    $isLoggedIn = true;
}


if(
    (isset($_POST["username"]) && isset($_POST["password"])

 &&

 (!empty($_POST["username"]) && !empty($_POST["password"])) )
)

{
 $userExist = false;
 $motDePasse;
 $messageErreur = "";

 foreach($users as $user){
    
      if($_POST["username"] == $user["username"]){
              $userExist = true;
              $motDePasse = $user['password'];  
            
     }   
        
     }

     if($userExist){
         if($motDePasse == md5($_POST['password'].$salt)){
            $isLog = true;
           $_SESSION['isLog'] = true;
           
         }else{
             $messageErreur = 'veuillez renseigner le bon mot de passe';
         }
     }else{
             $messageErreur = 'utilisateur inconnu';
         }
              
    
}else{
  $messageErreur = 'veuillez renseigner tous les champs !';
}
// 
 
?>