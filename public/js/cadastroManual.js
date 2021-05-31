<script type="text/javascript">
  $("#olho").mousedown(function() {
    $('#inputPassword').attr("type", "text");
  });

  $("#olho").mouseup(function() {
    $('#inputPassword').attr("type", "password");
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