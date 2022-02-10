<?php

require('pdo.php');

function checkUser($identifiant, $conn){
   $req = $conn->prepare("SELECT log FROM utilisateurs WHERE log = :logform OR email = :logform");
   $req->bindValue(':logform', $identifiant, PDO::PARAM_STR);
   $req->execute();
   $check = $req->fetch(PDO::FETCH_ASSOC);
   if (empty($check)) {
      return FALSE;
   } else {
      return TRUE;
   }
}

function logUser($identifiant, $motdepasse){
   $conn = pdo();
   if (checkUser($identifiant, $conn)) {
      $req = $conn->prepare("SELECT derniere_connexion FROM utilisateurs WHERE mdp = :mdpform");
      $req->bindValue(':mdpform', $motdepasse, PDO::PARAM_STR);
      $req->execute();
      $check = $req->fetch(PDO::FETCH_ASSOC);
      if (empty($check)) {
         $conn = null;
         return 2;
      } else {
         return $check['derniere_connexion'];
      }
   } else {
      $conn = null;
      return 1;
   }
}

function updateCurDate($log){
    $conn = pdo();
    $req = $conn->prepare("UPDATE utilisateurs SET derniere_connexion = CURDATE() WHERE log = :logform OR email = :logform");
    $req->bindValue(':logform', $log, PDO::PARAM_STR);
    $req->execute();
    $conn = null;
}
