<?php
    // Passo 1 - Abrir conexão
    $servidor = "localhost";
    $usuario = "rafa";
    $senha = "23qlqrcoisa";
    $banco = "andes";

    // Configurações Gerais 
    header('Access-Control-Allow-Origin:*');
    
    $conecta = mysqli_connect("$servidor","$usuario","$senha","$banco");
    
    $selecao = "SELECT  nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta, $selecao);

    $retorno = array();
    while($linha = mysqli_fetch_object($produtos)){
        $retorno[] = $linha;
    }
    
    echo json_encode($retorno);
    















    // Passo 2 - Testar Conexão
    //  if (mysqli_connect_errno()){
    //    die("Conexão falhou: " . mysqli_connect_errno() );
    // }


    // Fechar conexão
    mysqli_close($conecta);
?>