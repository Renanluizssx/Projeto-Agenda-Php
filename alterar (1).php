<?php
include "conexao.php";
include "abre.php";
include "menu.php";
$codigo = $_GET['codigo'];
$sql = "SELECT * FROM agenda where codigo = '$codigo'";
$resultado = mysqli_query($conexao, $sql);

while ($dados = mysqli_fetch_assoc($resultado)) {
        $nome = $dados['nome'];
        $email = $dados['email'];

}

?>
<form method="post" action="alterar2.php">
<input type="hidden" name="codigo" value="<?php echo"$codigo" ?>"></p>
<p>Nome: <input type="text" name="nome" value="<?php echo"$nome" ?>"></p>
<p>Email:<input type="text" name="email" value="<?php echo "$email" ?>"></p>


<input type="submit" value="Alterar">
</form>


<?php
include "fecha.php"
?>