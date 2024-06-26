<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alterar Turma</title>
</head>

<body>
    <main class="container">
        <h3>Alterar Turma</h3>
        <form action="/turma/alterando" method="post">
            <input type="hidden" name="id" value="<?= $resultado["id"] ?>">
            <div class="row">
                <div class="col-6">
                    <label for="id" class="form-label">ID:</label>
                    <input type="number" name="id" class="form-control" value="<?= $resultado["id"] ?>" disabled>
                </div>
                <div class="col-6">
                    <label for="turno" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" value="<?= $resultado['nome'] ?>">
                </div>
                <div class="col-6">
                    <label for="turno" class="form-label">Turno:</label>
                    <input type="text" name="turno" class="form-control" value="<?= $resultado['turno'] ?>">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
            <a href="/turma" class="btn btn-secondary">
                Voltar
            </a>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>