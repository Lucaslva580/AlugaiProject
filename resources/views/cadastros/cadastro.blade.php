
<form method="POST" action="cadastro.php">
<label>Nome Completo:</label><input type="text" name="nome" id="nome"><br>
<label>E-mail:</label><input type="email" name="email" id="email"><br>
<label>Telefone ou Celular:</label><input type="tel" name="telefone" id="telefone"><br>
<label>CPF:</label><input type="text" name="cpf" id="cpf"><br>
<label>RG:</label><input type="text" name="rg" id="rg"><br>
<label>Data de Nascimento:</label><input type="date" name="datanascimento" id="datanascimento"><br>
<?php

function get_endereco($cep){


  // formatar o cep removendo caracteres nao numericos
  $cep = preg_replace("/[^0-9]/", "", $cep);
  $url = "http://viacep.com.br/ws/$cep/xml/";

  $xml = simplexml_load_file($url);
  return $xml;
}

?>
<meta charset="utf-8">
<h1>Pesquisar Endereço</h1>
<form action="" method="post">
  <input type="text" name="cep">
  <button type="submit">Pesquisar Endereço</button>
</form>
 <?php $cep = $_POST['cep'] ?>
<h2>Resultado da Pesquisa</h2>
<p>
  <?php $endereco = get_endereco($_POST['cep']); ?>
  <b>CEP: </b> <?php echo $endereco->cep; ?><br>
  <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
  <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
  <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
  <b>UF: </b> <?php echo $endereco->uf; ?><br>
</p>
<?php ?>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>