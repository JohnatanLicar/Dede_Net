<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $mensagem = $_POST["mensagem"];
    
    ?>
</head>
<body>
    <strong>Nome:</strong> <?php echo "$nome"; ?><br>
    <strong>Email</strong> <?php echo "$email"; ?><br>
    <strong>Telefone:</strong> <?php echo "$numero"; ?><br>
    <strong>Mensagem:</strong> <?php echo "$mensagem"; ?>
</body>
</html>