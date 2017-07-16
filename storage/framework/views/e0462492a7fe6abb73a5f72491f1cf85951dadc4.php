      <!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

 <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

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
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        Fiscalía de la República de Panamá
                        <!--<?php echo e(config('app.name', 'Hospital Medicare')); ?>-->
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
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
           <script src="<?php echo e(asset('js/app.js')); ?>"></script>
           
<!-------------------------------------------------------------->
<!-------------------------------------------------------------->
<!-------------------------------------------------------------->

     <div class="container">

    <h1>Dashboard</h1>
    <h4><a href="<?php echo e(url('/index')); ?>">Crear Nuevo Expediente</a></h4>
    <div class="btn-group btn-group-justified">
  <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Home</a>
  <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Panel de Mantenimiento</a>
  <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Manejo de Usuarios</a>
</div>
    <hr>
        <div class="table-responsive">
        <?php if($data): ?>
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
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->titulo); ?></td>
                 <td><?php echo e($row->court_id); ?></td>
                  <td><?php echo e($row->court_id); ?></td>
                <td><?php echo e($row->descripcion); ?></td>
                <td><?php echo e($row->involucrados); ?></td>
                <td><?php echo e($row->fecha_inicio); ?></td>
                <td><?php echo e($row->status); ?></td>
                <td><?php echo e($row->location_id); ?></td>
                <td><?php echo e($row->casetype_id); ?></td>

                <td>

               <!-- <a href="<?php echo e(url('/carepanel',[$row->id])); ?>" class="btn-btn-info">Detalle</a></td>


                <td>
                
              
                
                <a href="<?php echo e(url('/diagnosis',[$row->id])); ?>" class="btn-btn-info">Detalle</a>
               
                </td>-->
            </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php endif; ?>
        </div>
         <br>
       <br>
       <br>
       <br>
       <br>
           <div class="container">
        <!-- <a href="<?php echo e(url('/index')); ?>">Panel de Registro</a>-->
        <a class="btn btn-info" href="<?php echo e(url('/')); ?>">Back</a>
            </div>
              
        </div>
   

   

<!--<div class="container">
        <div class="row">
            <h1>Agregar Artículo</h1>
            <form action="/articulo/add" method="post" name="frmadd">
                <?php echo e(csrf_field()); ?>

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

