<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-sm-4">
            
        </div>
        <div class="col-sm-3">
            <div class="alert alert-danger" role="alert">Correo y/o Contraseña Incorrecta</div>
            <div class="container">
                <div class="card" style="width: 18rem">
                 <form class=" px-4 py-4" method="post" action="../scripts/logindb.php">
                       <div class="form-group">
                         <label for="email">Email address</label>
                         <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com">
                       </div>
                        <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" value="enviar" class="btn btn-success">Enviar</button><br><br>
                        <ul class="nav justify-content-center">
                            <a href="../index.html">Volver al Inicio</a>    
                        </ul>
                 </form>
            </div>    
            </div>     
        </div>
        <div class="col-sm-4">
            
        </div>
    </div>                         
</body>
</html>






