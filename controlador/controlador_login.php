<?php 
 if(!empty($_POST["btningresar"])){
    if(!empty($_POST["correo"]) and !empty($_POST["password"])){
      #basededatos
      $resultado=inciarsecion();
      return $resultado;
    }else{
      echo "campos vacios";
    }
 }



 function Conneccion(){//metodo de conneccion a la base de datos
  $host = "localhost";//nombre del servidor 
    $bd = "Proyecto";//nombre de la base de datos
    $user = "postgres";//nombre del usuario
    $pass = "4568";//contrasenia de la base de datos
    $conn = pg_connect("host=$host  dbname=$bd  user=$user  password=$pass");//conecciona la base de datoscon los datos anteriormente mencionados
  }


function inciarsecion(){
  $resultado=consul_correo_admin();
return $resultado;
}


function consul_correo_admin(){
  $correo = $_POST['correo'];
  $contra = $_POST['password'];
  $query = "SELECT id_usuario , pasword FROM administrador WHERE correo = '$correo';";
  
  $consultaadminisitrador = pg_query(Conneccion(), $query);
  if($consultaadminisitrador){
    while ($fila = pg_fetch_assoc($consultaadminisitrador)) {
      $id_usuario = $fila['id_usuario'];
      $contraBD = $fila['pasword']; 
    }
    if($contra == $contraBD){
      //ya puede iniciar secion
      return TRUE;
    }else{
      //no puede iniciar secion
      return FALSE;
    }
  }else {
    //no es un admin seria un docente

    return consul_correo_docente();
  }

}

function consul_correo_docente(){//metodo para buscar el correo del usuario en la base de datos
  $correo = $_POST['correo'];
  $contra = $_POST['pasword'];
  $query = "SELECT id_usuario , pasword FROM docente WHERE correo = '$correo';";
  $consultadocente = pg_query(Conneccion(), $query);
  if($consultadocente){
      while ($fila = pg_fetch_assoc($consultadocente)) {
        $id_usuario = $fila['id_usuario'];
        $contraBD = $fila['pasword']; 
      }
      if($contra == $contraBD){
        //ya puede iniciar secion
        return TRUE;
      }else{
        //no puede iniciar secion
        return FALSE;
      }
    }else {
      //no es un docente no existe el usuario
      return FALSE;
    }
  }
?>