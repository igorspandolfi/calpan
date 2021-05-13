<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Acesso</title>
</head>
<body>
    <div class="container pt-5 col-4">
        <form class="">
            <div class="form-group text-center">
                <h2><label for="usuario" class="">Login:</label></h2>
                <input class="form-control" type="text" name="usuario" placeholder="Digite seu usuário ou endereço de e-mail" required>
                <!--<div class='valid-feedback'>Dados Corretos.</div>                 
                <div class='invalid-feedback'>Preencha este campo.</div>-->                  
            </div>
            <div class="form-group text-center">
                <h2><labbel for="senha" class="">Senha:</labbel></h2>
                <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" required>
                <!--<div class="valid-feedback">Dados Corretos.</div>
                <div class="invalid-feedback">Preencha este campo.</div>-->
            </div>            
                <button type="submit" class="btn btn-dark btn-lg btn-block">Acessar</button>
                <a class="btn btn-dark btn-lg btn-block" href="../index.html">Voltar</a>
        </form>
    </div>
</body>
</html>