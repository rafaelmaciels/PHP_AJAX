<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <h3>Realizar a consulta usando a função de CallBack sem jQuery</h3>

        <script>
            function retornarProdutos(data) {
                 console.log(data);

            }
        </script>
    </head>

    <body>


        <script src="http://localhost:63342/unidade_07/gerar_json.php?callback=retornarProdutos"></script>
    </body>
</html>