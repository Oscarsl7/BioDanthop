@extends('layouts.BioNetPos.base')

@section('title','BioNet')

@section('css_content')
  <style type="text/css" media="all">

  </style>
@endsection

@section('title_content', 'Clientes / Crear')

@section('content')

  <h5>Crear</h5>
  <hr />
  <div class="row">
    <div class="col-md-12">
      <label for="inlineFormCustomSelect">Sucursal:</label>
      <select class="custom-select" id="sucursales_usuario">
        <option value="1">Sucursal Uno</option>
        <option value="2">Sucursal Dos</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label">Nombre: </label>
        <input type="text" id="cli_nombre" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label">Correo Electrónico: </label>
        <input type="text" id="cli_correo_electronico" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label">Teléfono: </label>
        <input type="text" id="cli_telefono" value="" class="form-control">
      </div>
    </div>
  </div>
  <h5>Dirección</h5>
  <hr />
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label">Calle: </label>
        <input type="text" id="cli_calle" value="" class="form-control direccion">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label">Número Interior: </label>
       <!-- <div class="row borde quantity justify-content-center align-items-center">
          <input type="number" min="0" id="cli_numero_interior" min="0" value="0" onkeypress="return validar.soloNumeros(event);" >
         </div> -->
         <div class="row borde quantity justify-content-center align-items-center">
          <input class="col-3" id="cli_numero_interior" type="number"onkeypress="return validar.soloNumeros(event);"  class="form-control  direccion"min="1" max="9" step="1" value="1">
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="numbers-row">
        <label class="control-label">Número Exterior: </label>
        <!-- <input type="number" min="0" id="cli_numero_exterior"  value="" onkeypress="return validar.soloNumeros(event);" class="form-control direccion"> -->

        <input type="numF" min="0" id="cli_numero_exterior" value="3" onkeypress="return validar.soloNumeros(event);" class="form-control direccion">

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label">Colonia: </label>
        <input type="text" id="cli_colonia" value="" class="form-control direccion">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label">Ciudad: </label>
        <input type="text" id="cli_ciudad" value="" class="form-control direccion">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label">Codigo Postal: </label>
        <input type="number" min="0" id="cli_codigo_postal" value="" onkeypress="return validar.soloNumeros(event);" class="form-control direccion">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label">Estado: </label>
        <select class="form-control custom-select direccion" id="cli_id_estado">
          <option value="117-1">Aguascalientes</option>
          <option value="117-2">Baja California</option>
          <option value="117-3">Baja California Sur</option>
          <option value="117-4">Campeche</option>
          <option value="117-5">Chiapas</option>
          <option value="117-6">Chihuahua</option>
          <option value="117-7">Ciudad de México</option>
          <option value="117-8">Coahuila</option>
          <option value="117-9">Colima</option>
          <option value="117-10">Durango</option>
          <option value="117-11">Guanajuato</option>
          <option value="117-12">Guerrero</option>
          <option value="117-13">Hidalgo</option>
          <option value="117-14">Jalisco</option>
          <option value="117-16">Michoacán</option>
          <option value="117-17">Morelos</option>
          <option value="117-15">México</option>
          <option value="117-18">Nayarit</option>
          <option value="117-19">Nuevo León</option>
          <option value="117-20">Oaxaca</option>
          <option value="117-21">Puebla</option>
          <option value="117-22">Querétaro</option>
          <option value="117-23">Quintana Roo</option>
          <option value="117-24">San Luis Potosí</option>
          <option value="117-25">Sinaloa</option>
          <option value="117-26">Sonora</option>
          <option value="117-27">Tabasco</option>
          <option value="117-28">Tamaulipas</option>
          <option value="117-29">Tlaxcala</option>
          <option value="117-30">Veracruz</option>
          <option value="117-31">Yucatán</option>
          <option value="117-32">Zacatecas</option>
        </select>
      </div>
    </div>
  </div>
  <h5>Datos de Facturación</h5>
  <hr />
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label">RFC: </label>
        <input type="text" id="cli_rfc" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label">Razón Social: </label>
        <input type="text" id="cli_razon_social" value="" class="form-control">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label">Email de facturación: </label>
        <div class="custom-control custom-checkbox mr-sm-2">
          <input type="checkbox" class="custom-control-input" id="cli_correos_iguales" checked>
          <label class="custom-control-label" for="cli_correos_iguales">Mismo email que email personal</label>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group cli_correo_electronico_facturacion">
        <label class="control-label">Correo Electrónico de Facturación: </label>
        <input type="text" id="cli_correo_electronico_facturacion" value="" class="form-control">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label class="control-label">Dirección fiscal: </label>
        <div class="custom-control custom-checkbox mr-sm-2">
          <input type="checkbox" class="custom-control-input" id="cli_direcciones_iguales" checked>
          <label class="custom-control-label" for="cli_direcciones_iguales">Misma ubicación que dirección personal</label>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div id="dir_facturacion" class="card-body collapse">
      <h4 class="card-title">Dirección Facturación</h4>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Calle: </label>
            <input type="text" id="cli_calle_facturacion" value="" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Número Interior: </label>
            <input type="number" min="0" id="cli_numero_interior_facturacion" min="0" value="" onkeypress="return validar.soloNumeros(event);" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Número Exterior: </label>
            <input type="number" min="0" id="cli_numero_exterior_facturacion" min="0" value="" onkeypress="return validar.soloNumeros(event);" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Colonia: </label>
            <input type="text" id="cli_colonia_facturacion" value="" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Ciudad: </label>
            <input type="text" id="cli_ciudad_facturacion" value="" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Codigo Postal: </label>
            <input type="number" min="0" id="cli_codigo_postal_facturacion" value="" onkeypress="return validar.soloNumeros(event);" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Estado: </label>
            <select class="form-control custom-select" id="cli_id_estado_facturacion">
              <option value=" - "> --- Seleccionar --- </option>
              <option value="117-1">Aguascalientes</option>
              <option value="117-2">Baja California</option>
              <option value="117-3">Baja California Sur</option>
              <option value="117-4">Campeche</option>
              <option value="117-5">Chiapas</option>
              <option value="117-6">Chihuahua</option>
              <option value="117-7">Ciudad de México</option>
              <option value="117-8">Coahuila</option>
              <option value="117-9">Colima</option>
              <option value="117-10">Durango</option>
              <option value="117-11">Guanajuato</option>
              <option value="117-12">Guerrero</option>
              <option value="117-13">Hidalgo</option>
              <option value="117-14">Jalisco</option>
              <option value="117-16">Michoacán</option>
              <option value="117-17">Morelos</option>
              <option value="117-15">México</option>
              <option value="117-18">Nayarit</option>
              <option value="117-19">Nuevo León</option>
              <option value="117-20">Oaxaca</option>
              <option value="117-21">Puebla</option>
              <option value="117-22">Querétaro</option>
              <option value="117-23">Quintana Roo</option>
              <option value="117-24">San Luis Potosí</option>
              <option value="117-25">Sinaloa</option>
              <option value="117-26">Sonora</option>
              <option value="117-27">Tabasco</option>
              <option value="117-28">Tamaulipas</option>
              <option value="117-29">Tlaxcala</option>
              <option value="117-30">Veracruz</option>
              <option value="117-31">Yucatán</option>
              <option value="117-32">Zacatecas</option>
            </select>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection

@section('js_content')

  <script type="text/javascript">
  $(".cli_correo_electronico_facturacion, #dir_facturacion").hide();
  $("#cli_correos_iguales").change(function (){
    var chk = $(this).is(":checked");
    if(chk){
      $(".cli_correo_electronico_facturacion").hide();
      $("#cli_correo_electronico_facturacion").val($("#cli_correo_electronico").val());
    }else{
      $(".cli_correo_electronico_facturacion").show();
      $("#cli_correo_electronico_facturacion").val("");
    }
  });
  $("#cli_direcciones_iguales").change(function (){
    var chk = $(this).is(":checked");
    if(chk){
      $("#dir_facturacion").hide();
      $(".direccion").each(function (){
        var id = $(this).attr("id");
        $("#" + id + "_facturacion").val($(this).val());
      });
    }else{
      $("#dir_facturacion").show();
      $("[id$='_facturacion']").val("");
      $("#cli_id_estado_facturacion").val(" - ");
    }
  });
  $("#cli_correo_electronico").change(function (){
    if($("#cli_correos_iguales").is(":checked")){
      $("#cli_correo_electronico_facturacion").val($(this).val());
    }else{
      $("#cli_correo_electronico_facturacion").val("");
    }
  });
  $(".direccion").change(function (){
    var id = $(this).attr("id");
    if($("#cli_direcciones_iguales").is(":checked")){
      $("#" + id + "_facturacion").val($(this).val());
    }else{
      $("#" + id + "_facturacion").val("");
    }
  });
  </script>

@endsection
