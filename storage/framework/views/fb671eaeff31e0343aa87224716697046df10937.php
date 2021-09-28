<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas con Blade</title>
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
<h3>Rutas con Laravel</h3>
<p>Las rutas son una capa muy importante en Laravel, es por ello que el Framework destina un directorio en la carpeta raíz, llamado <code>routes</code>, para ubicar todas las rutas de la aplicación.  Por defecto, tiene 2 archivos de rutas <code>web.php</code> y <code>api.php</code>. Como sus nombres lo expresan en <code>web.php</code> se definen las rutas para la web y en <code>api.php</code> las rutas para crear APIs para la aplicación.</p>
<p>Podemos definir rutas de varias maneras en esta lección lo hicimos usando una función anónima, que sigue el siguiente formato:</p>
<pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom">Route::get('/esta-es-la-url', function () {
    return 'Hola mundo';
});</pre>
<p>Se escribe la clase <code>Route</code> que llama al método relacionado con el verbo HTTP, en este caso, <code>get</code> que acepta dos parámetros: el primero es la URL que se llamará desde el navegador y el segundo es una función anónima que devuelve lo que queremos mostrar.</p>
<p class="p-info">Más adelante conocerás otras formas de definir rutas, como por ejemplo, usando acciones de controladores.</p>
<p>Para ver la ruta en funcionamiento debemos escribir en el navegador algo como: <code>http://tu-proyecto.dev/esta-es-la-url</code>, esto dependiendo de VirtualHost que hayas creado para tu proyecto. Si no lo tienes puedes usar <code>php artisan serve</code> o revisar la primera lección de este curso donde te explicamos cómo preparar tu entorno de desarrollo.</p>
<h3>Rutas con parámetros</h3>
<p>También con el sistema de rutas de Laravel puedes crear rutas más complejas que necesiten de parámetros dinámicos.  Se pueden definir de la siguiente forma:</p>
<pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom">Route::get('/usuarios/detalles/{id}', function ($id) {
    return "Detalles del usuario: {$id}";
});</pre>
<p>En este caso Laravel se encarga de capturar el segmento de la ruta que es dinámico (lo identifica porque está encerrado entre llaves). Por tanto, en la URL pasamos la identificación del parámetro encerrado entre llaves y en la función anónima lo pasamos como argumento para que pueda ser accedido y usado dentro de dicha función.</p>
<p>Se pueden usar tantos parámetros como sean necesarios, solo es importante que estén encerrados entre llaves <code class="c-code">{}</code> y los nombres pueden ser alfanuméricos pero no está permitido usar el guión <code class="c-code">-</code> pero sí el subrayado <code class="c-code">_</code>. Además, importa el orden de los parámetros pasados a la función anónima, pero no los nombres que se les de. Por ejemplo:</p>
<pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom">Route::get('posts/{post_id}/comments/{comment_id}', function ($postId, $commentId) {
    return "Este el comentario {$commentId} del post {$postId}";
});</pre>
<h3>Rutas con filtros o restricciones de expresiones regulares en los parámetros</h3>
<p>Cuando un usuario hace una petición HTTP, Laravel busca en los archivos de rutas una definición que coincida con el patrón de la URL según el método HTTP usado y en la primera coincidencia le muestra el resultado al usuario. <strong>Por tanto el orden de precedencia de las definiciones de rutas es muy importante.</strong></p>
<p>Para solucionar los posibles conflictos con el parecido en la URL de distintas rutas puedes hacerlo de 2 maneras:</p>
<ul>
<li>Usando el método <code class="c-code">where</code> para agregar condiciones de expresiones regulares a la ruta. Puedes consultar nuestro tutorial <a href="https://styde.net/rutas-con-filtros-en-laravel-5-1/" target="_blank" rel="noopener">Rutas con filtros en Laravel </a>donde te explicamos detalladamente el uso del método <code class="c-code">where</code>.</li>
<li>Ordenando las rutas de tal manera que las más específicas estén al principio y las más generales al final del archivo de rutas.</li>
</ul>
<h3>Rutas con parámetros opcionales</h3>
<p>Cuando el uso de un parámetro no es obligatorio, podemos usar el carácter <code class="c-code">?</code> después del nombre del parámetro para indicar que es opcional.  Sin embargo, debe añadirse un valor por defecto al parámetro cuando lo colocamos en la función, por ejemplo:</p>
<pre class="EnlighterJSRAW" data-enlighter-language="php" data-enlighter-theme="wpcustom">Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}, no tienes apodo";
    }
});</pre>
</head>
</body>
</html><?php /**PATH C:\xampp\htdocs\examen\examen\resources\views/rutas.blade.php ENDPATH**/ ?>