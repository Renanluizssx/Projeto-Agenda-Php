<?php
// nome da máquina
$servidor = "localhost";
//usuario do xamp
$usuario = "root";
//senha do xamp
$senha = "";
//nome do banco mysql
$dbservidor = "meudatabase";


// fazer a conexão do banco
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbservidor);

/*
if ($conexao) {
    echo 'conectado com sucesso!';
}
*/


?>