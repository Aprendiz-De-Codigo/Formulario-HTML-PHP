<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="register_usuario.php" method="POST" autocomplete="off">
        <img src="img/logo.svg" alt="">
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-container">
                <input type="password" name="password" placeholder="Contraseña"> 
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="input-container">
                <input type="email" name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="input-container">
                <input type="tel" name="phone" placeholder="Teléfono">
                <i class="fa-solid fa-phone"></i>
            </div>

            <a href="#">Terminos y condiciones</a>

            <input name="send" type="submit" class="btn" value="Enviar">
        </div>
    </form>
        
    
</body>
</html>