<script type="text/javascript">
  var inputPassword = $('#inputPassword');
  var olho = $("#olho");

  olho.mousedown(function() {
    senha.attr("type", "text");
  });

  olho.mouseup(function() {
    senha.attr("type", "password");
  });

  $("#olho").mouseout(function() {
    $("#inputPassword").attr("type", "password");
  });

  $("#inputNumero").focusout(function() {
    var valor = $("#inputNumero").val();
    if (valor < 0) {
      $("#inputNumero").val("");
    }
  });

  $("#inputConfirm").focusout(function(){
    var senha = $("#inputPassword").val();
    var confirmacao = $("#inputConfirm").val();
    if (senha != confirmacao){
      alert("Confirmação diferente da senha");
      $("#inputConfirm").val("");
    }
  })
</script>