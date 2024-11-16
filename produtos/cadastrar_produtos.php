<?php
    include "../conexao.php";

    if(isset($_REQUEST['descricao'])){
        //entrada
        $descricao = trim($_REQUEST['descricao']);
        $preco = trim($_REQUEST['preco']);
        $estoque = trim($_REQUEST['estoque']);

        //processamento
        $sql = "insert into produto(descricao,preco,estoque) values ('$descricao','$preco','$estoque')";
        $cadastrar = mysqli_query($conexao,$sql);

        //saída feedback do usuário
        if($cadastrar){
            echo "
            <script>
                alert('Produto Cadastrado com Sucesso!');
                window.location = 'listar_produtos.php';
            </script>
            ";
        }
    }
    else {
        //tratamento de erro e redirecionamento
        echo "
            <p> Esta é uma página de tratanento de dados </p>
            <p> Clique <a href='produtos.php'> aqui </a> para acessar o formulário de cadastro </p>
        ";
    }

?>