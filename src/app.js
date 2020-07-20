var $ = require( "jquery" );
var Handlebars = require("handlebars");


$(document).ready(function(){

  // Al caricamento della pagina stampa tutti i dischi
  stampa_dischi('');

  // Al cambio della select stampare i cd con l'artista selezionato
  $('select.artista').change( function(){
    // Resettare i dischi nell'HTML
    $('main div.container').text('');

    // Prendere il valore selezionato
    var artista = $('select.artista').val();
    stampa_dischi(artista);
  });

  // Stampa dischi
  function stampa_dischi(artista){

    // Chiamata ajax
    $.ajax({
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',
      data: {
        author: artista
      },
      success: function(data){
        get_cds(data);
      },

      error: function(){
        alert('Documento API non caricato correttamente');
      }
    });

  }

  function get_cds(dischi){
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

});
