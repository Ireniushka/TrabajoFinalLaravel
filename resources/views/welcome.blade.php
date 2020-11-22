<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                
            }
            
            * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            /* Float four columns side by side */
            .column {
                float: left;
                width: 33%;
                padding: 0 10px;
            }

            li{
                list-style-type:none;
                position:relative;
                width:120px;
            }

            /* Remove extra left and right margins, due to padding */
            .row {margin: 0 -5px;}

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive columns */
            @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-top: 0;
            }
            }

            /* Style the counter cards */
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                padding: 8px;
                text-align: center;
                background-color: #f1f1f1;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" >
                    Gestión Formación Dual
                </div>
                @Logged()
                    @LoggedAdmin()
                    <div class="row flex-center">
                        <div class="column">
                            <div class="card">
                                <h3 class="btn-warning">Funciones Admin</h3>
                                <ul>
                                        <li><a href="users" class="btn btn-warning" >Usuarios</a></li>
                                        <li><a href="enterprises" class="btn btn-warning">Empresas</a></li>
                                        <li><a href="ciclos" class="btn btn-warning">Ciclos</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <h3 class="btn-primary">Funciones Estudiante</h3>
                                <ul>
                                        <li><a href="fichas" class="btn btn-primary" >Fichas seguimiento</a></li>
                                        <li><a href="asistencia" class="btn btn-primary">Fichas asistencia</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="column">
                            <div class="card">
                            <h3 class="btn-success">Funciones Tutor Educativo</h3>
                                <ul>
                                    <li><a href="tasks" class="btn btn-success" >Tareas</a></li>
                                    <li><a href="ces" class="btn btn-success">Ces</a></li>
                                    <li><a href="ras" class="btn btn-success">Ra</a></li>
                                    <li><a href="modules" class="btn btn-success">Modulos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endLoggedAdmin

                    @LoggedAlum()
                    <div class="row flex-center">
                        <div class="column">
                            <div class="card">
                                <h3 class="btn-primary">Funciones Estudiante</h3>
                                <ul>
                                    <li><a href="fichas" class="btn btn-primary" >Fichas seguimiento</a></li>
                                    <li><a href="asistencia" class="btn btn-primary">Fichas asistencia</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endLoggedAlum

                    @LoggedTute()
                    <div class="row flex-center">
                        <div class="column">
                            <div class="card">
                                <h3 class="btn-success">Funciones Tutor Educativo</h3>
                                <ul>
                                    <li><a href="tasks" class="btn btn-success" >Tareas</a></li>
                                    <li><a href="ces" class="btn btn-success">Ces</a></li>
                                    <li><a href="ras" class="btn btn-success">Ra</a></li>
                                    <li><a href="modules" class="btn btn-success">Modulos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endLoggedTute
                @else
                    @include('partials.login_link', ['message' => __("Inicia Sesion para Ver las funciones de tu usuario")])
                @endLogged
            </div>
        </div>
    </body>
</html>
