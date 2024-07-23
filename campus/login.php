<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">

    <!--::::LINK ICONOS::::::-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Login Campus</title>
</head>
<body>



    
    <div class="container" style="margin-top: 25px;">

        <div style="text-align: center;">
            <img src="../img/INSIGNIA.2022.png" width="200px"><br>
            <label for="" style="font-size: 25px; font-weight: bold;">Formulario de Login</label>
        </div>
        <br><br>
        <form action="" method="POST" id="form_login">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Usuario</label>
                        <input type="text" id="user" class="form-control" autocomplete="usuario">
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="text" id="pass" class="form-control" autocomplete="password">
                    </div>
                    <br><br>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
        <div style="text-align: center;">
            <button id="login" class="btn btn-lg btn-success">INGRESAR</button>
        </div>

    </div>
    
</body>

<script src="../js/jquery.min.js"></script>

<script>
    $('#login').click(function(event) {
        event.preventDefault();

        var user = $('#user').val();
        var pass = $('#pass').val();

        $.ajax({
            url: 'models/login_model.php',
            method: 'POST',
            data: {user:user,pass:pass},
            success: function(res) {
                console.log(res);
                if (res == "true") {
                    console.log('INGRESADO');
                    window.location.href = "views/convocatoria.php";
                } else {
                    console.log('NO INGRESADO');
                }
            }
        });
    });
</script>

</html>