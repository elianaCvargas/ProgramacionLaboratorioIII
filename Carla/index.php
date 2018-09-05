<?PHP
include_once "persona.php";
include_once "imaterias.php";
include_once "alumno.php";

#var_dump($_GET);
#var_dump($_POST);
//echo $_POST["nombre"];
echo "<br>";
//echo $_REQUEST["nombre"];
echo "<br>";
echo "<br>";
 //var_dump($_SERVER);//muestra todas la propiedades del servidor(no  hace falta poner un  echo)

//ISSET($_GET("variable"));

switch ($_SERVER["REQUEST_METHOD"])
{
    case "POST":
    {
        if(!ISSET($_POST["nombre"]) || !ISSET($_POST["apellido"]) ||!ISSET($_POST["legajo"]) )
        {   
            echo "FALTAN CONFIGURAR VARIABLES"; 
            break;
        }
        $alumno = new alumno($_POST["nombre"], $_POST["apellido"],$_POST["legajo"]);
        $alumno->inscribirMaterias("PROGRAMACION 3");
        $encodedObj =  json_encode($alumno);
        echo $encodedObj;

        //ESCRIBO   
        $file = fopen("Alumno.txt", "a");
        fwrite( $file,$encodedObj );
        fclose($file);

        //LEO
        $fileToRead = fopen("Alumno.txt", "r");
        //fgets lee por linea
        //fread lee el archivo entero
        $fileReaded = fread($fileToRead, 4096);
        //
        $fileDecoded = json_decode($fileReaded);

         var_dump($fileDecoded); 


        fclose($fileToRead);



        // $decodeObj =  json_decode($encodeObj);
        // echo $decodeObj;

        // $alumno->__SET("nombre","COCO");
        // echo $alumno->__GET("nombre");

        // echo $alumno->inscribirMaterias("PROGRAMACION 3");
    }
    break;
   
}



?>