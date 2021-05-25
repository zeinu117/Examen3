<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo.css">
    <title>Examen 3</title>
</head>

<body>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="card">
                <div class="card-body" style="background-color: #dedde5;">
                    <form method="post" onsubmit="return calcular()" id="frmDatos" name="form">
                        <div class="card">
                            <div class="card-body" style="background-color: #dedde5;">
                                <!--card principal-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <small>Datos de Empleado</small>
                                        <div class="card" style="background-color: #dedde5;">
                                            <!--card segunda-->
                                            <div class="card-body">
                                                <!--card segunda-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="sueldo">Sueldo:</label>
                                                        <input type="text" id="sueldo" name="sueldo" pattern="[0-9]+"
                                                            required>
                                                        <br>
                                                        <label for="sexo">Sexo:</label>
                                                        <select name="tipo" id="tipo">
                                                            <option value="">seleccionar</option>
                                                            <option value="femenino">Femenino</option>
                                                            <option value="masculino">Masculino</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edad">Edad:</label>
                                                        <input type="text" id="edad" name="edad" pattern="[0-9]+"
                                                            required>
                                                        <br>
                                                        <label for="nacionalidad">Nacionalidad:</label>
                                                        <select class="custom" name="tipo2" id="tipo2">
                                                            <option value="nacional">Nacional</option>
                                                            <option value="extranjero">Extranjero</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-7">
                                        <small>Cursos</small>
                                        <div class="card" style="background-color: #dedde5;">
                                            <!--card tercera-->
                                            <div class="card-body">
                                                <!--card tercera-->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" name="curso[]" id="php" value="90">
                                                        <label for="php">PHP</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" name="curso[]" id="java" value="105">
                                                        <label for="java">Java</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" name="curso[]" id="asp" value="120">
                                                        <label for="asp">ASP.Net</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" name="curso[]" id="oracle" value="180">
                                                        <label for="oracle">Oracle</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" name="curso[]" id="vb" value="165">
                                                        <label for="vb">VB.Net</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="checkbox" name="curso[]" id="bd" value="45">
                                                        <label for="bd">Introducción a BD</label>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ">
                                        <small>Antigüedad</small>
                                        <div class="card" style="background-color: #dedde5;">
                                            <!--card cuarta-->
                                            <div class="card-body">
                                                <!--card cuarta-->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <input type="radio" name="antiguedad" id="1a5" value="1a5">
                                                        <label for="1a5">1 a 5 años</label>
                                                        <br>
                                                        <br>
                                                        <input type="radio" name="antiguedad" id="6a10" value="6a10">
                                                        <label for="6a10">6 a 10 años</label>
                                                        <br>
                                                        <br>
                                                        <input type="radio" name="antiguedad" id="mas" value="mas">
                                                        <label for="mas">Más de 11</label>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-7">
                                        <button class="btn btn-secondary float-right text-center text-dark custom"
                                            style="background-color: #dedde5;">Calcular</button>
                                        <br>
                                        <br>
                                        <span class="btn btn-secondary float-right text-center text-dark custom"
                                            style="background-color: #dedde5;"
                                            onclick="limpiarFormulario()">Limpiar</span>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="cantidadPagar">Bono:</label>
                                        <input type="text" class="float-right" id="cantidadPagar" readonly>
                                        <br>
                                        <br>
                                        
                                        <a class="btn btn-secondary float-right text-center text-dark custom"
                                            style="background-color: #dedde5;" href="#" role="button">salir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="app.js"></script>
</body>

</html>