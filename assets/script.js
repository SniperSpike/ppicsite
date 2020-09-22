$(document).ready(function(){
  $.ajax({
    url: "index.php",
    context: document.body
  }).done(function(data) {
    $('body').html(data);
  });
});
