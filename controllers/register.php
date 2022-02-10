<?php
require __DIR__ . '../models/adduser.php';
require __DIR__ . '../views/formreg.php';

if (isset($_POST['register'])) {
   if (empty($_POST['identifiant'])) {
      echo "Aucun identifiant renseigné !";
   } else {
      if (empty($_POST['motdepasse'])) {
         echo "Aucun mot de passe renseigné !";
      } else {
         $formLog = htmlentities($_POST['identifiant'], ENT_QUOTES, "ISO-8859-15");
         $formPwd = htmlentities($_POST['motdepasse'], ENT_QUOTES, "ISO-8859-15");
      }
   }
}

switch ($_POST) {
    case empty($_POST['identifiant']):
        echo "Aucun identifiant renseigné !";
        break;
    case empty($_POST['mail']):
        echo "Aucun email renseigné !";
        break;
    case empty($_POST['motdepasse']):
        echo "Aucun mot de passe renseigné !";
        break;
    default:
        echo "Un ou plusieurs champs ne sont pas renseignés !";
        break;
}