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
        <div class="inicio">
            <div class="col1">
                <img class="logo-BR" src="<?php echo get_template_directory_uri(); ?>/img/logo-BRLot.png"></img>
                <p class="texto-principal">Experiência Nacional e Tecnologia Internacional de ponta a serviço dos Estados.</p>
                <div class="mini-divisoria"></div>
                <div class="titulo-verde-claro">Novidades em breve!</div>
            </div>

            <div class="col2">
                <div class="novidades">
                    <img class="img-novidades" src="<?php echo get_template_directory_uri(); ?>/img/img-Topo.png">
                    <img class="fundo-verde" src="<?php echo get_template_directory_uri(); ?>/img/circulo-verde.png">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="scroll-up bi bi-circle" viewBox="0 0 16 16"">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-chevron-up" viewBox="0 -3 16 18" style="color: #94A820;">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                        </svg>
                    </svg>
                    <div class="saiba-mais">
                        <p class="titulo-verde-claro" style="font-size: 8pt;">SAIBA MAIS</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61.407" viewBox="0 0 25 61.407">
                            <g id="mouse_scroll" data-name="mouse scroll" transform="translate(-981 -837)">
                                <path id="Caminho_8244" data-name="Caminho 8244" d="M8.527,1.293,7.234,0,0,7.234l7.234,7.234,1.293-1.293-5.94-5.94Z" transform="translate(986.266 889.88) rotate(-90)" fill="#94a820"/>
                                <path id="Caminho_8245" data-name="Caminho 8245" d="M8.527,1.293,7.234,0,0,7.234l7.234,7.234,1.293-1.293-5.94-5.94Z" transform="translate(986.266 898.407) rotate(-90)" fill="#94a820" opacity="0.5"/>
                                <g id="Retângulo_13" data-name="Retângulo 13" transform="translate(981 837)" fill="#fff" stroke="#94a820" stroke-width="2">
                                <rect width="25" height="40" rx="12.5" stroke="none"/>
                                <rect x="1" y="1" width="23" height="38" rx="11.5" fill="none"/>
                                </g>
                                <rect id="Retângulo_14" data-name="Retângulo 14" width="3" height="8" rx="1.5" transform="translate(992 848)" fill="#94a820"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="sobre">
            <div class="col1">
                <img class="tablet-img" src="<?php echo get_template_directory_uri(); ?>/img/tablet.png">
            </div>

            <div class="col2">
                <p class="titulo-verde-escuro">O QUE É BRLOT</p>
                <div class="mini-divisoria" style="    margin-left: 13%; margin-top: -4%; margin-bottom: 5%;"></div>
                <p class="texto-sobre" style="color: #97CF4E">A BRLOT é uma empresa que nasceu para contribuir com as loterias estaduais.</p>
                <p class="texto-objetivo">A <span class="bold-text">BRLOT</span>, empresa parceira do grupo Sorte Online, nasce com o objetivo de 
                    desenvolver o novo mercado de Loterias Estaduais no Brasil.</p>

                    <div class="saiba-mais" style="margin-top: -4%;">
                        <p class="titulo-verde-claro" style="font-size: 8pt;">SAIBA MAIS</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61.407" viewBox="0 0 25 61.407">
                            <g id="mouse_scroll" data-name="mouse scroll" transform="translate(-981 -837)">
                                <path id="Caminho_8244" data-name="Caminho 8244" d="M8.527,1.293,7.234,0,0,7.234l7.234,7.234,1.293-1.293-5.94-5.94Z" transform="translate(986.266 889.88) rotate(-90)" fill="#94a820"/>
                                <path id="Caminho_8245" data-name="Caminho 8245" d="M8.527,1.293,7.234,0,0,7.234l7.234,7.234,1.293-1.293-5.94-5.94Z" transform="translate(986.266 898.407) rotate(-90)" fill="#94a820" opacity="0.5"/>
                                <g id="Retângulo_13" data-name="Retângulo 13" transform="translate(981 837)" fill="#fff" stroke="#94a820" stroke-width="2">
                                <rect width="25" height="40" rx="12.5" stroke="none"/>
                                <rect x="1" y="1" width="23" height="38" rx="11.5" fill="none"/>
                                </g>
                                <rect id="Retângulo_14" data-name="Retângulo 14" width="3" height="8" rx="1.5" transform="translate(992 848)" fill="#94a820"/>
                            </g>
                        </svg>
                    </div>
            </div>
        </div>

        <div class="parceiros">
            <p class="titulo-verde-escuro out" style="text-align: center;">A BRLOT É PARCEIRA DO <br> GRUPO <span class="titulo-verde-claro">SORTE ONLINE</span></p>
            <img class="parceiros-img" src="<?php echo get_template_directory_uri(); ?>/img/BRLOT-Parceira.png">
            <img class="rapaz-note-img" src="<?php echo get_template_directory_uri(); ?>/img/rapaz-note.png">
        </div>
    </main>
</body>

</html>

<?php 
require_once 'footer.php';
?>