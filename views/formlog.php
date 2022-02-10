<main>
   <form action="/Dev-php/2A/S3/login/handling" method="POST">
      Identifiant: <input type="text" name="identifiant" placeholder="Nom d'utilisateur ou email" />
      <br/>
      Mot de passe: <input type="password" name="motdepasse"/>
      <br/>
       <button type="submit">Connexion</button>
      <?= $_SESSION["message"] ?>
      <a href="/Dev-php/2A/S3/register">Pas encore inscrit ? Inscrivez-vous !</a>
   </form>
</main>