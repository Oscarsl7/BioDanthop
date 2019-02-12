@extends('layouts.BioNetPos.base')

@section('title','BioNet')

@section('css_content')


@endsection

@section('title_content', 'Usuarios')

@section('content')

  <!-- Nav tabs -->
  <!-- <ul class="nav nav-tabs customtab" role="tablist">
    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tabClientes" role="tab"><span class="hidden-sm-up"><i class="fas fa-users"></i></span> <span class="hidden-xs-down">Clientes</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tabEncuenta" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Resultado de Encuesta</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tabAjustes" role="tab"><span class="hidden-sm-up"><i class="fa fa-cog"></i></span> <span class="hidden-xs-down">Ajustes</span></a> </li>
  </ul> -->
  <ul class="nav nav-pills">
    <li class="col-md-4 nav-item"> <a style="text-decoration:none;" href="#tabClientes" class="nav-link active" data-toggle="tab" aria-expanded="false" align="center"><span class="hidden-sm-up"><i class="fas fa-users"></i></span> <span class="hidden-xs-down"> Clientes</span></a> </li>
    <li class="col-md-4 nav-item"> <a style="text-decoration:none;" href="#tabEncuenta" class="nav-link" data-toggle="tab" aria-expanded="false" align="center"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Resultado de Encuesta</span></a> </li>
    <li class="col-md-4 nav-item"> <a style="text-decoration:none;" href="#tabAjustes" class="nav-link" data-toggle="tab" aria-expanded="true" align="center"><i class="fa fa-cog"></i></span> <span class="hidden-xs-down">Ajustes</span></a> </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="tabClientes" role="tabpanel">
      <div class="p-20">

        <form>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="inlineFormCustomSelect">Sucursal:</label>
                <select class="custom-select" id="sucursales_usuario">
                  <option value="*" selected> --- Todas --- </option>
                  <option value="1">Sucursal Uno</option>
                  <option value="2">Sucursal Dos</option>
                </select>
              </div>
            </div>
            <div class="col text-right">
              <div class="form-group">
                <button type="button" id="btnImportarClientes" class="btn btn-success" aria-haspopup="true" aria-expanded="false">
                  Importar
                </button>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Exportar
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ asset('/clientes/excel' . '/') }}" target="_blank">Excel</a>
                  <a class="dropdown-item" href="{{ asset('/clientes/pdf' . '/') }}" target="_blank">PDF</a>
                </div>

              </div>
          </div>
        </form>

        <table id="data-table-fixed-header" class="table tableborder">
          <thead>
            <tr>
              <th width="1%"></th>
              <th class="text-nowrap">Nombre</th>
              <th class="text-nowrap">Correo Electronico</th>
              <th class="text-nowrap">Telefono</th>
              <th class="text-nowrap">Ultima Visita</th>
              <th class="text-nowrap">Consumo Promedio</th>
              <th width="1%" class="text-nowrap" data-orderable="false"></th>
              <th width="1%" class="text-nowrap" data-orderable="false"></th>
            </tr>
          </thead>
          <tbody>
            <tr onmouseover="javascript:void(0)" class="service-panel-toggle">
              <td width="1%">C00001</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 1</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_1@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp1234</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 1</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp0</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp0</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.1</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-1</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp54677</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspSan Luis Potosí</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 1</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspSI</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspSI</label></div></div>'>
                CLIENTE 1
              </a></td>
              <td class="text-nowrap">cliente_1@gmail.com</td>
              <td class="text-nowrap">1234</td>
              <td class="text-nowrap">1234</td>
              <td class="text-nowrap">1234</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="5d3cacf6-3be5-5625-a210-7d68c2dcb00b" data-cli_nombre="CLIENTE 1" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00010</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 10</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_1@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp56790</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 10</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp1</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp1</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.10</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-10</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp54677</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspDurango</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 10</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspNO</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspNO</label></div></div>'>
                CLIENTE 10
              </a></td>
              <td class="text-nowrap">cliente_1@gmail.com</td>
              <td class="text-nowrap">56790</td>
              <td class="text-nowrap">56790</td>
              <td class="text-nowrap">56790</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="29457422-564d-53b0-b407-5f26e1b73a77" data-cli_nombre="CLIENTE 10" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00011</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 11</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_2@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp1236</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 11</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp3</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp3</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.11</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-11</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp34567</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspTabasco</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 11</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspSI</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspSI</label></div></div>'>
                CLIENTE 11
              </a></td>
              <td class="text-nowrap">cliente_2@gmail.com</td>
              <td class="text-nowrap">1236</td>
              <td class="text-nowrap">1236</td>
              <td class="text-nowrap">1236</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="603a63f7-cdf0-5e00-8c56-e755dd768e75" data-cli_nombre="CLIENTE 11" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00012</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 12</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_3@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp4323</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 12</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp4</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp4</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.12</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-12</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp98765</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspNayarit</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 12</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspNO</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspNO</label></div></div>'>
                CLIENTE 12
              </a></td>
              <td class="text-nowrap">cliente_3@gmail.com</td>
              <td class="text-nowrap">4323</td>
              <td class="text-nowrap">4323</td>
              <td class="text-nowrap">4323</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="e48549d7-6339-515e-be0e-e9a63cebb0af" data-cli_nombre="CLIENTE 12" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00002</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 2</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_2@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp4321</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 2</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp2</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp2</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.2</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-2</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp34567</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspDurango</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 2</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspNO</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspNO</label></div></div>'>
                CLIENTE 2
              </a></td>
              <td class="text-nowrap">cliente_2@gmail.com</td>
              <td class="text-nowrap">4321</td>
              <td class="text-nowrap">4321</td>
              <td class="text-nowrap">4321</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="99139c4a-af2d-5a71-a99d-29daffce47bb" data-cli_nombre="CLIENTE 2" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00003</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 3</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_3@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp1234</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 3</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp3</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp3</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.3</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-3</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp98765</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspTabasco</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 3</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspSI</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspSI</label></div></div>'>
                CLIENTE 3
              </a></td>
              <td class="text-nowrap">cliente_3@gmail.com</td>
              <td class="text-nowrap">1234</td>
              <td class="text-nowrap">1234</td>
              <td class="text-nowrap">1234</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/verb" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="4b6a6c27-cb61-5886-956a-329b9c84fadb" data-cli_nombre="CLIENTE 3" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00004</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 4</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_1@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp98765</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 4</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp4</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp4</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.4</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-4</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp54677</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspNayarit</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 4</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspSI</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspSI</label></div></div>'>
                CLIENTE 4
              </a></td>
              <td class="text-nowrap">cliente_1@gmail.com</td>
              <td class="text-nowrap">98765</td>
              <td class="text-nowrap">98765</td>
              <td class="text-nowrap">98765</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="b746118d-05bb-544a-9b38-f94320ec0ef0" data-cli_nombre="CLIENTE 4" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00005</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 5</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_2@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp56789</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 5</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp5</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp5</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.5</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-5</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp34567</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspSan Luis Potosí</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 5</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspSI</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspSI</label></div></div>'>
                CLIENTE 5
              </a></td>
              <td class="text-nowrap">cliente_2@gmail.com</td>
              <td class="text-nowrap">56789</td>
              <td class="text-nowrap">56789</td>
              <td class="text-nowrap">56789</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="e690f21d-53e6-5d4f-9b8f-83056dc2d0d4" data-cli_nombre="CLIENTE 5" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00006</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 6</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_3@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp1235</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 6</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp6</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp6</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.6</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-6</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp98765</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspDurango</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 6</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspNO</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspNO</label></div></div>'>
                CLIENTE 6
              </a></td>
              <td class="text-nowrap">cliente_3@gmail.com</td>
              <td class="text-nowrap">1235</td>
              <td class="text-nowrap">1235</td>
              <td class="text-nowrap">1235</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="b4d98a56-bca3-5730-ba07-ff11556b33db" data-cli_nombre="CLIENTE 6" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00007</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_1@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp4322</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 7</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp7</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp7</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.7</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp54677</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspTabasco</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspNO</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspNO</label></div></div>'>
                CLIENTE 7
              </a></td>
              <td class="text-nowrap">cliente_1@gmail.com</td>
              <td class="text-nowrap">4322</td>
              <td class="text-nowrap">4322</td>
              <td class="text-nowrap">4322</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="52a952b6-8802-52ad-8aad-9d3075501e36" data-cli_nombre="CLIENTE 7" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00008</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 8</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_2@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp1235</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 8</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp8</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp8</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.8</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-8</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp34567</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspNayarit</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 8</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspNO</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspNO</label></div></div>'>
                CLIENTE 8
              </a></td>
              <td class="text-nowrap">cliente_2@gmail.com</td>
              <td class="text-nowrap">1235</td>
              <td class="text-nowrap">1235</td>
              <td class="text-nowrap">1235</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="4c61248c-21d5-5209-991a-534652fb448e" data-cli_nombre="CLIENTE 8" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
            <tr>
              <td width="1%">C00009</td>
              <td class="text-nowrap">
                <a href='#'
                data-trigger='hover'
                data-container='body'
                title='Cliente'
                data-toggle='popover'
                data-placement='right'
                data-html='true'
                data-content='<div class="row"><div class="col-md-12"><label class="control-label">Nombre:</label><label class="control-label text-info" >&nbspCLIENTE 9</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Correo Electrónico:</label><label class="control-label text-info" >&nbspcliente_3@gmail.com</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Teléfono:</label><label class="control-label text-info" >&nbsp98766</label></div></div><div class="row"><div class="col-md-12"><h6>Dirección</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">Calle:</label><label class="control-label text-info" >&nbspCalle 9</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">N. Int.:</label><label class="control-label text-info" >&nbsp9</label></div><div class="col-md-6"><label class="control-label">N. Ext.:</label><label class="control-label text-info" >&nbsp9</label></div></div><div class="row"><div class="col-md-6"><label class="control-label">Colonia:</label><label class="control-label text-info" >&nbspCol.9</label></div><div class="col-md-6"><label class="control-label">Ciudad:</label><label class="control-label text-info" >&nbspCiudad-9</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Código Posta:</label><label class="control-label text-info" >&nbsp98765</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Estado:</label><label class="control-label text-info" >&nbspSan Luis Potosí</label></div></div><div class="row"><div class="col-md-12"><h6>Datos de Facturación</h6></div></div><div class="row"><div class="col-md-12"><label class="control-label">RFC:</label><label class="control-label text-info" >&nbspRACH881113AR7</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Razón Social:</label><label class="control-label text-info" >&nbspR S CLIENTE 9</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Mismo email que email personal:</label><label class="control-label text-info" >&nbspSI</label></div></div><div class="row"><div class="col-md-12"><label class="control-label">Misma ubicación que dirección personal:</label><label class="control-label text-info" >&nbspSI</label></div></div>'
                >
                CLIENTE 9
              </a></td>
              <td class="text-nowrap">cliente_3@gmail.com</td>
              <td class="text-nowrap">98766</td>
              <td class="text-nowrap">98766</td>
              <td class="text-nowrap">98766</td>
              <td><a class="btn btn-success" role="button" href="http://127.0.0.1:8000/template/ver" ><i class="fas fa-eye" style="color:white"></i> </a></td>
              <td><button type="button" data-cli_id="7b6f0461-922b-55a0-b3f3-b56ae1d8a947" data-cli_nombre="CLIENTE 9" class="btn btn-danger eliminar-cliente"><i class="fas fa-trash-alt"></i> </button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane  p-20" id="tabEncuenta" role="tabpanel">Trabajando</div>
    <div class="tab-pane p-20" id="tabAjustes" role="tabpanel">
      <label class="btn waves-effect waves-light btn-block btn-outline-info">
        <div class="custom-control custom-checkbox mr-sm-2">
          <input type="checkbox" class="custom-control-input" id="chkRecibirComentarios" >
          <label class="custom-control-label" for="chkRecibirComentarios">Recibir comentarios de clientes hechos a través de la encuesta.</label>
        </div>
      </label>
    </div>
  </div>

  <hr />
  <h3>+ Ejemplos</h3>
  <hr />
  <button type="button" id="btnModal" class="btn btn-success" aria-haspopup="true" aria-expanded="false">
    modal 2
  </button>
  <button type="button" id="btnModallg" class="btn btn-primary" aria-haspopup="true" aria-expanded="false">
    modal 3
  </button>
  <button type="button" id="btnModalsm" class="btn btn-danger" aria-haspopup="true" aria-expanded="false">
    modal 4
  </button>

  <hr />
  <div class="card-body show">
    <div class="row p-t-20">
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label">First Name</label>
          <input type="text" id="firstName" class="form-control" placeholder="John doe">
          <small class="form-control-feedback"> This is inline help </small> </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
          <div class="form-group has-danger">
            <label class="control-label">Last Name</label>
            <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
            <small class="form-control-feedback"> This field has error. </small> </div>
          </div>
          <!--/span-->
        </div>
        <!--/row-->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group has-success">
              <label class="control-label">Gender</label>
              <select class="form-control custom-select">
                <option value="">Male</option>
                <option value="">Female</option>
              </select>
              <small class="form-control-feedback"> Select your gender </small> </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                <!-- <input type="file" id="listaClientes" name="listaClientes" accept=".xlsx, .ods" class="custom-file-input"> -->
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="form-control custom-file-label" for="inputGroupFile01">Cargar archivo</label>

            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Date of Birth</label>
                <!-- <input type="text" class="form-control"> -->
                <div class="input-group">
                  <input type="text" id="datepicker-autoclose" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                  <div class="input-group-append">
                    <i class="icon-calender"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <!--/span-->
          </div>
          <!--/row-->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Category</label>
                <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                  <option value="Category 1">Category 1</option>
                  <option value="Category 2">Category 2</option>
                  <option value="Category 3">Category 5</option>
                  <option value="Category 4">Category 4</option>
                </select>
              </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Membership</label>
                <!-- <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio11" name="customRadio" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio11">Free</label>
                </div> -->
                <label class="r">Free
                  <input type="radio" id="customRadio11" name="customRadio">
                  <span class="checkmark"></span>
                </label>
                <!-- <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio22" name="customRadio" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio22">Paid</label>
                </div> -->
                <label class="r" disabled>Paid
                  <input type="radio" id="customRadio22" name="customRadio" disabled>
                  <span class="checkmark disabled-button"></span>
                </label>
              </div>
            </div>
            <!--/span-->
          </div>
          <!--/row-->
          <h4 class="card-title m-t-40">Address</h4>
        </div>

        <div class="form-group row">
          <label for="example-color-input" class="col-2 col-form-label">Input Range</label>
          <div class="col-10">
            <input type="range" class="form-control" id="range" value="50">
          </div>
        </div>

        <hr />

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-body">
              <h4 class="card-title">Input groups</h4>
              <h5 class="card-subtitle"> All bootstrap element classies </h5>
              <div class="row">
                <div class="col-sm-12 col-xs-12">
                  <form>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                      </div>
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <div class="input-group-prepend">
                        <span class="input-group-text">0.00</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    </div>
                    <!-- form-group -->
                  </form>
                </div>
                <div class="col-sm-12 col-xs-12">
                  <form>
                    <label class="control-label m-t-20">Checkboxes and radio addons</label>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="checkbox3" value="check">
                                <label class="custom-control-label" for="checkbox3"></label>
                              </div>
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio5"></label>
                              </div>
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with radio button">
                        </div>
                      </div>
                    </div>
                    <label class="control-label m-t-20">Multiple addons</label>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="checkbox00" value="check">
                                <label class="custom-control-label" for="checkbox00"></label>
                              </div>
                            </div>
                          </div>
                          <div class="input-group-prepend">
                            <span class="input-group-text">0.00</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <div class="input-group-prepend">
                            <span class="input-group-text">0.00</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-sm-12 col-xs-12">
                  <form class="input-form">
                    <label class="control-label m-t-20">Button addons</label>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-info" type="button">Go!</button>
                          </div>
                          <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-info" type="button">Go!</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-danger" type="button">Hate It</button>
                          </div>
                          <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-success" type="button">Love It</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- form-group -->
                  </form>
                </div>
                <div class="col-sm-12 col-xs-12">
                  <label class="control-label m-t-20">Dropdown addons</label>
                  <form class="input-form">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0)">Action</a>
                              <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" aria-label="Text input with dropdown button">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0)">Action</a>
                              <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr />
        <div class="form-group row p-t-20">
          <div class="col-sm-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck3">
              <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio2">Toggle this custom radio</label>
            </div>
          </div>
        </div>

        <hr />
        <a href="#" class="btn btn-outline-primary btn-rounded"><i class="fa fa-check"></i> Primary</a>

        <hr />

        <div class="row m-t-15 m-b-15">
          <div class="col-md-3">
            <div class="row align-items-center">
              <div class="col-12 col-sm-4 p-l-5"><img src="{{ asset('img/añadirproducto2.png')}}" width="100%" alt="" id="icon-med"></div>
              <div class="col-12 col-sm-8 p-t-5"><a class="underline" href="">Producto</a></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="row align-items-center">
              <div class="col-12 col-sm-4 p-l-5"><img src="{{ asset('img/añadirvendedor2.png')}}" width="100%" alt="" id="icon-med"></div>
              <div class="col-12 col-sm-8 p-t-5">

                <a class="underline" href="">Vendedor</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="row align-items-center">
              <div class="col-12 col-sm-4 p-l-5" ><img src="{{ asset('img/añadirvendedor2.png')}}" width="100%" alt="" id="icon-med"></div>
              <div class="col-12 col-sm-8 p-t-5"><a class="underline" href="">Producto</a></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="row align-items-center">
              <div class="col-12 col-sm-3 p-l-5" >
                <div class="form-check">
                  <label class="ch">
                    <input type="checkbox" checked="checked">Factura
                    <span class="checkm"></span>
                  </div>
                </div>

                <!-- <div class="col-4 p-l-5">
                <label class="ch">
                <input type="checkbox" checked="checked">
                <span class="checkm"></span>
              </div>
              <div class="col-8"><h4 href="" class="nav-link">Factura</h4></div> -->
            </div>
          </div>
          <div class="col-sm-3"></div>
        </div>

        <hr />
        <div class="col-md-4">
          <h4 class="card-title">Bootstrap Switch</h4>
          <!-- Sizes -->
          <label class="switch">
            <input type="checkbox" checked>
            <span class="slider rounde"></span>
          </label>
        </div>
        <script id="modal-importar" type="text/x-handlebars-template">

          <div class="row">
            <div class="col-md-12">
              <label for="inlineFormCustomSelect">Sucursal:</label>
              <select class="custom-select" id="sucursales_usuario_1">
                <option value="1">Sucursal Uno</option>
                <option value="2">Sucursal Dos</option>
              </select>
            </div>
          </div>
          <div class="row p-t-20">
            <div class="col-md-12">
              <div class="form-group">
                <label>Cargar archivo</label>
                <!-- <input type="file" id="listaClientes" name="listaClientes" accept=".xlsx, .ods" class="custom-file-input"> -->
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
          </div>
          <div class="row p-t-20">
            <div class="col-md-12">
              <h5>Instrucciones</h5>
              <ol>
                <li><a href="{{ asset('docs/importarClientes.xlsx')}}">Descargar</a> layout de captura de clientes.</li>
                <li>
                  Capturar la información de los clientes a importar.
                  <ul>
                    <li>No cambiar la estructura del archivo.</li>
                  </ul>
                </li>
                <li>Guardar información capturada.</li>
                <li>Click en el boton seleccionar archivo.</li>
                <li>Seleccionar el archivo con la lista de clientes a importar.</li>
                <li>Click en el boton aceptar o abrir.</li>
                <li>Click en el boton Importar.</li>
              </ol>
            </div>
          </div>
        </script>


      @endsection

      @section('js_content')

        <script type="text/javascript">

        DataTables("#data-table-fixed-header");

        $("#btnModal").click(function (){
          let ModalTitulo = Handlebars.compile($("#modal-titulo").html());
          let ModalBody = Handlebars.compile($("#modal-mensaje-confirmacion").html());
          let ModalBotones = Handlebars.compile($("#modal-botones").html());
          $(".layout-modal").removeAttr("data-modal-color");
          var boton = {
            btn1: true,
            label1: "Si, Eliminar",
            tipo1: "success",
            function1: "alert('btn1')",
            icono1: "fas fa-trash-alt",
            btn2: true,
            label2: "btn 2",
            tipo2: "success",
            function2: "alert('btn2')",
            icono2: "fas fa-boxes",
            btn3: true,
            label3: "btn 3",
            tipo3: "warning",
            function3: "alert('btn3')",
            icono3: "fas fa-cogs"
          }
          $(".layout-modal").modal({
            show: true,
            keyboard: false,
            backdrop: "static"
          });
          $(".layout-modal div.modal-dialog").removeClass().addClass("modal-dialog");//modal-lg, modal-sm
          $('#modal-title').empty().append(ModalTitulo({ titulo: 'Eliminar Cliente' }));
          $('#modal-contenido').empty().append(ModalBody({ mensaje: "¿prueba?" }));
          $('#modal-footer').empty().append(ModalBotones(boton));
        });

        $("#btnModallg").click(function (){
          let ModalTitulo = Handlebars.compile($("#modal-titulo").html());
          let ModalBody = Handlebars.compile($("#modal-mensaje-confirmacion").html());
          let ModalBotones = Handlebars.compile($("#modal-botones").html());
          $(".layout-modal").removeAttr("data-modal-color");
          var boton = {
            btn1: true,
            label1: "Si, Eliminar",
            tipo1: "success",
            function1: "alert('btn1')",
            icono1: "fas fa-trash-alt",
            btn2: true,
            label2: "btn 2",
            tipo2: "success",
            function2: "alert('btn2')",
            icono2: "fas fa-boxes",
            btn3: true,
            label3: "btn 3",
            tipo3: "warning",
            function3: "alert('btn3')",
            icono3: "fas fa-cogs"
          }
          $(".layout-modal").modal({
            show: true,
            keyboard: false,
            backdrop: "static"
          });
          $(".layout-modal div.modal-dialog").removeClass().addClass("modal-dialog modal-lg");//modal-lg, modal-sm
          $('#modal-title').empty().append(ModalTitulo({ titulo: 'Eliminar Cliente' }));
          $('#modal-contenido').empty().append(ModalBody({ mensaje: "¿prueba?" }));
          $('#modal-footer').empty().append(ModalBotones(boton));
        });

        $("#btnModalsm").click(function (){
          let ModalTitulo = Handlebars.compile($("#modal-titulo").html());
          let ModalBody = Handlebars.compile($("#modal-mensaje-confirmacion").html());
          let ModalBotones = Handlebars.compile($("#modal-botones").html());
          $(".layout-modal").removeAttr("data-modal-color");
          var boton = {
            btn1: true,
            label1: "Si, Eliminar",
            tipo1: "success",
            function1: "alert('btn1')",
            icono1: "fas fa-trash-alt",
            btn2: true,
            label2: "btn 2",
            tipo2: "info",
            function2: "alert('btn2')",
            icono2: "fas fa-boxes",
            btn3: true,
            label3: "btn 3",
            tipo3: "warning",
            function3: "alert('btn3')",
            icono3: "fas fa-cogs"
          }
          $(".layout-modal").modal({
            show: true,
            keyboard: false,
            backdrop: "static"
          });
          $(".layout-modal div.modal-dialog").removeClass().addClass("modal-dialog modal-sm");//modal-lg, modal-sm
          $('#modal-title').empty().append(ModalTitulo({ titulo: 'Eliminar Cliente' }));
          $('#modal-contenido').empty().append(ModalBody({ mensaje: "¿prueba?" }));
          $('#modal-footer').empty().append(ModalBotones(boton));
        });

        $("#sucursales_usuario")
        .val("")
        .change(function (){
          var suc_id = $.trim($("#sucursales_usuario").val());
          var suc_nombre = $.trim($("#sucursales_usuario option:selected").text());
          var ruta = "{{ asset('/clientes') }}";
          ruta+="/list/" + suc_id;
        });

        $(".eliminar-cliente").click(function (){
          var datos = $(this)[0].dataset;
          let ModalTitulo = Handlebars.compile($("#modal-titulo").html());
          let ModalBody = Handlebars.compile($("#modal-mensaje-confirmacion").html());
          let ModalBotones = Handlebars.compile($("#modal-botones").html());
          $(".layout-modal").removeAttr("data-modal-color");
          var boton = {
            btn1: true,
            label1: "Si, Eliminar",
            tipo1: "success",
            function1: "eliminarCliente(" + JSON.stringify(datos) + ")",
            icono1: "fas fa-trash-alt",
            btn2: false,
            btn3: false
          }
          $(".layout-modal").modal({
            show: true,
            keyboard: false,
            backdrop: "static"
          });
          $(".layout-modal div.modal-dialog").removeClass().addClass("modal-dialog");//modal-lg, modal-sm
          $('#modal-title').empty().append(ModalTitulo({ titulo: 'Eliminar Cliente' }));
          $('#modal-contenido').empty().append(ModalBody({ mensaje: "¿Eliminar Cliente: " + datos.cli_nombre + "?" }));
          $('#modal-footer').empty().append(ModalBotones(boton));
        });

        function eliminarCliente(aDatos){
          console.log("eliminar");
        }

        $("#btnImportarClientes").click(function (){
          let ModalTitulo = Handlebars.compile($("#modal-titulo").html());
          let ModalBody = Handlebars.compile($("#modal-importar").html());
          let ModalBotones = Handlebars.compile($("#modal-botones").html());
          $(".layout-modal").removeAttr("data-modal-color");
          var boton = {
            btn1: true,
            label1: "Importar",
            tipo1: "success",
            function1: "importarClientes()",
            icono1: "",
            btn2: false,
            btn3: false
          }
          $(".layout-modal").modal({
            show: true,
            keyboard: false,
            backdrop: "static"
          });
          $(".layout-modal div.modal-dialog").removeClass().addClass("modal-dialog");//modal-lg, modal-sm
          $('#modal-title').empty().append(ModalTitulo({ titulo: 'Comprar' }));
          $('#modal-contenido').empty().append(ModalBody());
          $('#modal-footer').empty().append(ModalBotones(boton));
        });

        function importarClientes(){
          console.log("importar");

        }



        // Date Picker
        jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
          autoclose: true,
          todayHighlight: true
        });
        jQuery('#datepicker-autoclose2').datepicker({
          autoclose: true,
          todayHighlight: true
        });
        jQuery('#date-range').datepicker({
          toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
          todayHighlight: true
        });
        </script>
      @endsection
