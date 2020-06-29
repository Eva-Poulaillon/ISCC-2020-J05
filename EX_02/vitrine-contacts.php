<!DOCTYPE html>
<html>
<head>
<title>Acceuil</title>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/vitrine.css">
    <link rel="stylesheet" type="text/css" href="vitrine-contacts.css">
</head>
<body> <!-- ouverture de la balise body -->
    <header>
    <nav>
        <a href="vitrine-accueil.html">Acceuil</a>
        <a href="vitrine-contacts.html">Contacts</a>
        <a href="vitrine-programme.html">Programme</a>
    </nav>
    <h1>Summer Code Camp</h1>
    
    </header>

    <h2>Contacts</h2>

    <form action="/ma-page-de-traitement" method="post">
        <div>
            <label for="name">Votre nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">Votre e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="msg">Comment améliorer mon site? :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer</button>
        </div>
    </form>

    <footer>
        <a href="http://www.epitech.eu"><IMG class="displayed" src="logo_epitech.png" alt="logo_epitech"></a>
    </footer>
</body> <!-- fermeture de la balise body -->
</html>