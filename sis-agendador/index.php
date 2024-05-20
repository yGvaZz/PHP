<?php 
include("db/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Agendador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script></head>
    <link rel="stylesheet" href="css/estilo-padrao.css">
    <body>
    <header class="bg-dark">
    <div class="container">
        <h1>Sistema Agendador</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="index.php?menuop=home">Home</a>
            <a href="index.php?menuop=contatos">Contatos</a>
            <a href="index.php?menuop=tarefas">Tarefas</a>
            <a href="index.php?menuop=eventos">Eventos</a>
        </nav>
     </div>
    </header>
    <main>
        
        <?php 
        $menuop =  (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
        switch($menuop){
            
            case 'home':{
                include("paginas/home/home.php");
                break;
            }
            
            case 'contatos': {
                include("paginas/contatos/contatos.php");
                break;
            }

            case 'tarefas': {
                include("paginas/tarefas/tarefas.php");
                break;
            }

            case 'eventos': {
                include("paginas/eventos/eventos.php");
                break;
            }

            case 'cad-contato': {
                include("paginas/contatos/cad-contato.php");
                break;
            }

            case 'inserir-contato': {
                include("paginas/contatos/inserir-contato.php");
                break;
            }

            case 'editar-contato': {
                include("paginas/contatos/editar-contato.php");
                break;
            }

            case 'atualizar-contato': {
                include("paginas/contatos/atualizar-contato.php");
                break;
            }

            case 'excluir-contato': {
                include("paginas/contatos/excluir-contato.php");
                break;
            }
        }

        ?>
        
    </main> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 
</body>
</html>