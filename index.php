<?php 

if($getlogin==true){
    header("Location: views/Home");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vamgark Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/views/style/menu.css">
</head>


<body class="menu">
    
    <div class="img" >
        <a href="#"><img src="./img/Faq-icon.png" alt="Faq-icon.png"></a>
    </div>

    <div class="main-elements mt-5">
        <div class="my-5">
            <img class="logo" src="./img/logo-vamgark-whitefull.png" alt="VK-Academy Logo">
        </div>

        <div class="my-5">
            <a href="#"><button class="rounded-5 btn btn-light px-4"><span class="font-btn f-48">Entrar</span></button></a>
        </div>
    </div>


</body>
</html>