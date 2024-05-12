<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Alunos</h1>
        <p><?= $mensagem ?></p>
        <a href="/aluno/inserir" class="btn btn-primary">Novo Aluno</a>
        <a href="/home" class="btn btn-secondary">Voltar</a>
        <table class="table table-stripped table-hover" id="tabela">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Nome</th>
                    <th> ID da Turma</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($c = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?= $c['id'] ?></td>
                        <td><?= $c['nome'] ?></td>
                        <td><?= $c['turma'] ?></td>
                        <td>
                            <a href="/aluno/alterar/id/<?= $c["id"] ?>" class="btn btn-warning">
                                Alterar
                            </a>
                            <a href="/aluno/excluir/id/<?= $c["id"] ?>" class="btn btn-danger">
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