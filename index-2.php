<!-- Apertura php -->
<?php

  include __DIR__ . '/database.php';

?>
<!-- Chiusura php -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>Booltify</title>
  </head>
  <body>

    <!-- Apertura header -->
    <header>
      <!-- Container -->
      <div class="container">
        <!-- Logo -->
        <img src="img/logo.jpg" alt="logo">
        <form action="index-2.php" method="get">
          <select class="artista" name="artista">
            <option value="">Tutti</option>
            <?php foreach ($database as $dischi => $disco) { ?>
            <option value="<?php echo $disco['author']; ?>"><?php echo $disco['author']; ?></option>
            <?php } ?>
          </select>
        </form>
      </div>
    </header>

    <!-- Apertura main -->
    <main>
      <!-- Container -->
      <div class="container">
        <!-- Appendere handlebars -->
      </div>
    </main>

    <!-- //////////////////////// TEMPLATES //////////////////////////////// -->

    <!-- Template handlebars -->
    <script id="disco-template" type="text/x-handlebars-template">
      <div class="blocco">
        <img class="immagine" src="{{poster}}" alt="immagine disco">
        <h2 class="titolo">{{title}}</h2>
        <p class="autore">{{author}}</p>
        <p class="anno">{{year}}</p>
      </div>
    </script>

    <!-- Connessione JS -->
    <script type="text/javascript" src="dist/app.js"></script>

  </body>
</html>
