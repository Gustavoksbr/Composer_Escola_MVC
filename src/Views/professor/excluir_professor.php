<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Excluir Professor</title>
</head>

<body>
    <main class="container">
        <h3>Excluir Professor</h3>
        <form action="/professor/excluindo" method="post">
            <input type="hidden" name="id" value="<?= $resultado["id"] ?>">
            <div class="row">
                <div class="col-6">
                    <label for="id" class="form-label">ID:</label>
                    <input type="number" name="id" class="form-control" value="<?= $resultado["id"] ?>" disabled >
                </div>
                <div class="col-6">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" value="<?= $resultado['nome'] ?>" disabled >
                </div>
                <div class="col-6">
                    <label for="materia" class="form-label">Materia:</label>
                    <input type="text" name="materia" class="form-control" value="<?= $resultado['materia'] ?>" disabled >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <label class="form-label">⚠️</label>
                    <p class="alert alert-warning ">Você deseja realmente excluir esse registro?</p>
                    <button type="submit" class="btn btn-danger">
                        Excluir
                    </button>
                    <a href="/professor" class="btn btn-secondary">
                        Voltar
                    </a>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>