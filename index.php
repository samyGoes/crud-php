<?php
    require_once("model/Catos.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
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
                            <nav><span class="btn-fecha"><i class="fa-solid fa-xmark"></i></span></nav>
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
                                    <label for="pelagem"> Pelagem </label>
                                    <input type="text" id="pelagem" name="pelagem" required>
                                </p>
                                <p>        
                                    <label for="idade"> Idade </label>
                                    <input type="text" id="idade" name="idade" required> 
                                </p>

                                <button type="submit"> CADASTRAR </button>
                            </form>
                        </div>
                    

                        <!-- ATUALIZAR -->
                        <div class="container" id="form-atualizar">   
                            <nav><span class="btn-fecha"><i class="fa-solid fa-xmark"></i></span></nav>           
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
                                    <label for="pelagem"> Pelagem </label>
                                    <input type="text" id="pelagem" name="pelagem">
                                </p>
                                <p>        
                                    <label for="idade"> Idade </label>
                                    <input type="text" id="idade" name="idade">
                                </p>

                                <button class="btn-atualizar" type="submit"> ATUALIZAR </button>
                                <!-- <button class="btn-voltar" type="button"> voltar </button> -->
                            </form>
                        </div>

                        <!-- DELETAR -->
                        <div class="container" id="form-deletar">  
                            <nav><span class="btn-fecha"><i class="fa-solid fa-xmark"></i></span></nav>
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
                            <p> CATOS CADASTRADOS </p> 
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
                                <th> Pelagem </th>
                                <th> Idade </th>
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
                                    <td> <?php echo $lista["pelagem_cato"]; ?> </td>
                                    <td> <?php echo $lista["idade_cato"]; ?> </td> 
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

        <script src="script.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://kit.fontawesome.com/a5226a0b94.js" crossorigin="anonymous"></script>
    </body>
</html>