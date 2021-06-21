<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meu champs kk</title>
</head>
<body>
<div class="formulario">
    <h2>Formulário</h2>
    <form action="script.php" method="post">

        Nome* <input class="formatado2" type=name name=nome placeholder="Digite seu nome (apenas letras)" pattern="[A-z\s]+$" required><br>

        Username* <input class="formatado2" type="text" name="username" placeholder="Digite seu username" minlength="6" required><br>

        E-mail* <input class="formatado2" type=email name=email placeholder="Exemplo.: abc@gmail.com" required><br>

        CPF <input class="formatado2" type=cpf name=cpf required placeholder="Ex.: 000.000.000-00" maxlength="11"><br>

        Endereço GitHub <input class="formatado2" type=url name=url placeholder="Exemplo.: https://github.com/VitorEtur"><br>

        Data de Nascimento* <input class="formatado" type=date name=datanasc required><br>

    <input class="botao" type=submit value="Enviar">


    
</div>
</form>
</body>
</html>
