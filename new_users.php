<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "navbar.php" ?>
    <title>AUTOMOVILES</title>
</head>

<body>

    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <h3>NUEVO AUTOMOVIL</h3>
                <hr>
                <form method="post" action="registro.php">
                    <div class="form-group">
                        <label for="autoID">autoID</label>
                        <input id="autoID" class="form-control" type="text" name="autoID">
                    </div>
                    <div class="form-group">
                        <label for="matricula">matricula</label>
                        <input id="matricula" class="form-control" type="text" name="matricula">
                    </div>
                    <div class="form-group">
                        <label for="marca">marca</label>
                        <input id="marca" class="form-control" type="text" name="marca">
                    </div><br>
                    <div class="form-group">
                        <label for="modelo">modelo</label>
                        <input id="modelo" class="form-control" type="text" name="modelo">
                    </div>
                    <div class="form-group">
                        <label for="color">color</label>
                        <input id="color" class="form-control" type="text" name="color">
                    </div>
                    <div class="form-group">
                        <label for="precio">precio</label>
                        <input id="precio" class="form-control" type="double" name="precio">
                    </div>
                    <button class="btn btn-primary" name="registro" type="submit">Guardar</button>
                </form>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>