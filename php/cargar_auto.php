<?php 
include("core.php");
include('class.upload.php');
if(isset($_POST['marca'])){

    if(isset($_FILES)){
       
        $nombres_img = array();
        $destino     = "imagenes";
        for($i=1; $i<=6; $i++){
        $files = $_FILES['files_'.$i.''];
            $extension = pathinfo($files[ 'name' ], PATHINFO_EXTENSION);
            if(($extension=="png") || ($extension=="jpg") || ($extension=="PNG") || ($extension=="JPG") || ($extension == 'JPEG')){
              
                $pic1        = $files;
                $foo         = new Upload($pic1);	
                $mi_nombre   = sha1(microtime());
            if ($foo->uploaded) {
              // save uploaded image with a new name
              $foo->file_new_name_body = $mi_nombre;
              $foo->image_convert = 'jpg';
              $foo->Process($destino);
              
              $foo->file_new_name_body = $mi_nombre;
              $foo->image_resize = true;
              $foo->image_convert = 'jpg';
              $foo->image_x = 50;
              $foo->image_ratio_y = true;
              $foo->Process($destino2);
              
              
            if ($foo->processed) {
               $foo->Clean();
               array_push($nombres_img,$mi_nombre);
              }
            }	

            }
        }
    

    }else{
        echo respuesta("Debes cargar al menos una imagen","danger");
        exit;
    }

    if(count($nombres_img)<=0){
        echo respuesta("Debes cargar imagenes validas en tu solicitud","danger");
        exit;
    }

    if(!isset($_POST['negociable'])){
        $_POST["negociable"] = "NO";
    }else{
        $_POST["negociable"] = "SI";
    }

    $campos                 = array();
    $values                 = array();
    $_POST["fotos_array"]   = serialize($nombres_img);

    array_push($campos,"marca");
    array_push($campos,"modelo");
    array_push($campos,"anio_fabricacion");
    array_push($campos,"combustible");
    array_push($campos,"transmision");
    array_push($campos,"cilindrada");
    array_push($campos,"descripcion");
    array_push($campos,"condicion_tecnica");
    array_push($campos,"kilometros");
    array_push($campos,"precio");
    array_push($campos,"moneda");
    array_push($campos,"negociable");
    array_push($campos,"fotos_array");
    array_push($campos,"nombre");
    array_push($campos,"telefono_1");
    array_push($campos,"telefono_2");
    array_push($campos,"ciudad");

    array_push($values,$_POST["marca"]);
    array_push($values,$_POST["modelo"]);
    array_push($values,$_POST["anio_fabricacion"]);
    array_push($values,$_POST["combustible"]);
    array_push($values,$_POST["transmision"]);
    array_push($values,$_POST["cilindrada"]);
    array_push($values,$_POST["descripcion"]);
    array_push($values,$_POST["condicion_tecnica"]);
    array_push($values,$_POST["kilometros"]);
    array_push($values,$_POST["precio"]);
    array_push($values,$_POST["moneda"]);
    array_push($values,$_POST["negociable"]);
    array_push($values,$_POST["fotos_array"]);
    array_push($values,$_POST["nombre"]);
    array_push($values,$_POST["telefono_1"]);
    array_push($values,$_POST["telefono_2"]);
    array_push($values,$_POST["ciudad"]);
   
    $registrar = new Core();
    $ingresar  = $registrar->RegistrarVehiculo($campos,$values);
    if($ingresar == "error"){
        echo respuesta("Error ingresando la solicitud. Intentalo nuevamente","danger");
        exit;
    }else{
        echo respuesta("Solicitud registrada con exito","success");
        exit;
    }

}

?>