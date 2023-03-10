<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])

        <title>Laravel</title>

    </head>
    <body style="background-color:#D3D3D3">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-sm bg-primary">
                <div class=" container-fluid">
                    <a class="navbar-brand" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <div class="bg-white">
            <div class="container px-5">
            &nbsp;

                <h3>Cadastrar - Agendamento de Potenciais Clientes</h3>
                <p>Sistema utilizado para agendamento de serviços</p>


                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="(xx)xxxxx-xxxx">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Origem:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Celular</option>
                        <option value="1">Telefone</option>
                        <option value="2">Email</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Data do Contato:</label>
                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="dd/mm/aaaa">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="button" class="btn btn-primary mb-5">Cadastrar</button>
                </div>
            </div>
        </div>
    </body>
</html>
