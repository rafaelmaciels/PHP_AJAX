  <?php
  	// Criar conexao
    $conecta = mysqli_connect("localhost","root","","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["nometransportadora"])) {
        $nome       = $_POST["nometransportadora"];
        $endereco   = $_POST["endereco"];
        $cidade     = $_POST["cidade"];
        $estado     = $_POST["estados"];
        $tID        = $_POST["transportadoraID"];
        
        // Objeto para alterar
        $alterar = "UPDATE transportadoras ";
        $alterar .= "SET ";
        $alterar .= "nometransportadora = '{$nome}', ";
        $alterar .= "endereco = '{$endereco}', ";
        $alterar .= "cidade = '{$cidade}', ";
        $alterar .= "estadoID = {$estado} ";
        $alterar .= "WHERE transportadoraID = {$tID} ";
        
        $retorno = array();
        $operacao_alterar = mysqli_query($conecta, $alterar);
        if($operacao_alterar) {
            $retorno["sucesso"] = true;
            $retorno["mensagem"] = "Transportadora alterada com sucesso.";
        } else {
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = "Falha no sistema, tente mais tarde.";
        }
        
        echo json_encode($retorno);
    }
	
	// Fechar conexao
    mysqli_close($conecta);
?>