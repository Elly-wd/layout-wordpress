<?php
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasil Loteria</title>
</head>

<body>
    <main>
        <div class="header">
            <p>.</p>
        </div>
        <div class="inicio">
            <div class="col1">
                <img class="logo-BR" src="<?php echo get_template_directory_uri(); ?>/img/BR-logo-mobile.png"></img>
                <p class="texto-principal">Experiência Nacional e Tecnologia Internacional de ponta a serviço dos Estados.</p>
                <div class="mini-divisoria"></div>
                <div class="titulo-verde-claro">Novidades em breve!</div>
            </div>

            <div class="col2">
                <div class="novidades">
                    <img class="img-novidades" src="<?php echo get_template_directory_uri(); ?>/img/img-Topo-1.png">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16" style="margin-left: -11%; color: #94A820; position: fixed;
                        cursor: pointer; margin-top: 70%;">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-chevron-up" viewBox="0 -3 16 18" style="color: #94A820;">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                        </svg>
                    </svg>
                
                </div>
            </div>
        </div>
        <div class="sobre">
            <div class="col1">
                <img class="tablet-img" src="<?php echo get_template_directory_uri(); ?>/img/tablet.png">
            </div>

            <div class="col2">
                <p class="titulo-verde-escuro">O QUE É BRLOT</p>
                <div class="mini-divisoria"></div>
                <p class="texto-sobre" style="color: #97CF4E">A BRLOT é uma empresa que nasceu para contribuir com as loterias estaduais.</p>
                <p class="texto-objetivo">A <span class="bold-text">BRLOT</span>, empresa parceira do grupo Sorte Online, nasce com o objetivo de 
                    desenvolver o novo mercado de Loterias Estaduais no Brasil.</p>
            </div>
        </div>

        <div class="parceiros" style="font-size: 12pt !important; margin-top: 28%;">

            <p class="titulo-verde-escuro">A BRLOT É PARCEIRA DO <br> GRUPO <span class="titulo-verde-claro">SORTE ONLINE</span></p>
            <img class="parceiros-img" src="<?php echo get_template_directory_uri(); ?>/img/parceiros.png">
            <img class="rapaz-note-img" src="<?php echo get_template_directory_uri(); ?>/img/rapaz-note.png">
        </div>
    </main>
</body>

</html>