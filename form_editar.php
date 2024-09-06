<?php

include("conn.php");

$numero = $_GET["numero"];
$query = $conn->query("SELECT * FROM `aprendices` WHERE numero = $numero");

?>

<!doctype html>
<html lang="en">

<head>
    <title>Editar aprendiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h1 class="text-center mt-5 mb-5">EDITAR APRENDICES</h1>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col"></div>
            <div class="col">
                <form action="editar.php" method="post">
                    <div class="card">
                        <div class="card-header text-center text-uppercase">nuevos datos aprendiz</div>
                        <div class="card-body">
                            <?php while ($aprendices = $query->fetch_object()) { ?>
                                <div class="mb-3" style="display: none;">
                                    <label for="" class="form-label fw-bold">Tipo de documento</label>
                                    <input type="text" class="form-control" name="tipo" id="tipo" value="<?= $aprendices->tipo ?>" />
                                </div>
                                <div class="mb-3" style="display: none;">
                                    <label for="" class="form-label fw-bold">Número del documento</label>
                                    <input type="text" class="form-control" name="numero" id="numero" value="<?= $aprendices->numero ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Nombres</label>
                                    <input type="text" class="form-control" name="nombres" id="nombres" value="<?= $aprendices->nombres ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?= $aprendices->apellidos ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Programa formativo</label>
                                    <input type="text" class="form-control" name="programa" id="programa" value="<?= $aprendices->programa ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Número de ficha</label>
                                    <input type="text" class="form-control" name="ficha" id="ficha" value="<?= $aprendices->ficha ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Correo electrónico</label>
                                    <input type="text" class="form-control" name="correo" id="correo" value="<?= $aprendices->correo ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Número de celular</label>
                                    <input type="text" class="form-control" name="celular" id="celular" value="<?= $aprendices->celular ?>" />
                                </div>
                            <?php } ?>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-success mt-3">
                                    <i class="bi bi-plus-circle-fill"></i> Editar
                                </button>
                                <a name="" id="" class="btn btn-danger mt-3" href="index.php" role="button"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
                            </div>
                        </div>
                        <div class="card-footer text-muted"></div>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>