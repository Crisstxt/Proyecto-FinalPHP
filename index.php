<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto final</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>

<header>
        <img src="./Imágenes/logo.png" alt="logo" width="100">
        
        <h1>Generos del metal</h1>
    
</header>


<div id="Formulario">
    <form action="./respuesta.php" method="get">
    <label for="Nombre" id="Nombre">Nombre:</label>
    <input class="Nombre" type="text" name="Nombre" id="Nombre" placeholder="_________________________________________________________">
    <br>
    <div class="generos">
    <label for="Generos" id="Generos">Genero Prefeirdo:</label>
    <br>
    <input type="radio" name="Generos" id="Generos" value="HeavyMetal"> Heavy Metal
    <br>
    <input type="radio" name="Generos" id="Generos" value="Progresivo"> Progresivo
    <br>
    <input type="radio" name="Generos" id="Generos" value="Trash"> Trash Metal
    <br>
    <input type="radio" name="Generos" id="Generos" value="Power"> Power Metal
    <br>
    <input type="radio" name="Generos" id="Generos" value="Death"> Death Metal
    <br>
    <input type="radio" name="Generos" id="Generos" value="Glam"> Glam Metal
    <br>
    <input type="radio" name="Generos" id="Generos" value="Metalcore"> Metalcore
    <br>
    <input type="radio" name="Generos" id="Generos" value="Stoner"> Stoner
    <br>
    <input type="radio" name="Generos" id="Generos" value="Nu"> Nu-Metal
    <br>
    <input type="radio" name="Generos" id="Generos" value="Industrial"> Industrial
    <br>
    <input type="radio" name="Generos" id="Generos" value="Djent"> Djent
    <br>
    </div>

    <div class="generos">
    <label for="instrumento">Instrumento favorito:</label>
    <br>
    <select name="instrumento" id="instrumento">
    <option value="...">...</option>
    <option value="Guitarra">Guitarra</option>
    <option value="Bajo">Bajo</option>
    <option value="Bateria">Batería</option>
    <option value="Voz">Voz</option>
    <option value="Piano">Piano/Sintetizador</option>
    </select>
   

    <br>
    <label for="play">¿Tocas el instrumento?</label>
    <br>
    <input type="radio" name="play" id="play" value="simucho"> Si, mucho.
    <input type="radio" name="play" id="play" value="sipoco"> Si, poco.
    <input type="radio" name="play" id="play" value="notoco"> No.
    </div>
    <br>

    <div class="generos">
    <div id="Video">
    <h3>Ultimo hit \m/</h3>
    <iframe width="435" height="315" src="https://www.youtube.com/embed/mDKIIDQczWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br>
    
    <label for="stars">Califica la canción con estrellas(0-5):</label>
    <br>
    <input type="number" name="stars" id="stars" min="0" max="5">


    <br>
    <label for="Opinion" id="Opinion">Danos tu opinión sobre la canción</label>
    <br>
    <textarea name="Opinion" id="Opinion" cols="30" rows="10" class="xms" placeholder="Dinos tu opinion"></textarea>
    <br>
    
    <input type="checkbox" name="terminos" id="terminos" required><a href="https://www.amazon.es/gp/help/customer/display.html?nodeId=GLSBYFE9MGKKQXXM">Termino y condiciones</a>
    <br>
    </div>

    <button type="submit">Enviar</button>
    <button type="reset">Borrar todo</button>
    <br>
    
    
</form>
</div>

<footer >
    <p>Entornos de desarrollo</p>
    <p>Cristobal Meneses</p>
</footer>
</body>
</html>