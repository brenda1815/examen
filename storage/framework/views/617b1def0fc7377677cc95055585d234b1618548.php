<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controladores en laravel</title>
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

<h4>Controladores en laravel </h4>
    <p>A continuaci&oacute;n se muestra un ejemplo de una clase de controlador b&aacute;sico. Tenga en cuenta que el controlador hereda de la clase de controlador base incluida con Laravel. La clase base provee de una serie de m&eacute;todos &uacute;tiles como el m&eacute;todo&nbsp;<code class=" language-php">middleware</code>, que se puede usar para adjuntar un&nbsp;<em>middleware</em>&nbsp;a las acciones del controlador</p>
    <pre class=" language-php"><code class=" language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>

    <span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers</span><span class="token punctuation">;</span>
    <span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers<span class="token punctuation">\</span>Controller</span><span class="token punctuation">;</span>
    <span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Models<span class="token punctuation">\</span>User</span><span class="token punctuation">;</span>
    <span class="token keyword">class</span> <span class="token class-name">UserController</span> <span class="token keyword">extends</span> <span class="token class-name">Controller</span>
    <span class="token punctuation">{</span>
    <span class="token comment">/**
     * Show the profile for the given user.
     *
     * @param    int  $id
     * @return  \Illuminate\View\View
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">show</span><span class="token punctuation">(</span><span class="token variable">$id</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token function">view</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'user.profile'</span><span class="token punctuation">,</span> <span class="token punctuation">[</span><span class="token single-quoted-string string">'user'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> User<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">findOrFail</span><span class="token punctuation">(</span><span class="token variable">$id</span><span class="token punctuation">)</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
    <span class="token punctuation">}</span></span></code></pre>

    <p>Puedes definir una ruta para esta acci&oacute;n del controlador as&iacute;:</p>
        <pre class=" language-php"><code class=" language-php"><span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers<span class="token punctuation">\</span>UserController</span><span class="token punctuation">;</span>
        Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">get</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'user/{id}'</span><span class="token punctuation">,</span> <span class="token punctuation">[</span>UserController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'show'</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>        <p>Ahora, cuando una petici&oacute;n concuerda con la URI de la ruta, se ejecutar&aacute; el m&eacute;todo&nbsp;<code class=" language-php">show</code>&nbsp;de la clase&nbsp;<code class=" language-php">UserController</code>. Por supuesto, los par&aacute;metros de la ruta se pasar&aacute;n tambi&eacute;n a este m&eacute;todo.</p>
    
    <div class="callout">
        <p class="content">Los controladores no&nbsp;<strong>requieren</strong>&nbsp;heredar la clase base. Sin embargo, no se tendr&aacute; acceso a las caracter&iacute;sticas como los m&eacute;todos&nbsp;<code class=" language-php">middleware</code>,&nbsp;<code class=" language-php">validate</code>, y&nbsp;<code class=" language-php">dispatch</code>.</p>
    </div>

    <p><a name="single-action-controllers"></a></p>

    <h3 id="single-action-controllers">Controlladores de acci&oacute;n simple</a></h3>
        <p>Si desea definir un controlador que s&oacute;lo maneje una &uacute;nica acci&oacute;n, puede colocar un &uacute;nico m&eacute;todo <code class=" language-php">__invoke</code> en el controlador:</p>
            <pre class=" language-php"><code class=" language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>
            <span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers</span><span class="token punctuation">;</span>
            <span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers<span class="token punctuation">\</span>Controller</span><span class="token punctuation">;</span>
            <span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Models<span class="token punctuation">\</span>User</span><span class="token punctuation">;</span>
            <span class="token keyword">class</span> <span class="token class-name">ShowProfile</span> <span class="token keyword">extends</span> <span class="token class-name">Controller</span>
            <span class="token punctuation">{</span>
            <span class="token comment">/**
                 * Show the profile for the given user.
                 *
                 * @param    int  $id
                 * @return  \Illuminate\View\View
                 */</span>
            <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">__invoke</span><span class="token punctuation">(</span><span class="token variable">$id</span><span class="token punctuation">)</span>
            <span class="token punctuation">{</span>
            <span class="token keyword">return</span> <span class="token function">view</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'user.profile'</span><span class="token punctuation">,</span> <span class="token punctuation">[</span><span class="token single-quoted-string string">'user'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> User<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">findOrFail</span><span class="token punctuation">(</span><span class="token variable">$id</span><span class="token punctuation">)</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
            <span class="token punctuation">}</span>
            <span class="token punctuation">}</span></span></code></pre>

        <p>Cuando se registran las rutas para los controladores de acci&oacute;n &uacute;nica, no es necesario especificar un m&eacute;todo:</p>
            <pre class=" language-php"><code class=" language-php"><span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers<span class="token punctuation">\</span>ShowProfile</span><span class="token punctuation">;</span>
            Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">get</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'user/{id}'</span><span class="token punctuation">,</span> ShowProfile<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
        <p>Puedes generar un controlador invocable usando la opci&oacute;n <code class=" language-php"><span class="token operator">--</span>invokable</code> del comando Artisan <code class=" language-php">make<span class="token punctuation">:</span>controller</code>:</p>
        <pre class=" language-php"><code class=" language-php">php artisan make<span class="token punctuation">:</span>controller ShowProfile <span class="token operator">--</span>invokable</code></pre>
        
        <h2> Controller Middleware</h2>
            <p>A las rutas de los controladores se les puede asignar&nbsp;<a href="https://docs.laraveles.com/docs/5.5/middleware">middleware</a>&nbsp;del siguiente modo:</p>
                <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">get</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'profile'</span><span class="token punctuation">,</span> <span class="token punctuation">[</span>UserController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'show'</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">middleware</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'auth'</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
            <p>Sin embargo, es m&aacute;s conveniente especificar el&nbsp;<em>middleware</em>&nbsp;en el constructor del controlador. Utilizando el m&eacute;todo&nbsp;<code class=" language-php">middleware</code>&nbsp;desde el constructor del controlador, se puede asignar un&nbsp;<em>middleware</em>&nbsp;a las acciones del controlador. Incluso se puede restringir el&nbsp;<em>middleware</em>&nbsp;a &uacute;nicamente ciertos m&eacute;todos:</p>
                <pre class=" language-php"><code class=" language-php"><span class="token keyword">class</span> <span class="token class-name">UserController</span> <span class="token keyword">extends</span> <span class="token class-name">Controller</span>
                <span class="token punctuation">{</span>
                <span class="token comment">/**
                * Instantiate a new controller instance.
                *
                * @return  void
                */</span>
                <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">__construct</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
                <span class="token punctuation">{</span>
                <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">middleware</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'auth'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
                <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">middleware</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'log'</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">only</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'index'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
                <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">middleware</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'subscribed'</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">except</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'store'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
                <span class="token punctuation">}</span>
                <span class="token punctuation">}</span></code></pre>
            <p>Los controladores tambi&eacute;n permiten registrar&nbsp;<em>middleware</em>&nbsp;usando un&nbsp;<em>Closure</em>&nbsp;o funci&oacute;n an&oacute;nima. Esto proporciona una forma conveniente de definir un&nbsp;<em>middleware</em>&nbsp;para un solo controlador sin definir una clase&nbsp;<em>middleware</em>&nbsp;completa:</p>
                <pre class=" language-php"><code class=" language-php"><span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">middleware</span><span class="token punctuation">(</span><span class="token keyword">function</span> <span class="token punctuation">(</span><span class="token variable">$request</span><span class="token punctuation">,</span> <span class="token variable">$next</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
                <span class="token comment">// ...</span>
                <span class="token keyword">return</span> <span class="token variable">$next</span><span class="token punctuation">(</span><span class="token variable">$request</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
                <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

        <div class="callout">
            <p class="content">Puede asignar el middleware a un subconjunto de acciones del controlador; sin embargo, puede indicar que el controlador est&aacute; creciendo demasiado. En su lugar, considere la posibilidad de dividir el controlador en varios controladores m&aacute;s peque&ntilde;os.</p>
        </div>

        <h2>Controlador de recursos (Resource Controllers)</a></h2>
            <p>El&nbsp;<em>routing</em>&nbsp;de recursos de Laravel asigna las rutas "CRUD" t&iacute;picas a un controlador con una sola l&iacute;nea de c&oacute;digo. Por ejemplo, la creaci&oacute;n de un controlador que gestiona todas las peticiones HTTP sobre "photos" (fotos) almacenadas por nuestra aplicaci&oacute;n. Utilizando el comando de Artisan&nbsp;<code class=" language-php">make<span class="token punctuation">:</span>controller</code>, se puede crear un controlador r&aacute;pidamente:</p>
                <pre class=" language-php"><code class=" language-php">php artisan make<span class="token punctuation">:</span>controller PhotoController <span class="token operator">--</span>resource</code></pre>
            <p>El comando generar&aacute; un controlador en el archivo&nbsp;<code class=" language-php">app<span class="token operator">/</span>Http<span class="token operator">/</span>Controllers<span class="token operator">/</span>PhotoController<span class="token punctuation">.</span>php</code>. El controlador incluir&aacute; un m&eacute;todo para cada una de las operaciones disponibles para el recurso.</p>
            <p>A continuaci&oacute;n, se puede registrar una ruta de recursos para el controlador:</p>
                <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos'</span><span class="token punctuation">,</span> PhotoController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
            <p>Esta declaraci&oacute;n de ruta &uacute;nica crea m&uacute;ltiples rutas para manejar una variedad de acciones sobre el recurso. El controlador generado ya tendr&aacute; m&eacute;todos comprobados para cada una de estas acciones, incluyendo notas que le informen de los verbos HTTP y URI que manejan.</p>
            <p>Se pueden registrar varios controladores de recursos a la vez pasando una&nbsp;<em>array</em>&nbsp;al m&eacute;todo&nbsp;<code class=" language-php">resources</code>:</p>
                <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resources</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
                <span class="token single-quoted-string string">'photos'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> PhotoController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">,</span>
                <span class="token single-quoted-string string">'posts'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> PostController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">,</span>
                <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

        <h4>Acciones gestionadas por controladores de recursos</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Verbo</th>
                        <th>URI</th>
                        <th>Acci&oacute;n</th>
                        <th>Nombre de ruta</th>
                    </tr>
                </thead>
            <tbody>
                    <tr>
                        <td>GET</td>
                        <td><code class=" language-php"><span class="token operator">/</span>photos</code></td>
                        <td>index</td>
                        <td>photos.index</td>
                    </tr>
                    <tr>
                        <td>GET</td>
                        <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span>create</code></td>
                        <td>create</td>
                        <td>photos.create</td>
                    </tr>
                    <tr>
                        <td>POST</td>
                        <td><code class=" language-php"><span class="token operator">/</span>photos</code></td>
                        <td>store</td>
                        <td>photos.store</td>
                    </tr>
                    <tr>
                        <td>GET</td>
                        <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span></code></td>
                        <td>show</td>
                        <td>photos.show</td>
                    </tr>
                    <tr>
                        <td>GET</td>
                        <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span><span class="token operator">/</span>edit</code></td>
                        <td>edit</td>
                        <td>photos.edit</td>
                    </tr>
                    <tr>
                        <td>PUT/PATCH</td>
                        <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span></code></td>
                        <td>update</td>
                        <td>photos.update</td>
                    </tr>
                    <tr>
                        <td>DELETE</td>
                        <td><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span></code></td>
                        <td>destroy</td>                
                        <td>photos.destroy</td>
                    </tr>
                </tbody>
        </table>
        </div>

        <h3>Especificar el modelo del recurso</h3>
            <p>Si se est&aacute; utilizando el&nbsp;<em>route model binding</em>&nbsp;y se desea que los m&eacute;todos del controlador de recursos incluyan un&nbsp;<em>type-hint</em>&nbsp;de una instancia del modelo, se puede usar la opci&oacute;n&nbsp;<code class=" language-php"><span class="token operator">--</span>model</code>&nbsp;al generar el controlador:</p>
                <pre class=" language-php"><code class=" language-php">php artisan make<span class="token punctuation">:</span>controller PhotoController <span class="token operator">--</span>resource <span class="token operator">--</span>model<span class="token operator">=</span>Photo</code></pre>

        <h3>Rutas de recursos parciales</h3>
            <p>Al declarar una ruta de recursos, puede especificar un subconjunto de acciones que el controlador debe manejar en lugar del conjunto completo de acciones predeterminadas:</p>
                <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos'</span><span class="token punctuation">,</span> PhotoController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">only</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
                <span class="token single-quoted-string string">'index'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'show'</span>
                <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
                Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos'</span><span class="token punctuation">,</span> PhotoController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">except</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
                <span class="token single-quoted-string string">'create'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'store'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'update'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'destroy'</span>
                <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

        <h4>Rutas de Recursos de la API</h4>
            <p>Al declarar las rutas de recursos que ser&aacute;n consumidas por las API, com&uacute;nmente querr&aacute; excluir las rutas que presenten plantillas HTML, como las de&nbsp;<code class=" language-php">create</code> y&nbsp;<code class=" language-php">edit</code>. Para mayor comodidad, puede utilizar el m&eacute;todo <code class=" language-php">apiResource</code> para excluir autom&aacute;ticamente estas dos rutas:</p>
                <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">apiResource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos'</span><span class="token punctuation">,</span> PhotoController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
            <p>Puede registrar muchos controladores de recursos de la API a la vez pasando una matriz al m&eacute;todo <code class=" language-php">apiResources</code>:</p>
                <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">apiResources</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
                <span class="token single-quoted-string string">'photos'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> PhotoController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">,</span>
                <span class="token single-quoted-string string">'posts'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> PostController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">,</span>
                <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
            <p>Para generar r&aacute;pidamente un controlador de recursos de la API que no incluya los m&eacute;todos <code class=" language-php">create</code> o <code class=" language-php">edit</code>, utilice el conmutador <code class=" language-php"><span class="token operator">--</span>api</code> al ejecutar el comando <code class=" language-php">make<span class="token punctuation">:</span>controller</code>:</p>
                <pre class=" language-php"><code class=" language-php">php artisan make<span class="token punctuation">:</span>controller <span class="token constant">API</span><span class="token operator">/</span>PhotoController <span class="token operator">--</span>api</code></pre>

        <h3>Recursos anidados</a></h3>
            <p>A veces puede ser necesario definir rutas a un recurso anidado. Por ejemplo, un recurso fotogr&aacute;fico puede tener m&uacute;ltiples comentarios que pueden ser adjuntados a la foto. Para anidar los controladores de recursos, utilice la notaci&oacute;n "punto" en la declaraci&oacute;n de la ruta:</p>
                <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos.comments'</span><span class="token punctuation">,</span> PhotoCommentController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
            <p>Esta ruta registrar&aacute; un recurso anidado al que se podr&aacute; acceder con URIs como el siguiente:</p>
                <pre class=" language-php"><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span><span class="token operator">/</span>comments<span class="token operator">/</span><span class="token punctuation">{</span>comment<span class="token punctuation">}</span></code></pre>
        <h4>Alcance de recursos anidados</h4>
            <p>La caracter&iacute;stica de <a href="/docs/8.x/routing#implicit-model-binding-scoping">implicit model binding</a> de Laravel puede abarcar autom&aacute;ticamente las vinculaciones anidadas de manera que se confirme que el modelo hijo resuelto pertenece al modelo padre. Utilizando el m&eacute;todo <code class=" language-php">scoped</code> cuando se define el recurso anidado, puede habilitar el alcance autom&aacute;tico as&iacute; como indicar a Laravel por qu&eacute; campo debe ser recuperado el recurso hijo:</p>
                <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos.comments'</span><span class="token punctuation">,</span> PhotoCommentController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">scoped</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
                <span class="token single-quoted-string string">'comment'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token single-quoted-string string">'slug'</span><span class="token punctuation">,</span>
                <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
            <p>Esta ruta registrar&aacute; un recurso anidado de alcance al que se podr&aacute; acceder con URIs como el siguiente:</p>
                <pre class=" language-php"><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span><span class="token operator">/</span>comments<span class="token operator">/</span><span class="token punctuation">{</span>comment<span class="token punctuation">:</span>slug<span class="token punctuation">}</span></code></pre>

        <h4>Anidaci&oacute;n superficial</h4>
            <p>A menudo, no es del todo necesario tener tanto la identificaci&oacute;n del padre como la del ni&ntilde;o dentro de una URI, ya que la identificaci&oacute;n del ni&ntilde;o ya es un identificador &uacute;nico. Cuando se utilizan identificadores &uacute;nicos, como las claves primarias de autoincremento para identificar sus modelos en los segmentos de la URI, se puede optar por utilizar "anidaci&oacute;n superficial":</p>
                <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos.comments'</span><span class="token punctuation">,</span> CommentController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">shallow</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
            <p>The route definition above will define the following routes:</p>
<table class="table">
<thead>
<tr style="height: 48px;">
<th style="height: 48px; width: 110px;">Verb</th>
<th style="height: 48px; width: 246px;">URI</th>
<th style="height: 48px; width: 82px;">Action</th>
<th style="height: 48px; width: 211px;">Route Name</th>
</tr>
</thead>
<tbody>
<tr style="height: 47px;">
<td style="height: 47px; width: 110px;">GET</td>
<td style="height: 47px; width: 246px;"><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span><span class="token operator">/</span>comments</code></td>
<td style="height: 47px; width: 82px;">index</td>
<td style="height: 47px; width: 211px;">photos.comments.index</td>
</tr>
<tr style="height: 47px;">
<td style="height: 47px; width: 110px;">GET</td>
<td style="height: 47px; width: 246px;"><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span><span class="token operator">/</span>comments<span class="token operator">/</span>create</code></td>
<td style="height: 47px; width: 82px;">create</td>
<td style="height: 47px; width: 211px;">photos.comments.create</td>
</tr>
<tr style="height: 47px;">
<td style="height: 47px; width: 110px;">POST</td>
<td style="height: 47px; width: 246px;"><code class=" language-php"><span class="token operator">/</span>photos<span class="token operator">/</span><span class="token punctuation">{</span>photo<span class="token punctuation">}</span><span class="token operator">/</span>comments</code></td>
<td style="height: 47px; width: 82px;">store</td>
<td style="height: 47px; width: 211px;">photos.comments.store</td>
</tr>
<tr style="height: 47px;">
<td style="height: 47px; width: 110px;">GET</td>
<td style="height: 47px; width: 246px;"><code class=" language-php"><span class="token operator">/</span>comments<span class="token operator">/</span><span class="token punctuation">{</span>comment<span class="token punctuation">}</span></code></td>
<td style="height: 47px; width: 82px;">show</td>
<td style="height: 47px; width: 211px;">comments.show</td>
</tr>
<tr style="height: 47px;">
<td style="height: 47px; width: 110px;">GET</td>
<td style="height: 47px; width: 246px;"><code class=" language-php"><span class="token operator">/</span>comments<span class="token operator">/</span><span class="token punctuation">{</span>comment<span class="token punctuation">}</span><span class="token operator">/</span>edit</code></td>
<td style="height: 47px; width: 82px;">edit</td>
<td style="height: 47px; width: 211px;">comments.edit</td>
</tr>
<tr style="height: 47px;">
<td style="height: 47px; width: 110px;">PUT/PATCH</td>
<td style="height: 47px; width: 246px;"><code class=" language-php"><span class="token operator">/</span>comments<span class="token operator">/</span><span class="token punctuation">{</span>comment<span class="token punctuation">}</span></code></td>
<td style="height: 47px; width: 82px;">update</td>
<td style="height: 47px; width: 211px;">comments.update</td>
</tr>
<tr style="height: 47px;">
<td style="height: 47px; width: 110px;">DELETE</td>
<td style="height: 47px; width: 246px;"><code class=" language-php"><span class="token operator">/</span>comments<span class="token operator">/</span><span class="token punctuation">{</span>comment<span class="token punctuation">}</span></code></td>
<td style="height: 47px; width: 82px;">destroy</td>
<td style="height: 47px; width: 211px;">comments.destroy</td>
</tr>
</tbody>
</table>
<p>Nombrar las rutas de recursos</p>
<p>Por defecto, todas las acciones de los controladores de recursos tienen un nombre de ruta; sin embargo, se puede sobrescribir este nombre pasando un&nbsp;<em>array</em>&nbsp;<code class=" language-php">names</code>&nbsp;con sus opciones:</p>
            <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos'</span><span class="token punctuation">,</span> PhotoController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">names</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
            <span class="token single-quoted-string string">'create'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token single-quoted-string string">'photos.build'</span>
            <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

    <h3>Nombrar par&aacute;metros en rutas de recursos</h3>
<p>Por defecto,&nbsp;<code class=" language-php"><span class="token scope">Route<span class="token punctuation">::</span></span>resource</code>&nbsp;crea los par&aacute;metros de ruta para las rutas de recursos utilizando la versi&oacute;n "singular" del nombre del recurso. Se puede sobrescribir esto f&aacute;cilmente por recurso pasando&nbsp;<code class=" language-php">parameters</code>&nbsp;en el&nbsp;<em>array</em>&nbsp;de opciones. El&nbsp;<em>array</em>&nbsp;de&nbsp;<code class=" language-php">parameters</code>&nbsp;debe ser un&nbsp;<em>array</em>&nbsp;asociativo de los nombres de los recursos y el nombre de su par&aacute;metro:</p>
            <pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'users'</span><span class="token punctuation">,</span> AdminUserController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">parameters</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
            <span class="token single-quoted-string string">'users'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token single-quoted-string string">'admin_user'</span>
            <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>El ejemplo anterior genera las siguientes URIs para la ruta&nbsp;<code class=" language-php">show</code>&nbsp;del recurso:</p>
            <pre class=" language-php"><code class=" language-php"><span class="token operator">/</span>users<span class="token operator">/</span><span class="token punctuation">{</span>admin_user<span class="token punctuation">}</span></code></pre>

    <h3>Rutas de recursos de exploraci&oacute;n</h3>
<p>A veces, al vincular impl&iacute;citamente m&uacute;ltiples modelos elocuentes en las definiciones de rutas de recursos, se puede desear ampliar el alcance del segundo modelo elocuente de tal manera que debe ser un hijo del primer modelo elocuente. Por ejemplo, considere esta situaci&oacute;n que recupera una entrada de blog por babosa para un usuario espec&iacute;fico:</p>
            <pre class=" language-php"><code class=" language-php"><span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers<span class="token punctuation">\</span>PostsController</span><span class="token punctuation">;</span>
            Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'users.posts'</span><span class="token punctuation">,</span> PostsController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">scoped</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>Puede anular las claves de ruta del modelo por defecto pasando una matriz al m&eacute;todo <code class=" language-php">scoped</code>:</p>
            <pre class=" language-php"><code class=" language-php"><span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers<span class="token punctuation">\</span>PostsController</span><span class="token punctuation">;</span>
            Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'users.posts'</span><span class="token punctuation">,</span> PostsController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">scoped</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
            <span class="token single-quoted-string string">'post'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token single-quoted-string string">'slug'</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>Cuando se utiliza un enlace impl&iacute;cito con clave personalizada como par&aacute;metro de ruta anidada, Laravel autom&aacute;ticamente ampliar&aacute; la consulta para recuperar el modelo anidado por su progenitor utilizando convenciones para adivinar el nombre de la relaci&oacute;n en el progenitor. En este caso, se asumir&aacute; que el modelo <code class=" language-php">User</code>&nbsp;tiene una relaci&oacute;n denominada <code class=" language-php">posts</code> (el plural del nombre del par&aacute;metro de ruta) que puede utilizarse para recuperar el modelo <code class=" language-php">Post</code>.</p>

        <h3>Traducir la URL de los recursos</h3>
<p>Por defecto, <code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span>resource</code> crear&aacute; URIs de recursos usando verbos en ingl&eacute;s. Si necesitas localizar los verbos de acci&oacute;n de crear y editar, puedes usar el m&eacute;todo &nbsp;<code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span>resourceVerbs</code> Esto se puede hacer en el m&eacute;todo <code class=" language-php">boot</code> de su <code class=" language-php">AppServiceProvider</code>:</p>
            <pre class=" language-php"><code class=" language-php"><span class="token keyword">use</span> <span class="token package">Illuminate<span class="token punctuation">\</span>Support<span class="token punctuation">\</span>Facades<span class="token punctuation">\</span>Route</span><span class="token punctuation">;</span>
            <span class="token comment">/**
             * Bootstrap any application services.
             *
             * @return  void
             */</span>
            <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">boot</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
            <span class="token punctuation">{</span>
            Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resourceVerbs</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
            <span class="token single-quoted-string string">'create'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token single-quoted-string string">'crear'</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'edit'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token single-quoted-string string">'editar'</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span>    
            <span class="token punctuation">}</span></code></pre>
<p>Una vez que los verbos han sido personalizados, un registro de ruta de recursos como <code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'fotos'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'PhotoController'</span><span class="token punctuation">)</span></code> producir&aacute; las siguientes URIs:</p>
            <pre class=" language-php"><code class=" language-php"><span class="token operator">/</span>fotos<span class="token operator">/</span>crear
            <span class="token operator">/</span>fotos<span class="token operator">/</span><span class="token punctuation">{</span>foto<span class="token punctuation">}</span><span class="token operator">/</span>editar</code></pre>

        <h3 id="restful-supplementing-resource-controllers"><a href="#restful-supplementing-resource-controllers">Complementar los controlladores de recursos</a></h3>
<p>Si necesita a&ntilde;adir rutas adicionales a un controlador de recursos m&aacute;s all&aacute; del conjunto predeterminado de rutas de recursos, deber&iacute;a definir esas rutas antes de su llamada a <code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span>resource</code>; de lo contrario, las rutas definidas por el m&eacute;todo "<code class=" language-php">resource"</code> pueden tener prioridad involuntariamente sobre sus rutas suplementarias:pueden tener prioridad involuntariamente sobre sus rutas suplementarias:</p>
<pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">get</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos/popular'</span><span class="token punctuation">,</span> <span class="token punctuation">[</span>PhotoController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'popular'</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">resource</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'photos'</span><span class="token punctuation">,</span> PhotoController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<div class="callout">
<p class="content">Recuerden mantener sus controles enfocados. Si se encuentra con que necesita rutinariamente m&eacute;todos fuera del t&iacute;pico conjunto de acciones de recursos, considere la posibilidad de dividir su controlador en dos controladores m&aacute;s peque&ntilde;os.</p>
</div>

<h2 id="dependency-injection-and-controllers"><a href="#dependency-injection-and-controllers"><strong>#</strong> Inyecci&oacute;n de dependencias &amp; Controlladores</a></h2>
<h4>Inyecci&oacute;n en constructores</h4>
<p>El service container de Laravel se utiliza para resolver todos los controladores. Como resultado, se puede&nbsp;<em>type-hint</em>&nbsp;(firma del m&eacute;todo) cualquier dependencia que el controlador pueda tener en su constructor. Las dependencias declaradas se resuelven autom&aacute;ticamente y se inyectan en la instancia del controlador:</p>
        <pre class=" language-php"><code class=" language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>
        <span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers</span><span class="token punctuation">;</span>

<span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Repositories<span class="token punctuation">\</span>UserRepository</span><span class="token punctuation">;</span>

<span class="token keyword">class</span> <span class="token class-name">UserController</span> <span class="token keyword">extends</span> <span class="token class-name">Controller</span>
<span class="token punctuation">{</span>
    <span class="token comment">/**
     * The user repository instance.
     */</span>
    <span class="token keyword">protected</span> <span class="token variable">$users</span><span class="token punctuation">;</span>

    <span class="token comment">/**
     * Create a new controller instance.
     *
     * @param    UserRepository  $users
     * @return  void
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">__construct</span><span class="token punctuation">(</span>UserRepository <span class="token variable">$users</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">users</span> <span class="token operator">=</span> <span class="token variable">$users</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span></span></code></pre>
<p>Y por supuesto, se puede incluir cualquier&nbsp;Contracto de Laravel. Si el contenedor puede resolverlo, se puede utilizar en la firma del constructor. Dependiendo de la aplicaci&oacute;n, inyectar las dependencias dentro del controlador puede ofrecer mejor control sobre el&nbsp;<em>testing</em>.</p>

<h4>Inyecci&oacute;n en m&eacute;todos</h4>
<p>Adem&aacute;s de inyectar en constructores, se puede hacer&nbsp;<em>type-hint</em>&nbsp;de dependencias en los m&eacute;todos del controlador. Un caso de uso muy com&uacute;n para la inyecci&oacute;n es la de la instancia de&nbsp;<code class=" language-php">Illuminate\<span class="token package">Http<span class="token punctuation">\</span>Request</span></code>&nbsp;dentro de los m&eacute;todos del controlador:</p>
<pre class=" language-php"><code class=" language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>

<span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers</span><span class="token punctuation">;</span>

<span class="token keyword">use</span> <span class="token package">Illuminate<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Request</span><span class="token punctuation">;</span>

<span class="token keyword">class</span> <span class="token class-name">UserController</span> <span class="token keyword">extends</span> <span class="token class-name">Controller</span>
<span class="token punctuation">{</span>
    <span class="token comment">/**
     * Store a new user.
     *
     * @param    Request  $request
     * @return  Response
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">store</span><span class="token punctuation">(</span>Request <span class="token variable">$request</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token variable">$name</span> <span class="token operator">=</span> <span class="token variable">$request</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">name</span><span class="token punctuation">;</span>

        <span class="token comment">//</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span></span></code></pre>
<p>Si el m&eacute;todo del controlador tambi&eacute;n espera datos de entrada de un par&aacute;metro en la ruta se deben listar los par&aacute;metros de ruta despu&eacute;s de las otras dependencias. Por ejemplo, si la ruta est&aacute; definida as&iacute;:</p>
<pre class=" language-php"><code class=" language-php">Route<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token function">put</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'user/{id}'</span><span class="token punctuation">,</span> <span class="token punctuation">[</span>UserController<span class="token punctuation">:</span><span class="token punctuation">:</span><span class="token keyword">class</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'update'</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>Se podr&iacute;a hacer&nbsp;<em>type-hint</em>&nbsp;de&nbsp;<code class=" language-php">Illuminate\<span class="token package">Http<span class="token punctuation">\</span>Request</span></code>&nbsp;y acceder al par&aacute;metro de ruta&nbsp;<code class=" language-php">id</code>&nbsp;definiendo el m&eacute;todo del controlador de la siguiente forma:</p>
<pre class=" language-php"><code class=" language-php"><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>

<span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Controllers</span><span class="token punctuation">;</span>

<span class="token keyword">use</span> <span class="token package">Illuminate<span class="token punctuation">\</span>Http<span class="token punctuation">\</span>Request</span><span class="token punctuation">;</span>

<span class="token keyword">class</span> <span class="token class-name">UserController</span> <span class="token keyword">extends</span> <span class="token class-name">Controller</span>
<span class="token punctuation">{</span>
    <span class="token comment">/**
     * Update the given user.
     *
     * @param    Request  $request
     * @param    string  $id
     * @return  Response
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">update</span><span class="token punctuation">(</span>Request <span class="token variable">$request</span><span class="token punctuation">,</span> <span class="token variable">$id</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token comment">//</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span></span></code></pre>

<h2>Cach&eacute; de rutas</a></h2>

<p>Si la aplicaci&oacute;n usa exclusivamente rutas basadas en controladores, se puede aprovechar la cach&eacute; de rutas de Laravel. Utilizando la cach&eacute; de rutas se reducir&aacute; dr&aacute;sticamente el tiempo que toma la aplicaci&oacute;n en registrar todas las rutas. En algunos casos, &iexcl;el registro de rutas puede ser hasta 100x m&aacute;s r&aacute;pido. Para generar una cach&eacute; de rutas, simplemente hay que ejecutar el comando de Artisan&nbsp;<code class=" language-php">route<span class="token punctuation">:</span>cache</code>:</p>
<pre class=" language-php"><code class=" language-php">php artisan route<span class="token punctuation">:</span>cache</code></pre>
<p>Tras ejecutar el comando, el archivo de rutas en cach&eacute; se cargar&aacute; en cada solicitud. Recordar, si se a&ntilde;aden nuevas rutas se debe generar de nuevo una nueva cach&eacute;. Es por esto, se recomienda utilizar el comando&nbsp;<code class=" language-php">route<span class="token punctuation">:</span>cache</code>&nbsp;&uacute;nicamente en el entorno de producci&oacute;n.</p>
<p>Se puede utilizar el comando&nbsp;<code class=" language-php">route<span class="token punctuation">:</span>clear</code>&nbsp;para limpiar las rutas en cach&eacute;:</p>
<pre class=" language-php"><code class=" language-php">php artisan route<span class="token punctuation">:</span>clear</code></pre>
</section>
</section>
</section>

                                            </div>
                    
                </div>
            </div>
        </main>

</body>
</html><?php /**PATH C:\xampp\htdocs\examen\examen\resources\views/controladores.blade.php ENDPATH**/ ?>