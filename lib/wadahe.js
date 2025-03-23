var lastResponse = '';
setInterval(function(){ 
  $.ajax({
    type: "GET",
    url: "data.php",
    dataType: "html",
    success: function(response) {
      if (lastResponse && response !== lastResponse) {
        var audio = document.getElementById('jaran');
        audio.play();
        $("#iyo").load("data.php");
      }
      lastResponse = response
    }
  });
},8000);

$(document).ready(function(){
    $("#iyo").load("data.php");
});