<h1> Produtos </h1>
<form action="get">
  <p>{{$dados["email"]}}</p>

  <label>Produto</label>
  <input type="text" name="NomeProduto"><br><br>
  <label>Categoria</label>
  <input type="text" name="categoria"><br><br>
  <label>Região</label>
  <input type="text" name="UF"><br><br>

  <input type="submit" value="Salvar">
</form>