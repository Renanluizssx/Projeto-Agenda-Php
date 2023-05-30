<?php
include "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];

//inserir nas colunas
$sql ="INSERT INTO agenda (nome, email)
        VALUES ('$nome', '$email')
";
//executar
if
(mysqli_query($conexao, $sql)) {
     echo "<script>alert('Incluído com sucesso')</script>";
     echo "<script>self.location = 'incluir.php'</script>";
}
else {
echo "<script>alert('Problema, nao cadastrou')</script>";

die($sql);
}
//echo "$nome <br>";
//echo $email;

?>