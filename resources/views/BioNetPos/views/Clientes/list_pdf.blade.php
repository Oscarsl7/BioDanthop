@extends('layouts.BioNetPos.base_pdf')

@section('title', 'Clientes')

@section('css_content')
  <style type="text/css" media="all">

  </style>
@endsection

@section('content')

  <table class="table">
    <thead>
      <tr>
        <th width="1%"></th>
        <th class="text-nowrap">Nombre</th>
        <th class="text-nowrap">Correo Electrónico</th>
        <th class="text-nowrap">Teléfono</th>
        <th class="text-nowrap">R.F.C.</th>
        <th class="text-nowrap">Rozón Social</th>
      </tr>
    </thead>
    <tbody>
      @php
      $i = 1;
      @endphp
      @foreach ($aDatos as $key => $value)
        <tr>
          <td style="text-align: center;">{{ $i }}</td>
          <td>{{ @$value['cli_nombre'] }}</td>
          <td>{{ @$value['cli_correo_electronico'] }}</td>
          <td>{{ @$value['cli_telefono'] }}</td>
          <td>{{ @$value['cli_rfc'] }}</td>
          <td>{{ @$value['cli_razon_social'] }}</td>
        </tr>
        <tr>
          <td colspan="6">
            <b>Dirección Personal:</b>
            Calle: {{ $value["cli_direccion"]['cli_calle'] }} No. Int.:{{ $value["cli_direccion"]['cli_numero_interior'] }}
            No. Ext.: {{ $value["cli_direccion"]['cli_numero_exterior'] }}
            Col.: {{ $value["cli_direccion"]['cli_colonia'] }}, C.P.: {{ $value["cli_direccion"]['cli_codigo_postal'] }},
            {{ $value["cli_direccion"]['cli_ciudad'] }}, {{ $value["cli_direccion"]['cli_estado'] }}
          </td>
        </tr>
        <tr>
          <td colspan="6">
            <b>Dirección Fiscal:</b>
            @if((bool)$value["cli_direcciones_iguales"])
              Misma ubicación que dirección personal: Si
            @else
              Calle: {{ $value["cli_direccion_fiscal"]['cli_calle'] }} No. Int.: {{ $value["cli_direccion_fiscal"]['cli_numero_interior'] }}
              No. Ext.: {{ $value["cli_direccion_fiscal"]['cli_numero_exterior'] }}
              Col.: {{ $value["cli_direccion_fiscal"]['cli_colonia'] }}, C.P.: {{ $value["cli_direccion_fiscal"]['cli_codigo_postal'] }},
              {{ $value["cli_direccion_fiscal"]['cli_ciudad'] }}, {{ $value["cli_direccion_fiscal"]['cli_estado'] }}
            @endif
          </td>
        </tr>
        <tr>
          <td colspan="6" style="border-bottom: 2px solid #194052;">
            @if((bool)$value["cli_correos_iguales"])
              Mismo email que email personal: Si
            @else
              Correo Electrónico De Facturación: {{ @$value['cli_correo_electronico_facturacion'] }}
            @endif
          </td>
        </tr>
        @php
        $i++;
        @endphp
      @endforeach
    </tbody>
  </table>

@endsection
