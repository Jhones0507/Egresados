@extends('layouts.menus')
@section('headers')

@endsection('headers')
@section('content')
    <div class="container" align="center">
        <div class="row">
            <div class="btn-group btn-breadcrumb" >
                <a href="#" class="btn btn-primary bordemenu activa1"><i class="glyphicon glyphicon-home"></i></a>
              <a href="#" class="btn btn-primary bordemenu" data-toggle="dropdown" data-hover="dropdown">Perfil</a>
                  <ul class="dropdown-menu">
                    <li><a class="btn4 bordesubmenu">Foto de Perfil</a></li>
                    <li><a class="btn2 bordesubmenu" data-toogle="modal" data-target="#miventana">Editar Información</a></li>
                    <li><a class="btn3" data-toogle="modal" data-target="#ventanapassword">Cambiar Contraseña</a></li>
                </ul>
                <a class="btn btn-primary btn6 bordemenu">Información</a>
                <a href="https://www.utp.edu.co/egresados/egresados-utp.html" target="_blank" class="btn btn-primary">Ayuda</a>
                <a href="{{route('logout')}}" class="btn btn-primary">Salir</a>
            </div>
        </div>
    </div>


    <div class="nav-side-menu">
        <div class="brand">Egresados UTP</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">
                    <li><a href="{{route('Administrador.index')}}"><i class="material-icons iconosmenu">settings</i>Gestionar Administradores</a></li>
                    <li><a href="#"><i class="material-icons iconosmenu">delete_sweep</i>Cuentas Inactivas</a></li>
                    <li><a href="#"><i class="material-icons iconosmenu">web_asset</i>Actividad Plaataforma</a></li>
                </ul>

            </div>
    </div>




    <div class= "cuadro">
      @yield('recuadro')
    </div>
@endsection('content')