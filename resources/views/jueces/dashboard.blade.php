      <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Fiscalía de la República de Panamá</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>

  <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Fiscalía de la República de Panamá
                        <!--{{ config('app.name', 'Hospital Medicare') }}-->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
           <script src="{{ asset('js/app.js') }}"></script>
           
<!-------------------------------------------------------------->
<!-------------------------------------------------------------->
<!-------------------------------------------------------------->

     <div class="container">

    <h1>Dashboard</h1>
    <h4><a href="{{ url('/index') }}">Crear Nuevo Expediente</a></h4>
    <div class="btn-group btn-group-justified">
  <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
  <a href="{{ url('/') }}" class="btn btn-primary">Panel de Mantenimiento</a>
  <a href="{{ url('/') }}" class="btn btn-primary">Manejo de Usuarios</a>
</div>
    <hr>
        <div class="table-responsive">
        @if($data)
        <table class="table">
        <thead>
        <tr>
            <td>Titulo de Caso</td>
            <td>No. de Juzgado</td>
            <td>Juzgado</td>
            <td>Descripción de Caso</td>
            <td>Partes Involucradas</td>
             <td>Fecha de Inicio</td>
            <td>Estado</td>
            <td>Ubicación</td>
            <td>Tipo de Caso</td>
            <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->titulo }}</td>
                 <td>{{ $row->court_id }}</td>
                  <td>{{ $row->court_id }}</td>
                <td>{{ $row->descripcion }}</td>
                <td>{{ $row->involucrados }}</td>
                <td>{{ $row->fecha_inicio }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->location_id }}</td>
                <td>{{ $row->casetype_id }}</td>

                <td>

               <!-- <a href="{{url('/carepanel',[$row->id])}}" class="btn-btn-info">Detalle</a></td>


                <td>
                
              
                
                <a href="{{url('/diagnosis',[$row->id])}}" class="btn-btn-info">Detalle</a>
               
                </td>-->
            </tr>
            </tbody>
            @endforeach
        </table>
        @endif
        </div>
         <br>
       <br>
       <br>
       <br>
       <br>
           <div class="container">
        <!-- <a href="{{ url('/index') }}">Panel de Registro</a>-->
        <a class="btn btn-info" href="{{ url('/') }}">Back</a>
            </div>
              
        </div>
   

   

<!--<div class="container">
        <div class="row">
            <h1>Agregar Artículo</h1>
            <form action="/articulo/add" method="post" name="frmadd">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="txttitulo" placeholder="Title">
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="txtresumen" placeholder="description"></textarea>
                </div>
                <button type="submit" class="btn btn-default" name="btnsubmit">Submit</button>
            </form>
        </div>

    </div>-->
      

    </body>
</html>

