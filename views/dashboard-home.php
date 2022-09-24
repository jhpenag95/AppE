<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-home</title>
    <link rel="stylesheet" href="../styles/Style-home.css">
    <!--====Fonts====-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Orbitron:wght@700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div class="item-header">
            <div class="logo">
                <p>AppE</p>
            </div>
            <div class="imgperfil">
                <img src="../icons/imagenPerfil.png" alt="Imágen de Perfil">
            </div>
        </div>
    </header>
    <main>
        <aside id="nav-contenedor" class="active">
            <ul class="nav-items">
                <li class="items">
                    <a href="#" class="nav-link"><img src="../icons/alert-octagon.svg" alt="Icono para alerta"
                            class="icono-menu"><span>Ingresar Error</span>
                </li></a>
                <li class="items">
                    <a href="#" class="nav-link"><img src="../icons/search.svg" alt="Icono para consulta"
                            class="icono-menu"><span>Consultar</span>
                </li></a>
                <li class="items">
                    <a href="#" class="nav-link"><img src="../icons/archive.svg" alt="Icono para archivo"
                            class="icono-menu"><span>IF. Error</span>
                </li></a>
            </ul>
        </aside>
        <div class="main-contenedor">
            <div class="contenerdor-input">
                <input type="text" class="input-items" placeholder="No. Caso">
                <input type="text" class="input-items" placeholder="Nombre de Empresa">
                <input type="text" class="input-items" placeholder="Nombre descripción del Error">
                <label for="" class="textarea-titulo">Descripición:</label>
                <textarea name="" id="" cols="30" rows="10" placeholder="Descripición:" class="textarea-intems"></textarea>
                <label for="" class="textarea-titulo">Solución:</label>
                <textarea name="" id="" cols="30" rows="10" placeholder="Solución:" class="textarea-intems"></textarea>
                <div class="main-contenedor--btns">
                    <div class="btn-file">
                        <p class="btn-text">Seleccionar</p>
                        <input type="file" value="Subir Archivo" class="subarchivo">
                    </div>
                    <div class="btn-file">
                        <p class="btn-text">Guardar</p>
                        <input type="submit" value="guardar" class="guardar">
                    </div>
                </div>
            </div>
        </div>
        <button class="actmeni">
            <img src="../icons/log-out.svg" alt="icono de menu" id="menuFlecha">
        </button>
    </main>
    
    <!--======Iconos====-->
    <script src="https://kit.fontawesome.com/e0bd086848.js" crossorigin="anonymous"></script>

</body>
<script src="../script/nav-home.js"></script>

</html>