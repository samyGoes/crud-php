<?php
require_once ("model/Catos.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <style>
            *
            {
                border: 0;
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                list-style: none;
            }
        </style>
        
        <!-- -------------------------------------------------------------------------- -->

        <main class="conteudo-pdf">
            <h1 class="titulo"> DOCUMENTO DE LISTAGEM DE CATOS CADASTRADOS </h1>
            <hr>

            <?php
            $cato = new Catos();
            $lista = $cato->listar();

            foreach($lista as $l)
            {
            ?>
                <ul>
                    <li> <strong> ID: </strong> <?php echo $l["id_cato"]; ?> </li> 
                    <li> Nome: <?php echo $l["nome_cato"]; ?> </li>
                    <li> RGA: <?php echo $l["rga_cato"]; ?> </li>
                    <li> Pelagem: <?php echo $l["pelagem_cato"]; ?> </li>
                    <li> Idade: <?php echo $l["idade_cato"]; ?> </li>
                </ul>
                <hr>
            <?php
            }
            ?>
        </main>

        <script type="module" src="assets/js/modules-imports/scr-geracao-pdf.js"></script>   
    </body>
</html>