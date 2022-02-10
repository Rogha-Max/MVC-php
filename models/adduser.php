<?php
require('connectuser.php');

function addUser($login, $motdepasse, $mail){ 
   $conn = pdo();
   /*ajout utilisateur + hashage*/
   $req = $conn->prepare("INSERT INTO utilisateurs (log, mdp, email, date_inscription)
      VALUES(:log, :mdp, :mail, CURDATE())");
   $req->bindValue('log', $login, PDO::PARAM_STR);
   $req->bindValue('mdp', md5($motdepasse), PDO::PARAM_STR);
   $req->bindValue('mail', $mail, PDO::PARAM_STR);
   $req->execute();
   if (checkUser($login, $conn)) {
      echo 'user exist';
   }
   echo "Nouvel utilisateur créé";
   $conn = null;
}
