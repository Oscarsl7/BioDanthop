@extends('layouts.BioNetPos.base')

@section('title','BioNet')

@section('css_content')
  <style type="text/css" media="all">

  </style>
@endsection

@section('title_content', 'Clientes / Ver')

@section('content')

  <h5>
      <label class="control-label">Nombre: </label>
      <label class="control-label h5 text-info">CLIENTE 1</label>
    </h5>
    <hr />
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="inlineFormCustomSelect">Sucursal:</label>
            <label class="control-label h5 text-info">S1</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Correo Electrónico: </label>
            <label class="control-label h5 text-info">cliente_1@gmail.com</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Teléfono: </label>
            <label class="control-label h5 text-info">1234</label>
          </div>
        </div>
      </div>
      <h5>Dirección</h5>
      <hr />
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Calle: </label>
            <label class="control-label h5 text-info">Calle 1</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Número Interior: </label>
            <label class="control-label h5 text-info">0</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Número Exterior: </label>
            <label class="control-label h5 text-info">0</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Colonia: </label>
            <label class="control-label h5 text-info">Col.1</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Ciudad: </label>
            <label class="control-label h5 text-info">Ciudad-1</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Codigo Postal: </label>
            <label class="control-label h5 text-info">54677</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Estado: </label>
            <label class="control-label h5 text-info">San Luis Potosí</label>
          </div>
        </div>
      </div>
      <h5>Datos de Facturación</h5>
      <hr />
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">RFC: </label>
            <label class="control-label h5 text-info">RACH881113AR7</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Razón Social: </label>
            <label class="control-label h5 text-info">R S CLIENTE 1</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group cli_correo_electronico_facturacion">
            <label class="control-label">Correo Electrónico de Facturación: </label>
            <label class="control-label h5 text-info">cliente_1@gmail.com</label>
          </div>
        </div>
      </div>

      <h5>Dirección Facturación</h5>
      <hr/>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Calle: </label>
            <label class="control-label h5 text-info">Calle 1</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Número Interior: </label>
            <label class="control-label h5 text-info">0</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Número Exterior: </label>
            <label class="control-label h5 text-info">0</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Colonia: </label>
            <label class="control-label h5 text-info">Col.1</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Ciudad: </label>
            <label class="control-label h5 text-info">Ciudad-1</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Codigo Postal: </label>
            <label class="control-label h5 text-info">54677</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Estado: </label>
            <label class="control-label h5 text-info">San Luis Potosí</label>
          </div>
        </div>
      </div>

  @endsection

  @section('js_content')

    <script type="text/javascript">
    

    </script>

  @endsection
