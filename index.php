<!DOCTYPE HTML>

<html>
    <head>
        <title>Com Licença Sanitária</title>
        <!----Meta tags---> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!----Links---> 
        <link rel="shortcut icon" href="img/logo.png" />
        <!---Adiciona a fonte Quattrocento Sans --->
        <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <!---Adiciona a fonte Ubuntu--->
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <!---Adiciona CSS--->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <main class="container">
            <div class="top" alt="Topo da página">
                <nav class="menu_principal" alt="Menu principal">
                    <ul class="lista_menu_principal">
                        <a href="#">
                            <li>Início</li>
                        </a>
                        <a href="#">
                            <li>Sobre</li>
                        </a>
                        <a href="#">
                            <li>Serviços</li>
                        </a>
                        <a href="#">
                            <li>Contatos</li>
                        </a>
                    </ul>
                </nav>
                <div class="cta">

                    <div class="button-wrapper">
                        <a class="button contrate_ja" href="#">Contrate já</a>
                    </div>

                    <div class="button-wrapper">
                        <a class="button inscreva-se" href="#">Inscreva-se</a>
                    </div>

                </div>

                <div class="img_logo">
                    <img src="<?= get_template_directory_uri(); ?>img/logo.png">
                </div>

            </div>        
            <!---
            <img class="imagem_fundo" src="img/imagem_fundo.png">
            --->
            <header>
               <h1>Somos a solução sanitária da sua empresa</h1>
               <h2>Ganhe tempo e deixe a burocracia por nossa conta</h2>
                
                <div class="button-wrapper">
                    <a class="button saber_mais" href="#">Quero saber mais</a>
                </div>

                <ul class="servicos_header">

                    <li class="servico_icone_nome">
                        <div class="icone_servico">
                            <img src="<?= get_template_directory_uri(); ?>img/icon_licenciamento.png">
                        </div>
                        
                        <p class="nome_servico">
                            Licenciamento e adequação empresarial
                        </p>
                        
                    </li>

                    <li class="servico_icone_nome">
                        <div class="icone_servico">
                            <img src="<?= get_template_directory_uri(); ?>img/icon_care.png">
                        </div>
                        
                        <p class="nome_servico">
                            Especializada em diversas áreas de atuação
                        </p>
                        
                    </li>

                    <li class="servico_icone_nome">
                        <div class="icone_servico">
                            <img src="<?= get_template_directory_uri(); ?>img/icon_lupa.png">
                        </div>
                        
                        <p class="nome_servico">
                            Análise, verificação e adequação legal
                        </p>
                        
                    </li>

                    
                    
                    
                </ul>

                   
            </header>
        </main>


    </body> 
    
</html>