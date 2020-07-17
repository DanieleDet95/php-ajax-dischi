<!-- Apertura php -->
<?php

  include __DIR__ . '/database.php';

?>
<!-- Chiusura php -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.js"></script>
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
        <select class="artista" name="artista">
          <option value="Tutti">Tutti</option>
          <option value="Bon Jovi">Bon Jovi</option>
          <option value="Queen">Queen</option>
          <option value="Sting">Sting</option>
          <option value="Steve Gadd Band">Steve Gadd Band</option>
          <option value="Iron Maiden">Iron Maiden</option>
          <option value="Eric Clapton">Eric Clapton</option>
        </select>
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
