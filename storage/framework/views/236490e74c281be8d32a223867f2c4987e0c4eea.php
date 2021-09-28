<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas</title>
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

<h5>Vistas en laravel</h5>
<h3>Crear una vista</h3>
<p>Las vistas generalmente se encuentran en el directorio <code class="c-code">/resources/views</code> de la carpeta principal de nuestro proyecto. Crear una vista con Laravel es muy sencillo, simplemente necesitamos crear un archivo <code class="c-code">.php</code> (o <code class="c-code">.blade.php</code> como veremos en la lección siguiente) en el directorio  <code class="c-code">/views</code>. Dentro de este archivo escribimos el HTML de la vista.</p>
<h3>Retornar una vista</h3>
<p>Para retornar una vista retornamos el llamado a la función helper <code class="c-code">view</code> pasando como argumento el nombre de la vista. El nombre del archivo es relativo a la carpeta <code class="c-code">resources/views</code> y no es necesario indicar la extensión del archivo:</p>
<pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom"><code >public function index()
{
    return view('users');</code>
}</pre>

<h3>Pasar datos a la vista</h3>
<p>Podemos pasar datos a la vista mediante un arreglo asociativo, donde las llaves son el nombre de las variables que queremos pasar a la vista y el valor son los datos que queremos asociar:</p>
<pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom">$users = [
    'Joel',
    'Ellie',
    'Tess',
    //...
];

return view('users', [
    'users' =&gt; $users
]);</pre>

<p>También podemos usar el método <code class="c-code">with</code> encadenándolo al llamado a la función <code class="c-code">view</code> para pasar datos a la vista en formato de array asociativo:</p>

<pre data-enlighter-language="php" data-enlighter-theme="wpcustom">return view('users')-&gt;with([
    'users' =&gt; $users
]);</pre>

<p>Con <code class="c-code">with</code> también podemos pasar las variables de forma individual:</p>

<pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom">return view('users')
    -&gt;with('users', $users)
    -&gt;with('title', 'Listado de usuarios');
</pre>

<p>Si los datos que queremos pasar a la vista se encuentran dentro de variables locales podemos utilizar la función <code class="c-code">compact</code>,  la cual acepta como argumentos los nombres de las variables y las convierte en un array asociativo:</p>

<pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom">$users = [
    ...
];

$title = 'Listado de usuarios';

return view('users', compact('users', 'title'));</pre>

<h3>Escapar código HTML</h3>

<p>Laravel nos ofrece un helper llamado <code class="c-code">e</code> que nos permite escapar HTML que podría ser insertado por los usuarios de nuestra aplicación, de manera de prevenir posibles ataques XSS:</p>

<pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom">&lt;li&gt;&lt;?php echo e($user) ?&gt;&lt;/li&gt;</pre>

</body>
</html><?php /**PATH C:\xampp\htdocs\examen\examen\resources\views/vistas.blade.php ENDPATH**/ ?>