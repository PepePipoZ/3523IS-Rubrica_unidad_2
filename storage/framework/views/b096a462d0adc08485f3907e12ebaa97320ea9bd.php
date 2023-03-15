<?php 
$nombres=array('Jimena','Karely','Laura', 'Maria', 'Cecilia', 'Karim','Jose', 'Joshua','Pedro','Roberto');
$apellidos=array('Jimenez','Ortega','Santana', 'Vega', 'Torres', 'Juarez','Montes', 'Lopez','Salinas','Sanchez');
$edad=array(9,20,22,27,24,18,34,55,44,32);
$sexo=array('Masculino','Femenino');

$personas=[];

for ($x=0;$x<=99;$x++){
    $persona=new stdClass;
    $persona->nombre=$nombres [rand(0,count($nombres)-1)];
    $persona->apellidoPaterno=$apellidos [rand(0,count($apellidos)-1)];
    $persona->apellidoMaterno=$apellidos [rand(0,count($apellidos)-1)];
    $persona->edad=$edad [rand(0,count($edad)-1)];
    $persona->sexo=$sexo [rand(0,count($sexo)-1)];
    array_push($personas,$persona);
}
switch($paps){
    case "todos":
        foreach($personas as $persona){
            echo "Nombre: $persona->nombre";
            echo "<br>";
            echo "ApellidoPaterno: $persona->apellidoPaterno";
            echo "<br>";
            echo "ApellidoMaterno: $persona->apellidoMaterno";
            echo "<br>";
            echo "Edad: $persona->edad";
            echo "<br>";
            echo "Sexo: $persona->sexo";
            echo "<br>";
            echo "<hr>";
        }
    break;
    case "femenino":
        foreach($personas as $persona){
            if($persona->sexo=='Femenino'){
                echo "Nombre: $persona->nombre";
                echo "<br>";
                echo "ApellidoPaterno: $persona->apellidoPaterno";
                echo "<br>";
                echo "ApellidoMaterno: $persona->apellidoMaterno";
                echo "<br>";
                echo "Edad: $persona->edad";
                echo "<br>";
                echo "Sexo: $persona->sexo";
                echo "<br>";
                echo "<hr>";
            }
        }
    break;
    case "masculino":
        foreach($personas as $persona){
            if($persona->sexo='Masculino'){
                echo "Nombre: $persona->nombre";
                echo "<br>";
                echo "ApellidoPaterno: $persona->apellidoPaterno";
                echo "<br>";
                echo "ApellidoMaterno: $persona->apellidoMaterno";
                echo "<br>";
                echo "Edad: $persona->edad";
                echo "<br>";
                echo "Sexo: $persona->sexo";
                echo "<br>";
                echo "<hr>";
            }
        }
    break;
}


?><?php /**PATH C:\xampp\htdocs\ejemplo_siu\resources\views/nombres.blade.php ENDPATH**/ ?>