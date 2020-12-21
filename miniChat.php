<?php
 // Connexion à la base de données
    include_once 'database.php';
?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Mini-chat</title>
        </head>
        <style>
        form
        {
            text-align:center;
        }
        </style>
        <body>
        
        <form action="miniChat_post.php" method="post">
            <p>
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
            <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
    
            <input type="submit" value="Envoyer" />
        </p>
        </form>
    
    <?php
    
    // Récupération des 10 derniers messages
    $reponse = $database->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
    
    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
    }
    
    $reponse->closeCursor();
    
    ?>
        </body>
    </html>