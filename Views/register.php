<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/styles/style.css">
    <title>Crear Cuenta</title>
</head>
<body class="bg-dark">
    <div class="d-flex justify-content-center mt-5">
        <div class="card w-50 p-4 bg-ligth">
           
            <h1 class="display-5 text-center mb-3">Crear Cuenta</h1>
            
            <form method="post">
                <div class="row">   
                    <div class="form-group mb-3 col-md-6">
                        <label for="name" class="form-label">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="name" name="user" placeholder="">
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="uni" class="form-label">Institucion Universitaria</label>
                        <input type="text" class="form-control" id="uni" name="uni" placeholder="">
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="">
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id="pass" name="pass" placeholder="">
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" name="register" class="btn btn-dark btn-block" value="Registrar Usuario"/>
                </div>
            </form>
            <a href="login.php" class="link mt-3">Iniciar Sesion</a>
        </div>
    </div>
    
</body>
</html>