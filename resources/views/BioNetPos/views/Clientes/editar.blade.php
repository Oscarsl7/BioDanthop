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
        @if(count($aDatos['aSucursalesUsuario']) > 1)
        <option value="@foreach($aDatos['aSucursalesUsuario'] as $key => $value){{ $value['suc_id'] . "|" }}@endforeach" selected> --- Todas --- </option>
        @endif
        @foreach($aDatos['aSucursalesUsuario'] as $key => $value)
          <option value="{{ $value['suc_id'] }}" @if($value['suc_id'] == $aDatos['suc_id']) selected @endif>{{ $value['suc_nombre'] }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label class="control-label">Nombre: </label>
          <input type="text" id="cli_nombre" value="{{ $aDatos['aCliente']["cli_nombre"] }}" class="form-control">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label class="control-label">Correo Electrónico: </label>
          <input type="text" id="cli_correo_electronico" value="{{ $aDatos['aCliente']["cli_correo_electronico"] }}" class="form-control">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label class="control-label">Teléfono: </label>
          <input type="text" id="cli_telefono" value="{{ $aDatos['aCliente']["cli_telefono"] }}" class="form-control">
        </div>
      </div>
    </div>
    <h5>Dirección</h5>
    <hr />
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label class="control-label">Calle: </label>
          <input type="text" id="cli_calle" value="{{ $aDatos['aCliente']["cli_direccion"]["cli_calle"] }}" class="form-control direccion">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label class="control-label">Número Interior: </label>
          <input type="number" min="0" id="cli_numero_interior" min="0" value="{{ $aDatos['aCliente']["cli_direccion"]["cli_numero_interior"] }}" onkeypress="return validar.soloNumeros(event);" class="form-control direccion">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label class="control-label">Número Exterior: </label>
          <input type="number" min="0" id="cli_numero_exterior" min="0" value="{{ $aDatos['aCliente']["cli_direccion"]["cli_numero_exterior"] }}" onkeypress="return validar.soloNumeros(event);" class="form-control direccion">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label">Colonia: </label>
          <input type="text" id="cli_colonia" value="{{ $aDatos['aCliente']["cli_direccion"]["cli_colonia"] }}" class="form-control direccion">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label">Ciudad: </label>
          <input type="text" id="cli_ciudad" value="{{ $aDatos['aCliente']["cli_direccion"]["cli_ciudad"] }}" class="form-control direccion">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label">Codigo Postal: </label>
          <input type="number" min="0" id="cli_codigo_postal" value="{{ $aDatos['aCliente']["cli_direccion"]["cli_codigo_postal"] }}" onkeypress="return validar.soloNumeros(event);" class="form-control direccion">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label">Estado: </label>
          <select class="form-control custom-select direccion" id="cli_id_estado">
            @foreach ($aDatos['aEstados'] as $key => $value)
              <option value="{{ $value['edo_id_pais'].'-'.$value['edo_id'] }}">{{ $value['edo_nombre'] }}</option>
            @endforeach
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
          <input type="text" id="cli_rfc" value="{{ $aDatos['aCliente']["cli_rfc"] }}" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label">Razón Social: </label>
          <input type="text" id="cli_razon_social" value="{{ $aDatos['aCliente']["cli_razon_social"] }}" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label">Email de facturación: </label>
          <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" class="custom-control-input" id="cli_correos_iguales" @if((bool)$aDatos['aCliente']['cli_correos_iguales']) checked @endif>
            <label class="custom-control-label" for="cli_correos_iguales">Mismo email que email personal</label>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group cli_correo_electronico_facturacion">
          <label class="control-label">Correo Electrónico de Facturación: </label>
          <input type="text" id="cli_correo_electronico_facturacion" data-lastvalue="{{ $aDatos['aCliente']["cli_correo_electronico_facturacion"] }}" value="{{ $aDatos['aCliente']["cli_correo_electronico_facturacion"] }}" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label class="control-label">Dirección fiscal: </label>
          <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" class="custom-control-input" id="cli_direcciones_iguales" @if((bool)$aDatos['aCliente']['cli_direcciones_iguales']) checked @endif>
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
              <input type="text" id="cli_calle_facturacion" data-lastvalue="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_calle"] }}" value="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_calle"] }}" class="form-control direccion">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Número Interior: </label>
              <input type="number" min="0" id="cli_numero_interior_facturacion" min="0" data-lastvalue="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_numero_interior"] }}" value="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_numero_interior"] }}" onkeypress="return validar.soloNumeros(event);" class="form-control direccion">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label">Número Exterior: </label>
              <input type="number" min="0" id="cli_numero_exterior_facturacion" min="0" data-lastvalue="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_numero_exterior"] }}" value="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_numero_exterior"] }}" onkeypress="return validar.soloNumeros(event);" class="form-control direccion">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Colonia: </label>
              <input type="text" id="cli_colonia_facturacion" data-lastvalue="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_colonia"] }}" value="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_colonia"] }}" class="form-control direccion">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Ciudad: </label>
              <input type="text" id="cli_ciudad_facturacion" data-lastvalue="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_ciudad"] }}" value="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_ciudad"] }}" class="form-control direccion">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Codigo Postal: </label>
              <input type="number" min="0" id="cli_codigo_postal_facturacion" data-lastvalue="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_codigo_postal"] }}" value="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_codigo_postal"] }}" onkeypress="return validar.soloNumeros(event);" class="form-control direccion">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Estado: </label>
              <select class="form-control custom-select direccion" id="cli_id_estado_facturacion" data-lastvalue="{{ $aDatos['aCliente']["cli_direccion_fiscal"]["cli_id_pais"] . "-" . $aDatos['aCliente']["cli_direccion_fiscal"]["cli_id_estado"]}}">
                @foreach ($aDatos['aEstados'] as $key => $value)
                  <option value="{{ $value['edo_id_pais'].'-'.$value['edo_id'] }}">{{ $value['edo_nombre'] }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>


      </div>
    </div>

  @endsection

  @section('js_content')

    <script type="text/javascript">
    @if((bool)$aDatos['aCliente']['cli_correos_iguales'])
      $(".cli_correo_electronico_facturacion").hide();
    @else
      $(".cli_correo_electronico_facturacion").show();
    @endif
    @if((bool)$aDatos['aCliente']['cli_direcciones_iguales'])
      $("#dir_facturacion").hide();
    @else
      $("#dir_facturacion").show();
    @endif

    $("#cli_correos_iguales").change(function (){
      var chk = $(this).is(":checked");
      if(chk){
        $(".cli_correo_electronico_facturacion").hide();
        $("#cli_correo_electronico_facturacion").val($("#cli_correo_electronico").val());
      }else{
        $(".cli_correo_electronico_facturacion").show();
        $("#cli_correo_electronico_facturacion").val($("#cli_correo_electronico_facturacion").data("lastvalue"));
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
        $(".direccion").each(function (){
          var id = $(this).attr("id");
          $("#" + id + "_facturacion").val($("#" + id + "_facturacion").data("lastvalue"));
        });
      }
    });
    $("#cli_correo_electronico").change(function (){
      if($("#cli_correos_iguales").is(":checked")){
        $("#cli_correo_electronico_facturacion").val($(this).val());
      }else{
        $("#cli_correo_electronico_facturacion").val($("#cli_correo_electronico_facturacion").data("lastvalue"));
      }
    });
    $(".direccion").change(function (){
      var id = $(this).attr("id");
      if($("#cli_direcciones_iguales").is(":checked")){
        $("#" + id + "_facturacion").val($(this).val());
      }else{
        $("#" + id + "_facturacion").val($("#" + id + "_facturacion").data("lastvalue"));
      }
    });

    $("#btnGuardar").click(function (){
      var asError = [];
      var suc_id = $.trim($("#sucursales_usuario").val());
      var cli_nombre = $.trim($("#cli_nombre").val());
      var cli_correo_electronico = $.trim($("#cli_correo_electronico").val());
      var cli_telefono = $.trim($("#cli_telefono").val());
      var cli_razon_social = $.trim($("#cli_razon_social").val());
      var cli_rfc = $.trim($("#cli_rfc").val()).toUpperCase();
      var cli_calle = $.trim($("#cli_calle").val());
      var cli_numero_interior = $.trim($("#cli_numero_interior").val()) * 1;
      var cli_numero_exterior = $.trim($("#cli_numero_exterior").val()) * 1;
      var cli_colonia = $.trim($("#cli_colonia").val());
      var cli_ciudad = $.trim($("#cli_ciudad").val());
      var cli_codigo_postal = $.trim($("#cli_codigo_postal").val());
      var cli_id_estado_pais = ($.trim($("#cli_id_estado").val())).split("-");
      var cli_id_pais = cli_id_estado_pais[0];
      var cli_id_estado = cli_id_estado_pais[1];
      var cli_estado = $.trim($("#cli_id_estado option:selected").text());
      var cli_pais = "México";

      var cli_correos_iguales = $("#cli_correos_iguales").is(":checked");
      var cli_direcciones_iguales = $("#cli_direcciones_iguales").is(":checked");

      var cli_correo_electronico_facturacion = $.trim($("#cli_correo_electronico_facturacion").val());
      var cli_calle_facturacion = $.trim($("#cli_calle_facturacion").val());
      var cli_numero_interior_facturacion = $.trim($("#cli_numero_interior_facturacion").val()) * 1;
      var cli_numero_exterior_facturacion = $.trim($("#cli_numero_exterior_facturacion").val()) * 1;
      var cli_colonia_facturacion = $.trim($("#cli_colonia_facturacion").val());
      var cli_ciudad_facturacion = $.trim($("#cli_ciudad_facturacion").val());
      var cli_codigo_postal_facturacion = $.trim($("#cli_codigo_postal_facturacion").val());
      var cli_id_estado_pais_facturacion = ($.trim($("#cli_id_estado_facturacion").val())).split("-");
      var cli_id_pais_facturacion = cli_id_estado_pais[0];
      var cli_id_estado_facturacion = cli_id_estado_pais[1];
      var cli_estado_facturacion = $.trim($("#cli_id_estado_facturacion option:selected").text());
      var cli_pais_facturacion = "México";
      if(validar.vacio(suc_id))
      asError.push("Seleccionar una sucursal.");
      if(validar.vacio(cli_nombre))
      asError.push("Nombre de cliente obligatorio.");
      if(validar.vacio(cli_correo_electronico))
      asError.push("Correo Electrónico obligatorio.");
      if(validar.vacio(cli_correo_electronico) === false && validar.correo(cli_correo_electronico) === false)
      asError.push("Correo Electrónico invalido");
      if(validar.vacio(cli_telefono))
      asError.push("Teléfono obligatorio.");
      if(validar.vacio(cli_telefono) === false && validar.numero(cli_telefono) === false)
      asError.push("El número de teléfono debe ser un valor numerico.");
      if(validar.vacio(cli_razon_social))
      asError.push("Razon social obligatoria.");
      if(validar.vacio(cli_rfc))
      asError.push("RFC obligatorio");
      if(validar.vacio(cli_rfc) === false && validar.rfc(cli_rfc) === false)
      asError.push("RFC invalido");
      if(validar.vacio(cli_calle))
      asError.push("Nombre de la calle es obligatorio.");
      if(validar.vacio(cli_colonia))
      asError.push("Nombre de la colonia es obligatorio.");
      if(validar.vacio(cli_ciudad))
      asError.push("Nombre de la ciudad es obligatorio.");
      if(validar.vacio(cli_codigo_postal))
      asError.push("El codigo postal es obligatorio.");
      if(validar.vacio(cli_id_estado))
      asError.push("El estado es obligatorio.");

      if(cli_correos_iguales === false){
        if(validar.vacio(cli_correo_electronico_facturacion))
        asError.push("Correo electrónico de facturacion obligatorio.");
        if(validar.vacio(cli_correo_electronico_facturacion) === false && validar.correo(cli_correo_electronico_facturacion) === false)
        asError.push("Correo electrónico de facturación invalido");
      }
      if(cli_direcciones_iguales === false){
        if(validar.vacio(cli_calle_facturacion))
        asError.push("Nombre de la calle de facturación es obligatorio.");
        if(validar.vacio(cli_colonia_facturacion))
        asError.push("Nombre de la colonia de facturación es obligatorio.");
        if(validar.vacio(cli_ciudad_facturacion))
        asError.push("Nombre de la ciudad de facturación es obligatorio.");
        if(validar.vacio(cli_codigo_postal_facturacion))
        asError.push("El codigo postal de facturación es obligatorio.");
        if(validar.vacio(cli_id_estado_facturacion))
        asError.push("El estado de facturación es obligatorio.");
      }

      if(asError.length > 0){
        modal.error("Error (" + asError.length + ") al guardar por:", asError);
        return false;
      }

      var aDatos = {
        "cli_id": "{{ $aDatos['aCliente']['cli_id'] }}",
        "cli_sucursales": suc_id,
        "cli_nombre": cli_nombre,
        "cli_correo_electronico": cli_correo_electronico,
        "cli_telefono": cli_telefono,
        "cli_razon_social": cli_razon_social,
        "cli_rfc": cli_rfc,
        "cli_correos_iguales": cli_correos_iguales,
        "cli_direcciones_iguales": cli_direcciones_iguales,
        "cli_calle": cli_calle,
        "cli_numero_interior": cli_numero_interior,
        "cli_numero_exterior": cli_numero_exterior,
        "cli_colonia": cli_colonia,
        "cli_ciudad": cli_ciudad,
        "cli_codigo_postal": cli_codigo_postal,
        "cli_id_pais": cli_id_pais,
        "cli_id_estado": cli_id_estado,
        "cli_estado": cli_estado,
        "cli_pais": cli_pais,
        "cli_correo_electronico_facturacion": cli_correo_electronico_facturacion,
        "cli_calle_facturacion": cli_calle_facturacion,
        "cli_numero_interior_facturacion": cli_numero_interior_facturacion,
        "cli_numero_exterior_facturacion": cli_numero_exterior_facturacion,
        "cli_colonia_facturacion": cli_colonia_facturacion,
        "cli_ciudad_facturacion": cli_ciudad_facturacion,
        "cli_codigo_postal_facturacion": cli_codigo_postal_facturacion,
        "cli_id_pais_facturacion": cli_id_pais_facturacion,
        "cli_id_estado_facturacion": cli_id_estado_facturacion,
        "cli_estado_facturacion": cli_estado_facturacion,
        "cli_pais_facturacion": cli_pais_facturacion
      }
      $.ajax({
        async: true,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "{{ asset ('api/clientes/update') }}",
        data: aDatos,
        cache: false,
        dataType: "json",
        beforeSend: function (){
          modal.preloader();
        },
        success: function (result) {
          if(suc_id.indexOf("|") !== -1){
            suc_id = "*"
          }
          modal.end_success(result.mensaje, result.estatus, [], "{{ asset('/clientes/ver/' . $aDatos['aCliente']['cli_id']) }}");

        },
        complete: function () {
        },
        error: function (result) {
          modal.end_error("Error al guardar. " + result.toString(), []);
          console.log("error", result);
        }
      });

    });

    </script>

  @endsection
