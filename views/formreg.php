<main>
   <form action="<?= __DIR__ . '/../controllers/register.php' ?>" method="POST">
      Identifiant: <input type="text" name="identifiant" placeholder="Nom d'utilisateur" />
      <br/>
      Email : <input type="email" name="mail" placeholder="Adresse électronique" />
      <br/>
      Mot de passe: <input type="password" name="motdepasse" />
      <br/>
      <input type="submit" name="register" value="s'inscrire" />
       <a href="/Dev-php/2A/S3/login">Déjà inscrit ? Connectez-vous !</a>
   </form>
</main>