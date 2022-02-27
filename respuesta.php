<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>respuesta</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php

echo "<div id=\"For\">";

echo "<h1>Formulario respuestas</h1>\n";

print "<p>Tu nombre es: ".$_GET['Nombre']."</p>\n";
$genero = $_GET['Generos'];
echo "<img src=\"./Imágenes/$genero.jpg\" alt=\"hv\" width=\"150\" \n>";

switch ($genero) {
    case 'HeatyMetal':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n";
        print    "<p>(Iron Maiden, Killer)</p>\n";
    break;
    case 'Progresivo':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n";
        print    "<p>(Dream Theater, Distance over time)</p>\n";
    break;
    case 'Trash':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n";
        print    "<p>(Slayer, Regin Blood)</p>\n";
    break;
    case 'Power':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n";
        print    "<p>(DragonForce, Killer elite)</p>\n";
    break;
    case 'Death':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n";
        print    "<p>(Cannibal Corpse, Tomb of the mutilated)</p>\n";
    break;
    case 'Glam':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n"; 
        print    "<p>(Alice Cooper, Detroit Stories)</p>\n";
    break; 
    case 'Metalcore':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n"; 
        print    "<p>(Asking Alexandria, The black)</p>\n";
    break;
    case 'Stoner':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n"; 
        print    "<p>(Queen of the Stone Age, Song for the deaf )</p>\n";
    break;
    case 'Nu':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n";
        print    "<p>(Slipknot, The grey Chapter)</p>\n";
    break; 
    case 'Industrial':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n"; 
        print    "<p>Rammstein, Sehnsucht</p>\n";
    break;
    case 'Djent':
        print    "<p>Tu genero favorita: ".$_GET['Generos']."</p>\n"; 
        print    "<p>Periphery, Periphery III Select Dificulty</p>\n";
    break;            
    default:
    break;


}


print "<br>";

print "<p>Tocas: </p>";

print "<br>";

$ins = $_GET['instrumento'];

if ($ins=='...'){
    print "<p>No tocas nada</p>";
} else if ($ins!=' '){
    print "<img src=\"./Imágenes/$ins.jpg\" alt=\"i\" width=\"150\">\n";
    print "<br>";
    print $ins;
}
print "<br>";

switch ($_GET['play']) {
    case 'simucho':
    print "<p>Tocas Mucho ;)</p>";    
        break;
    case 'sipoco':
    print "<p>Tocas a veces :)</p>";    
        break;        
    case 'notoco':
    print "<p>No tocas :/</p>";
        break;
    default:       
        break;
}

print "<br>";
print "<div id=\"Video\">";
print    "<h3>Ultimo hit \m/</h3>";
print    "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mDKIIDQczWI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
print "</div>";

print "<br>";

print "<p>Tu opinion de la cancion es:</p>\n";

for ($i = 1; $i <= 5;$i++){

if ($i <= $_GET['stars']){
        print "<img src=\"./Imágenes/stars.jpg\" alt=\"s\" width=\"100\">";
    } else{     
        print "<img src=\"./Imágenes/staroff.jpg\" alt=\"s\" width=\"100\">";
    }
}
print "<br>";

print $_GET['Opinion'];

print "<br>";

$cadena = $_GET['Opinion'];

echo "Hay ".str_word_count($cadena, 0). " palabras";
 
$array_cadena = str_word_count($cadena, 1);
 
print "<br>";

print "<a href=\"./index.php\">volver al formulario</a>\n";

echo "</div>";

?>
</body>
</html>