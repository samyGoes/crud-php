<?php
    require_once("model/Catos.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <title> CRUD </title>
    </head>
    <body>

        
        <section>   
            <div class="temas"> 
                <span id="tema-1"></span> 
                <span id="tema-2"></span>
                <span id="tema-3"></span>
            </div>
            <div class="titulo"> <h1> RETRO DESIGN + CRUD E GERAÇÃO DE PDF </h1> </div>     

            <div class="conteudo">
                <div class="sessao-1">    
                    <nav class="nav-menu">
                        <span class="btn-nav" id="btn-nav-cadastrar"> <i class="fa-solid fa-plus"></i> </span>
                        <span class="btn-nav" id="btn-nav-atualizar"> <i class="fa-solid fa-pencil"></i> </span>
                        <span class="btn-nav" id="btn-nav-deletar"> <i class="fa-solid fa-trash"></i> </span>
                    </nav>
            
                    <div class="area-form">
                        
                    <!-- CADASTRO -->
                        <div class="container" id="form-cadastrar">
                            <nav><i class="fi fi-rr-cat-head"></i><span class="btn-fecha"><i class="fa-solid fa-xmark"></i></span></nav>
                            <form class="form-cadastrar" action="cadastra-cato.php" method="post">
                                <p class="form-titulo"> cadastrar catos </p>
                                <p>        
                                    <label for="nome"> Nome </label>
                                    <input type="text" id="nome" name="nome" required>
                                </p>
                                <p>        
                                    <label for="rga"> RGA </label>
                                    <input type="text" id="rga" name="rga" required>
                                </p>
                                <p>        
                                    <label for="raca"> Raça </label>
                                    <input type="text" id="raca" name="raca" required>
                                </p>
                                <p>        
                                    <label for="pelagem"> Pelagem </label>
                                    <input type="text" id="pelagem" name="pelagem" required>
                                </p>
                                <p>        
                                    <label for="data"> Data </label>
                                    <input type="date" id="data" name="data">
                                </p>

                                <button type="submit"> CADASTRAR </button>
                            </form>
                        </div>
                    

                        <!-- ATUALIZAR -->
                        <div class="container" id="form-atualizar">   
                            <nav><i class="fi fi-rr-cat-head"></i><span class="btn-fecha"><i class="fa-solid fa-xmark"></i></span></nav>           
                            <form class="form-atualizar" action="update-cato.php" method="post">
                                
                                <p class="form-titulo"> Atualizar Catos </p>
                                <p>
                                    <label for="id"> ID </label>
                                    <input type="text" id="id" name="id" required>                      
                                </p>
                                <p>        
                                    <label for="nome"> Nome </label>
                                    <input type="text" id="nome" name="nome">
                                </p>
                                <p>        
                                    <label for="rga"> RGA </label>
                                    <input type="text" id="rga" name="rga">
                                </p>
                                <p>        
                                    <label for="raca"> Raça </label>
                                    <input type="text" id="raca" name="raca" required>
                                </p>
                                <p>        
                                    <label for="pelagem"> Pelagem </label>
                                    <input type="text" id="pelagem" name="pelagem">
                                </p>
                                <p>        
                                    <label for="data"> Data </label>
                                    <input type="date" id="data" name="data">
                                </p>

                                <button class="btn-atualizar" type="submit"> ATUALIZAR </button>
                                <!-- <button class="btn-voltar" type="button"> voltar </button> -->
                            </form>
                        </div>

                        <!-- DELETAR -->
                        <div class="container" id="form-deletar">  
                            <nav><i class="fi fi-rr-cat-head"></i><span class="btn-fecha"><i class="fa-solid fa-xmark"></i></span></nav>
                            <form class="form-deletar" action="deleta-cato.php" method="post">                   
                                <p class="form-titulo"> Deletar Catos </p>
                                <p>
                                    <label for="id"> ID </label>
                                    <input type="text" id="id" name="id" required>                      
                                </p>
                                <button class="btn-deletar" type="submit"> EXCLUIR </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="sessao-2"> 
                    <!-- LISTA -->      
                    <div class="box-tabela">
                        <div class="tabela-nav"> 
                            <p> <i class="fi fi-rr-claw-marks"></i> CATOS CADASTRADOS </p> 
                            <form class="tb-pesquisa" action="#" method="post">
                                <input type="text" placeholder="Pesquisar pelo nome..."> 
                                <button type="submit" class="btn-nav" id="pesquisar"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>                   
                        <table class="tabela">
                            <?php
                                $catos = new Catos();
                                $lista_catos = $catos->listar(); 
                            ?>
                            <thead>
                                <th> ID </th>
                                <th> Nome </th>
                                <th> RGA </th>
                                <th> Raça </th>
                                <th> Pelagem </th>
                                <th> Data </th>
                            </thead>
                                                            
                            <tbody>
                            <?php
                                foreach($lista_catos as $lista)
                                { 
                            ?>                   
                                <tr>
                                    <td> <?php echo $lista["id_cato"]; ?> </td>
                                    <td> <?php echo $lista["nome_cato"]; ?> </td>
                                    <td> <?php echo $lista["rga_cato"]; ?> </td>
                                    <td> <?php echo $lista["raca_cato"]; ?> </td>
                                    <td> <?php echo $lista["pelagem_cato"]; ?> </td>
                                    <td> <?php echo $lista["data_nasc_cato"]; ?> </td> 
                                </tr>
                            <?php
                                } 
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <button class="btnPDF"> BAIXAR PDF </button>          
                </div>
            </div>
        </section>

        <p> Uicons de <a href="https://www.flaticon.com/uicons" target="_blank">Flaticon</a> e <a href="https://fontawesome.com/search" target="_blank">FontAwesome</a> </p>
        <p>Figurinha gato preto de <a href="https://www.flaticon.com/br/stickers-gratis/gato-preto" title="gato preto figurinhas" target="_blank">Flaticon Stickers</a></p>

        <script type="module" src="assets/js/modules-imports/scr-tema-menu.js"></script>
        <script type="module" src="assets/js/modules-imports/scr-geracao-pdf.js"></script>

        <!-- ICONES -->
        <script src="https://kit.fontawesome.com/a5226a0b94.js" crossorigin="anonymous"></script>

        <!-- GERAÇÃO DE PDF -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>      
        
    </body>
</html>