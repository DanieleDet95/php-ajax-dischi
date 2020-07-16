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
      </div>
    </header>

    <!-- Apertura main -->
    <main>
      <!-- Container -->
      <div class="container">

        <!-- Blocco dischi -->
        <?php foreach ($database as $dischi => $disco) { ?>
        <div class="blocco">
          <img class="immagine" src="<?php echo $disco['poster']; ?>" alt="immagine disco">
          <h2 class="titolo"><?php echo $disco['title']; ?></h2>
          <p class="autore"><?php echo $disco['author']; ?></p>
          <p class="anno"><?php echo $disco['year']; ?></p>
        </div>
        <?php } ?>
        
      </div>
    </main>




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
    <script type="text/javascript" src="js/script.js"></script>

  </body>
</html>
