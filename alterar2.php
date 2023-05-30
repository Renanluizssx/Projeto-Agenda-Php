<?php 
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$email = $_POST['email'];
include "conexao.php";

echo "$nome $email";
$sql = "UPDATE agenda SET nome='$nome', email='$email' WHERE codigo='$codigo'";

if(mysqli_query($conexao, $sql)) {
    echo "<script>alert('registro alterado')</script>";
    echo "<script>self.location = 'listar.php'</script>";
}




?>