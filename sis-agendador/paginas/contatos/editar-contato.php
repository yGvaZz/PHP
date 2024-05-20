<?php 
    $idContato = $_GET["idContato"];
    $sql = "SELECT * FROM tbcontatos WHERE idContato ={$idContato}";
    $rs = mysqli_query($conexao,$sql) or die("ERRO AO RECUPERAR OS DADOS NO" . mysqli_error($conexao));
    $dados =  mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Contato</h3>
</header>

<div>
        <form action="index.php?menuop=atualizar-contato" method="post">
             <div>
                <label for="idContato">Id</label>
                <input type="text" name="idContato" VALUE="<?=$dados["idContato"] ?>" >
             </div>

             <div>
                <label for="nomeContato">Nome</label>
                <input type="text" name="nomeContato"  VALUE="<?=$dados["nomeContato"] ?>" required>
             </div>

             <div>
                <label for="emailContato">E-mail</label>
                <input type="email" name="emailContato"  VALUE="<?=$dados["emailContato"] ?>" required>
             </div>

             <div>
                <label for="telefoneContato">Telefone</label>
                <input type="text" name="telefoneContato"  VALUE="<?=$dados["telefoneContato"] ?>" required>
             </div>

             <div>
                <label for="enderecoContato">Endereço</label>
                <input type="text" name="enderecoContato"  VALUE="<?=$dados["enderecoContato"] ?>" required>
             </div>

             <div>
                <label for="sexoContato">Sexo</label>
                <input type="text" name="sexoContato" value="<?=$dados["sexoContato"] ?>" required>
             </div>

             <div>
                <label for="dataNascimento">Data de Nascimento</label>
                <input type="date" name="dataNascContato"  VALUE="<?=$dados["dataNascContato"] ?>" required>
             </div>

             <div>
                <input type="submit" value="Adicionar" name="btAtualiza">
             </div>
        </form>
    </div>