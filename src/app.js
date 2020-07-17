var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function(){

  // Chiamata ajax
  $.ajax({
    url: 'http://localhost:8888/php-ajax-dischi/server.php',
    method: 'GET',

    success: function(data){
      stampa_dischi(data);
    },

    error: function(){
      alert('Documento API non caricato correttamente');
    }
  });

  // Al cambio delle section autori
  $('select.artista').change(function(){

    // Stampa disco in base all'autore
    filtro_autore();

  });
});

// Stampa dischi
function stampa_dischi(dischi){
  // Implementazione handlebars
  var source = $("#disco-template").html();
  var template = Handlebars.compile(source);

  // Ciclare per ogni array presente nel server
  for (var i = 0; i < dischi.length; i++) {
    var html = template(dischi[i]);
    // Stampare i dischi nell'HTML
    $('main div.container').append(html);
  }
}

// Al click dell'artista da filtrare
function filtro_autore(){
  // Resettare il container
  $('main .container').text('');
  // Implementazione handlebars
  var source = $("#disco-template").html();
  var template = Handlebars.compile(source);
  // Prendere il valore selezionato
  var artista = $('select.artista').val();

  // Chiamata ajax
  $.ajax({
    url: 'http://localhost:8888/php-ajax-dischi/server.php',
    method: 'GET',
    data:{
      author: artista
    },
    success: function(data){
      console.log(data);

      // Se é stato selezionato 'Tutti'
      if ( artista == 'Tutti') {
        // Stampa tutti i dischi
        stampa_dischi(data);
      }

      // Ciclare per ogni array presente nel server
      for (var i = 0; i < data.length; i++) {
        // Confrontare con tutti gli autori
        if (data[i].author == artista) {
          // Stampa l'autore selezionato
          var html = template(data[i]);
          $('main div.container').append(html);
        }
      }
    },
    error: function(){
      alert('Documento API non caricato correttamente');
    }
  });
}
