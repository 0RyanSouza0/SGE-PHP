<?php
    // 1º Incluir o arquivo de conexão com Banco de Dados
    include 'database.php';
    include 'header.php';

    //2º Declarar uma variável para receber o comando em SQL 
    $sql_listar = "SELECT * FROM sge_alunos";

    //3º Utlizar a função mysqli_query conectar ao banco e executar 
    // o comando em SQL
    // É necessário armazenar o resultado em uma variável
    $consulta_bd = mysqli_query($conexao, $sql_listar);

?>

<!-- Tabela para listar os dados-->

<div class="tabela">
    <table>
        <!-- Cabeçalho da Tabela -->
        <thead>
            <!-- tr = Table row - Linha da tabela -->
            <tr>
                <!-- th = O Nome que vai no indice da coluna -->
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Atualizar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <!-- Corpo da tabela -->
        <tbody>
            <?php while($dados_bd = mysqli_fetch_array($consulta_bd)){?>
                <tr>
                    <!-- td - Table Data - Campo que vai receber o valor -->
                    <td class="td2"><?php echo $dados_bd['nome_aluno']?></td>
                    <td><?php echo $dados_bd['email_aluno']?></td>
                    <td class="td2"><?php echo $dados_bd['telefone_aluno']?></td>
                    <td><a href="form_atualizar_cad_aluno.php?id_aluno=<?php echo $dados_bd['id_aluno']?>"><img src="imagem/atualizar.png" alt="Atualizar"></a></td>
                    <td class="td2"><a href="excluir_cadastro_cad_aluno.php?id_aluno=<?php echo $dados_bd['id_aluno']?>"><img src="imagem/ryan.png" alt="Excluir"></a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<!-- <a href="index.php">Voltar ao Inicio</a> -->

<?php
    include 'footer.php';
?>