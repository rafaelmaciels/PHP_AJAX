<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
            <div id="curso">Usa o # para chamar o ID</div>
            <div class="curso">Usa o . para chamar a CLASS</div>


            <script src="jquery.js"></script>
            <script>
                $('div.curso').load('dados.txt');
            </script>
    </body>
</html>