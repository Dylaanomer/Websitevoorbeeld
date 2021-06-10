<!DOCTYPE html>
<?php include "includes/config.php" ?>
<html lang="en">
  <head>
    <?php include "includes/styles.php" ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Rederij Bestevaer</title>
  </head>

  <body>

    <?php include "includes/links.php" ?>

    <main>

    <div>
      <br /><br />
      <h1>Contact formulier</h1>
      <p class="titlez">Voer uw gegevens in zodat onze klantenservice u kan contacteren met email of telefoon.</p>
    </div>

    <br><br>


    <div class="contentz">

        <h2>Vul in:</h2>

        <form action="includes/sql2.php" method="post">
        <br />

        <label for="voornaam">Voornaam:</label>
        <input type="text" name="voornaam" placeholder="Enter Voornaam" />

        <br /><br />
        <label for="achternaam">Telefoon:</label>
        <input type="text" name="achternaam" placeholder="Telefoon" />
        
        <br /><br />
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Enter E-mail" />

        <br /><br />
        <label for="telefoon">Reden van Contact:</label>
        <input type="number" name="telefoon" placeholder="Vul in" />

        <br /><br />        <br /><br />

        <input type="submit" name="submit" value="Opsturen" />
        </form>
        <br /><br />

     </div>
    
    </main>

    <footer></footer>
  </body>
</html>
