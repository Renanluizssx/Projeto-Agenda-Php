<?php 
$coluna = '';
$pesq = '';
//isset verifica se existe algo
if (isset($_POST['pesq'])) {
    $coluna = $_POST['coluna'];
$pesq = $_POST['pesq'];
}

include "abre.php";
include "menu.php";

?>
<form method="post" action="pesquisar.php">
<p>
CATEGORIA:
<select name="coluna">
<option value="nome">NOME</option>
<option value="email">EMAIL</option>


</select>
</p>

<p>Pesquisar: <input type="text" name="pesq"></p>
<input type="submit" value="Buscar">
</form>



<?php
$pesq = trim($pesq);
if ($pesq != '') {
$sql = "SELECT * from agenda WHERE $coluna like '%$pesq%' ";
include "tabela.php";
}
include "fecha.php";

?>