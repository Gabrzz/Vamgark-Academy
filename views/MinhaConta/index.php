<?php 
include '../../controller/UsuarioController.php';
include '../../models/verifica_login.php';

if (isset($_SESSION['usuario_id'])){
    $UsuarioController = new UsuarioController();
    $usuario = $UsuarioController->findId($_SESSION['usuario_id']);
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php' ?>
    <link rel="stylesheet" href="style.css">
    <title>Conta</title> <!-- Nome da Página -->
</head>
<body>
    <?php include '../includes/header.php' ?>
    
    <main>
    
    <div class="background profile">

        <div class="indicator">
            <span class="font">Olá <?php echo $usuario->getNome(); ?>, essa é sua conta!</span>
        </div>
        
        <div class="profile-image">
            <img class="profile-image-img" src="../../img/profile-image.png" alt="Profile Image">
        </div>
        <div class="mt-3">
            <span class="font f-40 f-w"><?php echo $usuario->getNome()?></span>
        </div>
        <div>
            <span class="font-light f-20 f-w">Griffindor</span>
        </div>
    </div>

    <div class="d-flex w-100 info">
        <!-- Casa -->
        <div class="px-5">
            <div class="text-center my-4"><span class="font f-w f-40">Casa</span></div>
            <div class="my-4" style="width:38vw; height:245px; border-radius:50px; background-color: #5B5151;"><img src="" alt="Imagem Tema da Casa"></div>
            <div class="mt-4 mb-5 px-4 pt-3">
                <span class="font-light f-w f-25 "><strong class="font-bold">Pontos:</strong> 680 pts.</span></br></br>
                <span class="font-light f-w f-25 "><strong class="font-bold">Integrantes:</strong> 112 Magos.</span></br></br>
                <span class="font-light f-w f-25 "><strong class="font-bold">Professores:</strong> Arnaldo, Lênis, Colbert, Stuart.</span></br>
            </div>
            <div class="my-4 text-center"><button class="px-5 py-2 btn btn-outline-light rounded-5"><span class="mx-5 font f-w f-24">Visitar a Casa</span></button></div>
            <div class="my-4 text-center"><span class="f-lema f-w f-24">“O lema da casa bem bolado vai aqui</br>desse modelo divertido”</span></div>
        
        </div>
        

        
        <div class="divisor mx-1">

        </div>

        <!-- Mago -->
        <div class="px-5 ">
            <div class="text-center my-4"><span class="font f-w f-40">Mago</span></div>
            <div class="my-4 insignias">
                <div class="insignias-tittle"><span class="font f-b f-16">Insígnias</span></div>      
                <div class="d-flex flex-column pb-1">
                    <div class="d-flex flex-inline justify-content-around mt-4 mb-3 px-4">
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                    </div>
                    <div class="d-flex flex-inline justify-content-around mt-3 mb-4 px-4">
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                        <div class="insignia"></div>
                    </div>
                </div>
            </div>
            <div class="my-4 px-4 pt-3">
                <span class="font-light f-w f-25"><strong class="font-bold">Pontuação Pessoal:</strong> 20 pts.</span></br></br>
                <span class="font-light f-w f-25"><strong class="font-bold">História:</strong> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.”</span></br>
            </div>
            <div class="d-flex justify-content-around">
                <a class="f-w" href="#"><span>Histórico de compras</span></a>
                <a class="f-w px-3" href="#"><span>Consertar minha varinha</span></a> 
            </div>
        </div>
    </div>

    <div style="height: 50px" ></div>
    
    <!--    VARINHA    -->
    <div class="col-8    m-auto my-5">
        <div class="f-w container">
            <div class="my-3 text-center"><span class="font-bold f-50">Minha Varinha</span></div>
            <div class="d-flex">
                <div class style="width: 25vw; height:35vw; background-color:#5B5151;">
                    <img src="" alt="Varinha">
                </div>
                <div class="w-75 f-20 px-5">
                    <div class="my-2"><span class="font-light"><strong class="font-bold">Sobre a varinha: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></div>
                    <div class="my-5"><span class="font-light"><strong class="font-bold">Origem da varinha: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></div>
                    <div class="my-5"><span class="font-light"><strong class="font-bold">Nota: </strong>9.5 pts.</span></div>
                    <div>
                        <span><strong class="font-bold">Composição</strong></span>
                        <div class="d-flex flex-inline pt-4">
                            <div class="composition mx-3"></div>
                            <div class="composition mx-3"></div>
                            <div class="composition mx-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div style="height: 50px" ></div>
    
    
    
</main>

    <?php include '../includes/footer.php' ?>
</body>
</html>