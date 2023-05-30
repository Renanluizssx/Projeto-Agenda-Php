<?php
$codigo = $_GET['codigo'];

include "conexao.php";

$sql = "DELETE FROM agenda WHERE codigo='$codigo' ";
if (mysqli_query($conexao, $sql)) {
echo "<script>alert('Registro Excluido')</script>";
echo "<script>self.location = 'listar.php'</script>";
};


?>