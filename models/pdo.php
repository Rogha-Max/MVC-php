<?php 
/*Connexion PDO*/

function pdo(){
   $host = "localhost" ;
   $dbname = "td&tp_s3" ;
   $username = "root" ;
   $password = "" ;

   try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password) ;
   } catch (PDOException $e) {
      die($e->getMessage());
   }
   return $conn;
}
