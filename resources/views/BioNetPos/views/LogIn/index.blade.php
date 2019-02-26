@extends('layouts.BioNetPos.base')

@section('title','BioNet')

@section('css_content')


@endsection

@section('title_content', 'LogIn')

@section('content')

<!-- <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../../assets/images/big/auth-bg.jpg) no-repeat center center;">
<div class="auth-box">
<div id="LogInForm">
<div class="logo">
<span class="db"><img src="{{ asset('img/logo_business.png') }}" style="width:180px;" alt="homepage" class="dark-logo" /></span>
<h5 class="font-medium m-b-20">Log In</h5>
</div> -->

<!-- Form -->

<!-- <div class="row">
<div class="col-12">
<form class="form-horizontal m-t-20" id="LogInForm" action="index.html">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
</div>
<input type="text" id="usuario" class="form-control form-control-lg" placeholder="Correo Electrónico" aria-label="Correo Electrónico" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
</div>
<input type="password" id="contrasenia" class="form-control form-control-lg" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
</div>
<div class="form-group row"> -->

<!--div class="col-md-12">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Remember me</label>
<a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
</div>
</div-->

<!-- </div>
<div class="form-group text-center">
<div class="col-xs-12 p-b-20">
<button id="iniciar" class="btn btn-block btn-lg btn-info" type="button">Iniciar</button>
</div>
<div class="col-sm-12 text-center">
<a id="aIniciarClave" href="#" class="text-info m-l-5"><b>Iniciar sesión con clave.</b></a>
</div>
</div>
<div class="form-group m-b-0 m-t-10">
<div class="col-sm-12 text-center">
<a href="{{ asset('cuentas/crear') }}" class="text-info m-l-5"><b>Crear una cuenta.</b></a>
</div>
</div>
</form>
</div>
</div>
</div>
<div id="LogInCodigo">
<div class="logo">
<span class="db"><img src="../../assets/images/logo-icon.png" alt="logo" /></span>
<h5 class="font-medium m-b-20">Log In</h5>
<span>Ingresa tu codigo</span>
</div>
<div class="row m-t-20"> -->
<!-- Form -->

<!-- <form class="col-12" action="index.html"> -->
<!-- email -->

<!-- <div class="form-group row">
<div class="col-12">
<input id="suc_nombre" class="form-control form-control-lg" type="text" required="" placeholder="Nombre Sucursal">
</div>
</div>
<div class="form-group row">
<div class="col-12">
<input id="usu_codigo_acceso" class="form-control form-control-lg" type="text" required="" placeholder="Codigo">
</div>
</div>-->
<!-- pwd -->
<!-- <div class="row m-t-20">
<div class="col-12">
<button id="btnCodigoIniciar" class="btn btn-block btn-lg btn-danger" type="button">Iniciar</button>
</div>
<div class="col-sm-12 text-center">
<a id="aIniciarUsuPas" href="#" class="text-info m-l-5"><b>Iniciar sesión con usuario y contraseña.</b></a>
</div>
</div>
</form>
</div>
</div>
</div>
</div> -->

<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../../assets/images/background/playa.jpeg) no-repeat center center;">
            <div class="auth-box on-sidebar" id="login">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img id="logo" src="../../assets/images/logos/color.png" alt="logo" class="img-fluid"  /></span>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" id="" action="../light-sidebar/index.html">
                                <div class="form-group">
                                    <label for="email">Usuario:</label>
                                    <input type="text" class="form-control" id="email" placeholder="Enter password">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">

                                </div>

                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button id="btn-lgn"class="btn" type="submit">Iniciar Sesion</button>
                                    </div>
                                    <div class="col-xs-12 p-b-20">
                                        <a href="#" id="btn-lgn" class="btn">Crear una Cuenta</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                        <div class="social">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10">
                                    <div class="col-sm-12 text-center">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="recoverform">
                    <div class="logo">
                        <span class="db"><img src="../../assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Recover Password</h5>
                        <span>Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <div class="row m-t-20">

                        <form class="col-12" action="../light-sidebar/index.html">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js_content')

<script type="text/javascript">

$("#iniciar").click(function (){
    var usuario = $("#usuario").val().trim();
    var contrasenia = $("#contrasenia").val().trim();
    var asError = [];
    if(validar.vacio(usuario))
    asError.push("Correo Electronico obligatorio.");
    if(validar.vacio(contrasenia))
    asError.push("Contraseña obligatoria.");
    if(validar.correo(usuario) === false && validar.vacio(usuario) === false)
    asError.push("El correo no es valido.");
    if(validar.correo(usuario) === false)
    asError.push("Formato de correo invalido.");

    if(asError.length > 0){
        modal.error("Error (" + asError.length + ") al guardar por:", asError);
        return false;
    }
    window.location.href = "{{ asset('/template/') }}";
});

$("#btnCodigoIniciar").click(function (){
    var usu_codigo_acceso = $("#usu_codigo_acceso").val().trim();
    var suc_nombre = $("#suc_nombre").val().trim();
    var asError = [];
    if(validar.vacio(usu_codigo_acceso))
    asError.push("Código obligatorio.");
    if(validar.vacio(contrasenia))
    asError.push("nombre de la sucursal.");

    if(asError.length > 0){
        modal.error("Error (" + asError.length + ") al guardar por:", asError);
        return false;
    }

    window.location.href = "{{ asset('/template/') }}";
});

$("#LogInCodigo").hide();
$('#aIniciarClave').on("click", function() {
    $("#LogInForm").slideUp();
    $("#LogInCodigo").fadeIn();
});
$("#aIniciarUsuPas").on("click", function (){
    $("#LogInCodigo").slideUp();
    $("#LogInForm").fadeIn();
});
</script>

@endsection
