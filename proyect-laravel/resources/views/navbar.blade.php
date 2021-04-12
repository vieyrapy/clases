<!DOCTYPE html>
<html>
<head>
    <title>Sistema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Sistema Productos</a>      
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li><a href="/nuevoproducto">Productos</a></li>
                    <li><a href="#">Marcas</a></li>
                    <li><a href="#">Categorias</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Iniciar Sesión</a></li>
                        <li><a href="#">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('contenido') 
    </div>
</body>
</html>