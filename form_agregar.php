<!doctype html>
<html lang="en">

<head>
    <title>Nuevo aprendiz</title>
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
        <h1 class="text-center mt-5 mb-5">AGREGAR APRENDICES</h1>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col"></div>
            <div class="col">
                <form action="agregar.php" method="post">
                    <div class="card">
                        <div class="card-header text-center text-uppercase">DAtos nuevo aprendiz</div>
                        <div class="card-body">
                            <div class="mb-1">
                                <label for="" class="form-label"></label>
                                <select class="form-select form-select" name="tipo" id="tipo">
                                    <option selected>Selecione su tipo de documento</option>
                                    <option value="CC">Cédula de ciudadanía</option>
                                    <option value="TI">Tarjeta de identidad</option>
                                    <option value="PPT">Permiso de protección temporal</option>
                                </select>
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="numero" id="numero" placeholder="Digite su número de documento, sin puntos, espacios o guiones" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Digite sus nombres" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Digite sus apellidos" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <select class="form-select form-select" name="programa" id="programa">
                                    <option selected>Selecione su programa de formación</option>
                                    <option value="Sistemas teleinfomáticos">Sistemas teleinfomáticos</option>
                                    <option value="Programación de software">Programación de software</option>
                                    <option value="Monitoreo ambiental">Monitoreo ambiental</option>
                                    <option value="Electrónica">Electrónica</option>
                                    <option value="Electricidad">Electricidad</option>
                                </select>
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="ficha" id="ficha" placeholder="Digite su número de ficha" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="correo" id="correo" placeholder="Digite su correo electrónico" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="celular" id="celular" placeholder="Digite su número de celular" />
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-success mt-3">
                                    <i class="bi bi-plus-circle-fill"></i> Agregar
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