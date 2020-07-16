$(document).ready(function(){

  // Chiamata ajax
  $.ajax({
    url: 'http://localhost:8888/php-ajax-dischi/server.php',
    method: 'GET',

    success: function(data){
      stampa_dischi(data);
      filtro_autore(data);
    },

    error: function(){
      alert('Documento API non caricato correttamente');
    }
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
function filtro_autore(dischi){
  // Implementazione handlebars
  var source = $("#disco-template").html();
  var template = Handlebars.compile(source);

  // Al cambio delle section autori
  $('select.artista').change(function(){
    // Resettare il container
    $('main .container').text('');
    // Prendere il valore selezionato
    var artista = $('select.artista').val();

    // Se é stato selezionato 'Tutti'
    if ( artista == 'Tutti') {
      // Stampa tutti i dischi
      stampa_dischi(dischi);
    }

    // Ciclare per ogni array presente nel server
    for (var i = 0; i < dischi.length; i++) {
      // Confrontare con tutti gli autori
      if (dischi[i].author == artista) {
        // Stampa l'autore selezionato
        var html = template(dischi[i]);
        $('main div.container').append(html);
      }
    }
  });
}
