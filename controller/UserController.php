<?php
require_once 'models/UserController.php';
class UserController
{
    public function registro()
    {
        require_once 'views/usuarios/registro.php';

    }

    public function saveUsuario()
    {
        if (isset($_POST)) {

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if ($nombre && $apellidos && $email && $password) {
                $usuario = new UserController();
                $usuario->setPrimerNombre($nombre);
                $usuario->setSegundoNombre($);
                $usuario->setPrimerApellido($email);
                $usuario->setSegundoApellido($password);
                $usuario->setCorreo($email);
                $save = $usuario->save();
                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
        }
        header("Location:" . base_url . 'usuario/registro');
    }
}