<?php
require_once '_db.php';
switch($_POST['funct']){
    case 'validarLogin':
        validacion();
    break;
    default:
        echo "función no válida";
    break;
}
function validacion(){
    global $db;
    extract($_POST);
    $respuesta = [];
    if($usuario != '' && $password != ''){
        $consulta = $db->select('usuarios', '*', ['usuario'=>$usuario, '_password'=>$password]);
        if($consulta){
            // correcto
            $respuesta['status'] = 1;
        } else {
            // incorrecto
            $respuesta['status'] = 2;
        }
    } else {
        // datos vacíos
        $respuesta['status'] = 3;
    }
    echo json_encode($respuesta);
}
?>