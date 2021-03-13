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

   <script>
	function exibemodal(){
        $('#ajuda').modal('show');
    }
	
	</script>

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
         <form id = "inscrevase" method = "POST" action ="salva_campanha.php" onSubmit="alert('Dados enviado com Sucesso, você recebera o seu EBOOK em breve');">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome</label>
              <input type="name" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome" required = "required">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" name = "email" class="form-control" id="exampleInputPassword1" placeholder="Seu Email"  required = "required">
            <br>
            <button type="submit" class="btn btn-danger">Inscreva-se</button>
          </form>
      </section>
      <section id = "sec4">
         <form id = "formulario" method = "POST" action ="salva_mensagem.php" onSubmit="alert('Dados enviado com Sucesso, Obrigado pela sua sugestão');">
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

      <style type="text/css">
	#div_lgpd {
		position: fixed;
		left: 0;
		bottom: 10px;
		display: flex;
		width: 100vw;
		justify-content: center;
		z-index: 29999999;
		background-color: rgba(64,64,64,.9);
	}
	
	.conteudo-lgpd {
		display: flex;
		width: 90vw;
		justify-content: center;
		color: #FFFFFF;
	}
	
	.botao-lgpd {
		display: flex;
		width: 10vw;
		justify-content: center;
		color: #FFFFFF;
	}
	
</style>

<div id="div_lgpd" style="display: none;">
	<center> <div class="conteudo-lgpd">
		Utilizamos cookies essenciais e tecnologias semelhantes de acordo com a Política de Privacidade e, ao continuar navegando, você concorda com estas condições.
	</div>
	</center>
	<center>
	<div class="botao-lgpd">
		<center>
		<button type="button" class="btn btn-danger" onclick="defineAceiteLgpd()">Aceito</button>
		</center>
		
		
		
		
		<br>
	</div>
	
</div>

<script type="text/javascript">
var _0x20ea=['getElementById','style','indexOf','substring','cookie','block','length','none','display',';\x20expires=Thu,\x2001-Jan-70\x2000:00:01\x20GMT','SIM','toGMTString','div_lgpd','2030-01-01','aceite_lgpd'];(function(_0x2a5346,_0x4e22fd){var _0x20ea25=function(_0x569020){while(--_0x569020){_0x2a5346['push'](_0x2a5346['shift']());}};_0x20ea25(++_0x4e22fd);}(_0x20ea,0x162));var _0x5690=function(_0x2a5346,_0x4e22fd){_0x2a5346=_0x2a5346-0x1e9;var _0x20ea25=_0x20ea[_0x2a5346];return _0x20ea25;};function verificaLgpd(){var _0xf8a854=_0x5690;!getCookie(_0xf8a854(0x1ee))&&(document[_0xf8a854(0x1ef)](_0xf8a854(0x1ec))['style'][_0xf8a854(0x1f7)]=_0xf8a854(0x1f4));}function defineAceiteLgpd(){var _0x25d5f6=_0x5690,_0x121421=new Date(_0x25d5f6(0x1ed));setCookie(_0x25d5f6(0x1ee),_0x25d5f6(0x1ea),_0x121421),document[_0x25d5f6(0x1ef)](_0x25d5f6(0x1ec))[_0x25d5f6(0x1f0)][_0x25d5f6(0x1f7)]=_0x25d5f6(0x1f6);}function setCookie(_0x3e427b,_0x3a49d1,_0x2747de){var _0x6f176a=_0x5690,_0x39716d=_0x3e427b+'='+escape(_0x3a49d1)+(_0x2747de?';\x20duration='+_0x2747de[_0x6f176a(0x1eb)]():'');document[_0x6f176a(0x1f3)]=_0x39716d;}function getCookie(_0x593273){var _0x336628=_0x5690,_0x33bd0f=document[_0x336628(0x1f3)],_0x1211ce=_0x593273+'=',_0x35e9e3=_0x33bd0f[_0x336628(0x1f1)](';\x20'+_0x1211ce);if(_0x35e9e3==-0x1){_0x35e9e3=_0x33bd0f[_0x336628(0x1f1)](_0x1211ce);if(_0x35e9e3!=0x0)return null;}else _0x35e9e3+=0x2;var _0x38ebf5=_0x33bd0f[_0x336628(0x1f1)](';',_0x35e9e3);return _0x38ebf5==-0x1&&(_0x38ebf5=_0x33bd0f[_0x336628(0x1f5)]),unescape(_0x33bd0f[_0x336628(0x1f2)](_0x35e9e3+_0x1211ce[_0x336628(0x1f5)],_0x38ebf5));}function deleteCookie(_0x32895a){var _0x1bdf06=_0x5690;getCookie(_0x32895a)&&(document['cookie']=_0x32895a+'='+_0x1bdf06(0x1e9));}verificaLgpd();
</script>

   </body>
</html>