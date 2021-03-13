<?php 
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
   
    

    $result_msg_contato = "insert into campanha(nome,email)
    values('$nome','$email')";

    $resultado_msg_contato = mysqli_query($mysqli,$result_msg_contato)

   
    ?>

    
<?php

header("Location: index.php");

?>
