<?php 
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    

    $result_msg_contato = "insert into sugestao(nome,telefone,email,mensagem) 
    values('$nome','$telefone','$email','$mensagem')";

    $resultado_msg_contato = mysqli_query($mysqli,$result_msg_contato)

   
    ?>

<?php

header("Location: index.php");

?>


  
   
  
   </body>
</html>
