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

    <div class="login p-5 ">
        <div class="col-6 p-4">
            <div>
                <img class="logo-small" src="./img/vamgark-icon.png" alt="">
            </div>
            <div>
                <span class="font f-64 f-w">Entrar</span>
            </div>
            <div>
                <span class="f-24 font f-w">Use sua conta Vamgark</span>
            </div>
        </div>

        <div class="flex-column col-6 d-flex justify-content-evenly pt-5">
            <div class="mt-5">
                <div><input class="" type="text" placeholder="Seu E-mail"></div>
                <div><a class="" href="#"><span class="font f-20">Esqueceu seu e-mail?</span></a></div>
            </div>
            <div class="">
                <span class="font-light f-w f-16">Fique atento pois apenas os e-mails Vamgark são aceitos no login.<a class="" href="./views/Politicas" target="_blank"><span class="font"> Saiba mais sobre as Políticas de Login da Vamgark.</span></a></span>
            </div>
            <div class="d-flex flex-inline justify-content-end">
                <div class="mx-2"><a href="#"><button class="btn-1 rounded-5 btn px-5 py-3"><span class="font f-24">Criar Conta</span></button></a></div>
                <div class="mx-2"><a href="#"><button class="btn-2 rounded-5 btn px-5 py-3"><span class="font f-24">Próximo</span></button></a></div>
            </div>
        </div>
    </div>


</body>
</html>