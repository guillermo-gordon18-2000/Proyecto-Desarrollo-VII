

<?php

/*Guillermo Gordon 8-95-2011 */
/* Set conection */

//Incluyo los archivos necesarios
require_once 'Model/db.php';
require("controller/controller.php");

 

//Instancio el controlador
$controller = new Controller;

//Decido la ruta en función de los elementos del array
if (isset($_GET['op'])){ //

    $opcion=$_GET['op'];

    $controller->UPDATE_FIREBASE();

    if ($opcion=="crear")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
    $controller->crearUsuario();
    }else if($opcion=="permitido"){
 $controller->IngresarPanel();
        
    }else if($opcion=="dash"){
        $controller->IngresarPanel();
       

    }else if($opcion=="Analit"){
        $controller->VistaAnalitica();

    }else if($opcion=="report"){
  
        $controller->VistaReporte();
        
    }elseif ($opcion=="acceder"){
        //Llamo al método ver pasándole la clave que me están pidiendo
        $controller->Ingresar();
        
     }elseif ($opcion=="actualizar"){

        //Llamo al método ver pasándole la clave que me están pidiendo
    
        $controller->ActualizarDatos();
       
    }elseif ($opcion=="Agregar_conferencia"){

        //Llamo al método ver pasándole la clave que me están pidiendo
    
//  $controller->ActualizarDatos();
$controller->AGregar_Conferencia();
    }elseif ($opcion=="Agregar_Staff"){

        //Llamo al método ver pasándole la clave que me están pidiendo
    
        $controller->Agregar_Staff();
       
    }elseif ($opcion=="actualizar_contra"){

        //Llamo al método ver pasándole la clave que me están pidiendo
    
        $controller->Actualizar_Contraseña();
       
    }else if($opcion=="ASISITENCIA"){

        $controller->Guardar_Asistencia();

    }else if($opcion=="Setting"){
        $_SESSION["DIA"]=" ";
       
        $controller->VistaSettings();

    }else if($opcion=="Logg"){

        $controller->index();
            $_SESSION['Nivel']="";
    }

}else{

    //Llamo al método por defecto del controlador
   // $controller->index();
 

        $controller->index();
      
}
?>