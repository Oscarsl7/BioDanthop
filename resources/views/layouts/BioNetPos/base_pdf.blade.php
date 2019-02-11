<!DOCTYPE html>
<html lang="es">
<head>
  @stack('css')
  <style type="text/css" media="all">
  *{
    font-family: sans-serif;
  }
  html {
    margin: 0;
  }
  body {
    margin: 2mm 2mm 2mm 2mm;
  }
  /*Salto de linea*/
  hr {
    page-break-after: always;
    border: 0;
    margin: 0;
    padding: 0;
  }
  .page-break {
    page-break-after: always;
  }
  /*Salto de linea*/
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }
  a {
    color: #0087C3;
    text-decoration: none;
  }
  table.body, table.table {
    width: 100%;
  }

  table.body th{
    padding: 20px;
    background: #EEEEEE;
    text-align: center;
    border-bottom: 1px solid #FFFFFF;
    white-space: nowrap;
  }

  table.table th {
    background: #194052;
    color: #FFFFFF;
    text-align: center;
    border-bottom: 1px solid #FFFFFF;
    white-space: nowrap;
  }
  </style>
  @yield('css_content')
</head>
<body>
  <table class="body">
    <thead>
      <tr>
        <th><!--img src='/img/logo_business.png' style='width:180px;' /--></th>
        <th>@yield('title','bio-Net')</th>
        <th>{{ date("d-m-Y")}}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="3">
          @yield('content')
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>
