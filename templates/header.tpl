<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/mobilefirst.css">
    <link rel="icon" href="img/favicon.ico" />
    <title>Punto Home</title>
</head>

<body>
    <div class="contenedor">
        <header>
            <div class="logo">
                <img src="img/logo.png" id="logo" alt="logo de Punto.Home" />
            </div>
            <nav>
                <h2 class="cintaMenuMobile"><button id="btnMenu"><span class="material-icons">&#xe5d2;</span></button>
                    MENU</h2>
                <ul class="itemMenuMobile">
                    <li class="menuAjax" id="index"><a href="showHome"> Home</a>
                    </li>
                    <li class="menuAjax" id="catalogo"><a href="showproducto"> Nuestros Productos</a></li>
                    {if !($admin)}
                        <li class="menuAjax" id="login"><a href="login"> Ingresar usuario </a></li>
                    {else}
                        <li class="menuAjax" id="logout"><a href="logout"> Salir </a></li>
                    {/if}

                </ul>
            </nav>
        </header>
        <div>

</div>