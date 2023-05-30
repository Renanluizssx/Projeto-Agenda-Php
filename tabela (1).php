<?php
include "conexao.php";

$resultado = mysqli_query($conexao, $sql);
//quantidade de registros
$linhas = mysqli_num_rows($resultado);
//echo "$linhas";

if($linhas == 0) {
        echo 'Sem Registro';
        //comando die morre;
        die();
}   
echo '

<table>
<tr class="titulo">
<td>CODIGO</td>
<td> NOME </td>
<td> EMAIL </td>
<td>EXCLUIR</td>
</tr>';
while($dados = mysqli_fetch_assoc($resultado)) {
    $codigo = $dados['codigo'];
    $nome = $dados['nome'];
    $email = $dados['email'];
    $excluir = '<img src="imagens/delete.png">';
echo "
<tr>

<td> $codigo </td>
<td> <a href='alterar.php   ?codigo=$codigo'>$nome</a></td>
<td> $email</td>
<td><a href='excluir.php?codigo=$codigo'>$excluir</a></td>
</tr>";
}

echo '
</table>



';


?>