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
