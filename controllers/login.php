<?php
require __DIR__ . '/../models/connectuser.php';
require __DIR__ . '/../views/formlog.php';

   if (empty($_POST['identifiant'])) {
       $_SESSION["message"] = 'Aucun identifiant renseigné !';
       header('Location: /Dev-php/2A/S3/login');
   } else {
      if (empty($_POST['motdepasse'])) {
          $_SESSION["message"] = 'Aucun mot de passe renseigné !';
          header('Location: /Dev-php/2A/S3/login');
      } else {
         $formLog = htmlentities($_POST['identifiant'], ENT_QUOTES, "ISO-8859-15");
         $formPwd = htmlentities($_POST['motdepasse'], ENT_QUOTES, "ISO-8859-15");

         $connectionStatus = logUser($formLog, $formPwd);

         switch ($connectionStatus) {
            case 1:
               $_SESSION["message"] = 'Nous ne vous connaissons pas.';
               header('Location: /Dev-php/2A/S3/login');
               break;
            case 2:
               $_SESSION["message"] = 'Mot de passe incorrect ! Essayez à nouveau.';
               header('Location: /Dev-php/2A/S3/login');
               break;
            case $connectionStatus:
                updateCurDate($formLog);
                $_SESSION["message"] = "<h1>Bienvenue dans le panel administrateur</h1> <br> <br><b>Heureux de vous revoir !</b> <br> <i>dernière connexion:</i> $connectionStatus";
                $_SESSION["connected"] = TRUE;
                header('Location: /Dev-php/2A/S3/admin');
               break;
            default:
                $_SESSION["message"] = "<b>Erreur de connexion</b>";
                header('Location: /Dev-php/2A/S3/login');
               break;
         }
      }
   }