<?php
    require('../Controllers/User_Controller.php');
    $controller = new User_Controller();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/styles/style.css">
    <title>Iniciar Sesion</title>
</head>
<body class="bg-dark">
    <div class="d-flex justify-content-center mt-5">
        <div class="card w-50 p-4 bg-ligth">
           
            <h1 class="display-5 text-center mb-3">Iniciar Sesion</h1>
            
            <form method="post">
                <input type="text" class="form-control mb-3" name="user" placeholder="Usuario">
                <input type="password" class="form-control mb-3" name="pass" placeholder="Contraseña">
                <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-dark w-50" value="Iniciar" name="submit-login" >
                </div>
            </form>
            <?php
                if(isset($_POST['submit-login'])){
                    if(strlen($_POST['user']) && strlen($_POST['pass'])){
                        
                        $result = $controller->valid($_POST['user'], $_POST['pass']);

                        if (empty($result)) {
                            # code...
                            echo "<div class='alert alert-danger mt-3 ' role='alert'>
                                Las credenciales ingresadas no existen
                            </div>";
                        }else{
                            // session_start();
                            // if(isset($_SESSION['user'])){
                                
                            //     $_SESSION['user'] = $result["user"];
                            // }
                            // si sabes como bien como crear la variable de sesion
                            // me ayudas con eso

                            header('Location: main.php');
                        }
                    }
                }
            ?>
        </div>
    </div>
    

</body>
</html>