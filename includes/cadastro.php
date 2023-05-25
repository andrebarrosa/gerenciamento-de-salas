
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <title>Cadastro</title>
</head>
<style>
    body {
    background-color: rgb(245, 246, 248);
    font-family: Arial, Helvetica, sans-serif;
    
  }
  
  .area-login {
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
  }
  
  .login {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #ffffff;
    width: 400px;
    height: 650px;
    border: #eb521b solid;
    border-radius: 5px;
    padding: 35px;
  }
  
  .login form {
      display: flex;
      flex-direction: column;
      width: 100%;
  
  }
  
  .login input {
    margin-top: 10px;
    background-color: #e9e8e6;
    height: 30px;
    outline: none;
    border-radius: 5px;
    color: black;
    
  }
  
  .cadastro {
    color: #f94a0b;
    justify-content: center;
  }
  
  .input::placeholder {
    font-size: 14px;
    color: black;
  }
  
  form [type="submit"] {
    display: block;
    background-color: #f94a0b;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
  }
  
  p {
    color: #0a0a0a;
  }
  
  a {
    color: #eb521b;
    text-decoration: none;
    margin-left: 5px;
  }
  
  
  
</style>

<body>
    <section class="area-login">
        <div class="login">
            <div>
                
                
            </div>
            <form method="POST">
                <h1 class="cadastro">Cadastro</h1>
                <label for="login" class="my-1" >Login</label>
                <input id="login" type="text" name="Nome" placeholder="Nome de usuário" autofocus>
                <label for="id" class="my-1" >Id</label>
                <input id="id" type="id" name="id" placeholder="Seu ID">
                <label for="email" class="my-1" >Seu Email aqui</label>
                <input id="email" type="email" name="email" placeholder="Deixe seu Email">
                <label for="telefone" class="my-1" >Digite seu Telefone</label>
                <input id="telefone" type="number" name="telefone" placeholder="Seu Número">
                <label for="foto" class="my-1" >Anexar Foto</label>
                <input id="foto" type="file" name="foto" placeholder="Adicione sua foto">
                <label for="cpf" class="my-1" >Digite seu CPF</label>
                <input id="cpf" type="numero" name="cpf" placeholder="Digite seu CPF">
              
                <input type="submit" value="Cadastrar" onclick="validarFormulario(event)">
              </form>
              
            <P>Desenvolvido por<a href="www.google.com/diceres">Diceres</a></P>
        </div>
        
    </section>
    <script src="./js/eventos.js"></script>
</body>
</html>

