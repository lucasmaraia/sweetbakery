<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>SweetBakery</title>
      <link rel="sortcut icon" href="imagens/rosquinha.png" type="image/gif" />
      <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <meta charset="utf-8">
   </head>
   <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href =  "#sec1">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href = "#sec2">Sobre</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href = "#sec3">Livro de Receitas</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href = "#sec4">Contato</a>
            </li>
            <li class="nav-item">
               <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
         </ul>
         </div>
         </div>
      </nav>
      <section id = "sec1">
         <img width="100%" style="border: none;" src = "imagens/layout1.jpg"/>
      </section>
      <section id = "sec2">
         <img width="100%" style="border: none;" src = "imagens/layout2.jpg"/>
      </section>
      <section id = "sec3">
         <form id = "inscrevase" method = "POST" action ="salva_campanha.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome</label>
              <input type="name" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome" required = "required">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" name = "email" class="form-control" id="exampleInputPassword1" placeholder="Seu Telefone"  required = "required">
            <br>
            <button type="submit" class="btn btn-danger">Inscreva-se</button>
          </form>
      </section>
      <section id = "sec4">
         <form id = "formulario" method = "POST" action ="salva_mensagem.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome</label>
              <input type="name" name = "nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome" required = "required">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Telefone</label>
              <input type="tel" name = "telefone" class="form-control" id="exampleInputPassword1" placeholder="Seu Telefone"  required = "required">
            </div>
            <label for="exampleInputPassword1">Email</label>
              <input type="email" name = "email" class="form-control" id="exampleInputPassword1" placeholder="Seu Email"  required = "required"> 
              <label for="exampleInputPassword1">Mensagem</label>
              <textarea id = "input"type="text" name = "mensagem" class="form-control" id="exampleInputPassword1" placeholder="Mensagem"  required = "required"> </textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-danger">Enviar</button>

          </form>
      </section>
   </body>
</html>