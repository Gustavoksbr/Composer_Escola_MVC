<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Turmas</h1>
        <p><?= $mensagem ?></p>
        <a href="/turma/inserir" class="btn btn-primary">Nova Turma</a>
        <a href="/home" class="btn btn-secondary">Voltar</a>
        <br>
        <br>
        <form action="/turma" method="POST">
            <input type="text" name="pesquisa" value="<?= $pesquisa?>" />
            <button>Pesquisar</button>
        </form>
        <table class="table table-stripped table-hover" id="tabela">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Turno</th>
                </tr>
            </thead>
            <tbody>
            
                <?php
                
                foreach($resultado as $c) {
                    ?>
  
                    <tr>
                        <td><?= $c['id'] ?></td>
                        <td><?= $c['nome'] ?></td>
                        <td><?= $c['turno'] ?></td>
                        <td>
                            <a href="/turma/alterar/id/<?= $c["id"] ?>" class="btn btn-warning">
                                Alterar
                            </a>
                            <a href="/turma/excluir/id/<?= $c["id"] ?>" class="btn btn-danger">
                                Excluir
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>