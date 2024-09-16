<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    //Importar la conexion a la base de datos
    require 'includes/config/database.php';
    $db = conectarDB();

    //Errores de validacion
    $errores = [];

    //autenticar uauarios
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = mysqli_real_escape_string($db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email){
            $errores[] = "El Correo es obligatorio o es invalido";
        }
        if(!$password){
            $errores[] = "El password es obligatorio";
        }
        if(empty($errores)){
            //Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '$email'";
            $resultado = mysqli_query($db, $query);

            if($resultado->num_rows){
                //comprobar el password
                $usuario = mysqli_fetch_assoc($resultado);

                //Verificar si el password es correcto o no
                $auth = password_verify($password, $usuario['password']);
                if($auth){
                    //Iniciar la sesion
                    session_start();
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    header('Location: /admin/index.php');
                }else{
                    $errores[] = "La contraseña es incorrecta";
                }
            }else{
                $errores[] = "El usuario no existe";
            }
        }
    }

    //Incluir el header
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesion</h1>
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error;?>
        </div>
    <?php endforeach;?>
        
    <form action="" class="formulario" method="POST">
        <fieldset>
            <legend>Usuario Y Contraseña</legend>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" id="email" required>

            <label for="password">password</label>
            <input type="password" name="password" placeholder="password" id="password" required>
        </fieldset>
        <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
    </form>
</main>

<?php
    incluirTemplate('footer');
?>