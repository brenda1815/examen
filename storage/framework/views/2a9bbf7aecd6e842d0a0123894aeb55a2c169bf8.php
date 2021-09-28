<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=  <section class="normal markdown-section">
    <title>Vistas con Blade</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
                      
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

<h5>Vistas con blade</h5>
<h3>Crear una vista</h3>
<p>Para poder crear las vistas de nuestro proyecto en Laravel tenemos la opción de utilizar Blade, el cual es el motor de creación de plantillas simples proporcionado por Laravel.
    Permite realizar operaciones con datos,sustitución de plantillas.
    También cuenta con archivos partials, los cuales son pequeños segmentos de código que se usan para partes especificas como formularios, secciones.</p>

    <p> Las vistas que se generan usando Blade usan la extensión .blade.php y se encuentran en la ruta resources/views
Como ejemplo vamos a crear una Pagina Maestra, es decir una plantilla que se repite en varias paginas, en este archivo podemos tener HTML y usar CSS.
1.Crear archivo  nuevo en resources\view con la extensión blade.php (principal.blade.php).</p>
<img class="center" src="img/8.png" width="413" height="300">

    <p>2.Crear controlador en la ruta http\Controllers en el ejemplo creamos HomeController.php en este archivo crearemos la función para mostrar la vista.</p>
<code> <pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom">
    class HomeController extends Controller
{
    public function inicio(){
        return view('principal');
    }
}
</pre>
</code>
<p>3.Crear ruta al archivo en la ubicación routes\web.php. Al crear esta ruta nos permite visualizar la vista como pagina principal.</p>
<code> 
        <pre>
        Route::get('/', 'HomeController@inicio');
        </pre>
</code>
<br>
<p>De esta forma puedes visualizar como pagina tu plantilla Blade llamada principal.blade.php. </p>
</body>
</html><?php /**PATH C:\xampp\htdocs\examen\examen\resources\views/vistas1.blade.php ENDPATH**/ ?>