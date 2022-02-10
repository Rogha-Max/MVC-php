<header>
    <a href="/Dev-php/2A/S3/" id="logo"><img src="/Dev-php/2A/S3/views/medias/Logo.jpg" alt="Logo" height="100px"></a>
    <?php
        if (!$_SESSION["connected"]){
            $link = "/Dev-php/2A/S3/";
            $text = "Se déconnecter";
        }
        else {
            $link = "/Dev-php/2A/S3/login";
            $text = "Se connecter";
        }
        echo "<a href=$link id='headersignlink'><i>$text</i></a>";
    ?>
    <script>
        // Recuperation de l'url courante de la page
        let url = <?php echo json_encode($url); ?>;
        console.log(url);
        let end_url = url.substring (url.lastIndexOf( "/" )+1 );
        // Condition gérant l'affichage du lien
        if (end_url == 'login' || end_url == 'register') signlink.style.display = 'none';

        console.log(signlink);
        let signlink = document.getElementById('headersignlink');
        console.log(signlink);
    </script>
</header>