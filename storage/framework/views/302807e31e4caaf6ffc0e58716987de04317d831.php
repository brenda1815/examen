<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalacion de laravel</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vistas">Vistas en laravel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vistas1">Vistas con blade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rutas">Rutas en laravel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="controladores">Controladores en laravel</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="card mb-3">
    
  <img  aling="center" src="img/1.png"  width="550" height="300">
    
  <div class="card-body">
    <h4 class="card-title">Laravel</h4>
        <p class="card-text">Es un framework PHP. 
        Es uno de los frameworks más utilizados y de mayor comunidad en el mundo de Internet.
        Como framework resulta bastante moderno y ofrece muchas utilidades potentes a los desarrolladores, que permiten agilizar el desarrollo de las aplicaciones web.
        Laravel pone énfasis en la calidad del código, la facilidad de mantenimiento y escalabilidad, lo que permite realizar proyectos desde pequeños a grandes o muy grandes. Además permite y facilita el trabajo en equipo y promueve las mejores prácticas.
    </p>
    <h4>¿Como instalarlo?</h4>
        <p>Para instalar Composer en Windows debemos descargarlo de su página oficial y en la sección Windows Installer, haz click en Composer-Setup.exe.</p>
    <img src="img/2.png" aling="middle" width="513" height="399">
 
    <p>Una vez que la descarga finalice, ejecuta el instalador y haz click en Next.</p>
    <img src="img/3.png" aling="center" width="513" height="399">
    <p>Si quieres administrar tus proyectos mediante el Explorador de Windows puedes seleccionar la opción "Install Shell Menus" aunque lo recomendable es la usar la línea de comandos.</p>
    
    <img src="img/4.png" alt="Composer" width="513" height="399">
    <p>A continuación nos pide que indiquemos la ruta del ejecutable de PHP, en mi caso como estoy trabajando con XAMPP el ejecutable de PHP se encuentra en la ruta C:\xampp\php\ (si usas WAMPP la ruta es C:\wamp\bin\php\php5.5.12) y seleccionas php.exe, luego click en Next.</p>
    <img src="img/5.png" alt="Composer PHP" width="513" height="399" >

    <p>En este punto el instalador de Composer nos muestra la configuración de la instalación, simplemente le damos click a Install.</p>
    <img class="aligncenter size-full wp-image-729" src="img/6.png" alt="Composer Windows" width="513" height="399">

    <p>Una vez esté todo instalado, aparecerán otras donde simplemente debes hacer click en Next, y posteriormente en Finalizar; después de tantos Next, Next típicos de Windows el instalador de Composer habrá puesto en nuestro PATH global la ruta de la carpeta PHP y su propia carpeta Composer. Esto nos permite trabajar desde consola escribiendo sólo php o composer sin necesidad de indicar la ruta del ejecutable. Para ver que todo está en orden vamos a realizar dos pequeñas pruebas, así que es momento de abrir la consola, y teclear:</p>
    <pre>php -v (tecla Enter)
    composer -version (tecla Enter)
    </pre>
    <p>Esto debería devolver la versión de cada uno, como se ve en la siguiente imagen:</p>
    <img class="aligncenter size-full wp-image-730" src="img/7.png" alt="Comandos Composer" width="677" height="451">

    <p>Con esto ya tenemos Composer instalado y funcionando en Windows, ahora solo nos queda instalar Laravel, veamos cómo hacer esto posible.</p>

</div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\examen\examen\resources\views/instalacion.blade.php ENDPATH**/ ?>