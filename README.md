# sweetbakery

Site institucional de uma confeitaria fictícia, com página de apresentação, inscrição em campanha e formulário de contato gravando no banco.

> Projeto de faculdade (março/2021), feito em parceria com uma colega designer: ela cuidou do layout e eu da implementação. Serviu para desenvolver meus conhecimentos em PHP, HTML, CSS, JavaScript e MySQL.

## Stack

- PHP (procedural, com `mysqli`)
- MySQL
- Bootstrap via CDN
- HTML e CSS (com `reset.css`)

## Estrutura

```
index.php          → página única com as seções (apresentação, campanha, contato)
salva_campanha.php → grava nome e e-mail da inscrição em campanha
salva_mensagem.php → grava a mensagem do formulário de contato
conexao.php        → credenciais e abertura da conexão
css/estilo.css     → estilos
css/reset.css      → reset de CSS
imagens/           → layout e artes
```

Após cada envio, o PHP redireciona de volta para o `index.php`.

## Banco de dados

```sql
CREATE TABLE campanha (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  email VARCHAR(255)
);

CREATE TABLE sugestao (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  telefone VARCHAR(50),
  email VARCHAR(255),
  mensagem TEXT
);
```

## Configuração

A conexão com o banco é lida de variáveis de ambiente, com valores padrão para um MySQL local:

| Variável      | Padrão      |
|---------------|-------------|
| `DB_HOST`     | `localhost` |
| `DB_USER`     | `root`      |
| `DB_PASSWORD` | vazio       |
| `DB_NAME`     | `sweetbakery` |

```bash
export DB_HOST="localhost"
export DB_USER="root"
export DB_PASSWORD="sua-senha"
export DB_NAME="sweetbakery"
```

No Windows (PowerShell), use `$env:DB_USER = "root"`.

## Como rodar

1. Suba um ambiente com PHP e MySQL.
2. Crie as tabelas acima.
3. Configure as variáveis de ambiente do banco (veja a seção acima).
4. Sirva a pasta:

```bash
php -S localhost:8000
```

## Ressalvas (código de 2021)

- ~~**Credenciais no repositório.**~~ **Corrigido:** o `conexao.php` agora lê host, usuário, senha e banco de variáveis de ambiente. As credenciais antigas (um banco ClearDB do Heroku) seguem no histórico de commits, mas o serviço foi descontinuado e elas estão mortas.
- **SQL injection.** Os `INSERT` concatenam os valores de `$_POST` diretamente na query, sem escape nem *prepared statements*.
- Sem validação no servidor e sem confirmação visível de que o envio funcionou — o usuário só vê a página recarregar.
