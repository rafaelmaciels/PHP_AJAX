<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
            <div id="nome"></div>
            <div id="mensagem"></div>

        <script src="jquery.js"></script>
        <script>
           // .done   - Prever sucesso de carregamento
           // .fail   - Prever falha de carregamento
           // .always - Faz a chamada indepentende do sucesso ou falha

            $.ajax({
                url:'nome.php'
            }).done(function (valor) {
                $('div#nome').html(valor);
            }).fail(function () {
                $('div#nome').html("Falha no carregamento");
            }).always(function () {
                $('div#mensagem').html("Mensagem de qualquer coisa");

            })

        </script>
    </body>
</html>