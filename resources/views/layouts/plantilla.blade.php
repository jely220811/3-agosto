<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<!--end navbar-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes-somos">QUIENES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca-de">ACERCA DE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--navbar-->
<div class="container">
    <div class="row">
         <div class="col-md-3" style="background-color:pink">
             <!---siderban--->
             <br><br>
             <div class="list-group">
                 <a href="#" class="list-group-item list-group-item-action">TENDENCIAS</a>
                 <a href="#" class="list-group-item list-group-item-action list-group-item-primary">SERIES</a>
                 <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">PELICULAS</a>
                 <a href="#" class="list-group-item list-group-item-action list-group-item-success">ESTRENOS</a>
                 <br><br>
             </div>
             <!---end siderban--->
             <!---contenido--->
         </div>
         <div class="col-md-9" style="background-color:mediumpurple">
          @yield('content')
         </div>
        <footer style="background-color:hotpink;">
            JELY NARANJO


        </footer>

</div>
</body>
</html>
