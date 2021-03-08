<?php 
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
   
    

    $result_msg_contato = "insert into campanha(nome,email)
    values('$nome','$email')";

    $resultado_msg_contato = mysqli_query($mysqli,$result_msg_contato)

   
    ?>


<!doctype html>
<html>
   <meta>
   <link rel="stylesheet" href ="/css/estilo.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <meta>
   <body>
   <br>
  <center><center> <h1>Dados registrados com sucesso.</h1> </center>
  <center>      <h2>Obrigado pela sua contribuição</h2> </center>
  <br>

  <center> <a href="index.php"><button href="/portifolio/index.php" type="submit" class="btn btn-primary">Voltar</button></a> </center>
    




  
   
  
   </body>
</html>
