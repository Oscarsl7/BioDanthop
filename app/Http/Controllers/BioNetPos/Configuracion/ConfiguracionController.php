<?php

namespace App\Http\Controllers\BioNetPos\Configuracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Funciones;
use Session;
use DB;
use DateTime;

class ConfiguracionController extends Controller
{
  var $linq;
  var $id_cuenta_bionet;
  var $sucursales_usuario;
  var $usu_id;
  var $asMenuConfiguracion;

  public function template(){
    $asSubMenu = [
      ['sId' => 'btnCrear',
      'sNombre' => 'Crear',
      'sIcono' => 'fas fa-plus',
      'sClase' => 'btn btn-success',
      'sHref' => asset('template/crear/'),
      'asData' => []]
    ];
    return view('BioNetPos.views.Clientes.index',
    ['esLogIn' => false,
    'aDatos' => [],
    'sTitlePage' => 'Template',
    'asSubMenu' => $asSubMenu,
    'asMenuTitulo' => []]);
  }

  public function ver(){
    $asSubMenu = [
      ['sId' => 'btnRegresar',
      'sNombre' => 'Regresar',
      'sIcono' => 'fa fa-long-arrow-alt-left',
      'sClase' => 'btn btn-warning',
      'sHref' => asset('/template'),
      'asData' => []],
      ['sId' => 'btnEditar',
      'sNombre' => 'Editar',
      'sIcono' => 'fas fa-edit',
      'sClase' => 'btn btn-success',
      'sHref' => asset('/template/crear/'),
      'asData' => []]
    ];
    return view('BioNetPos.views.Clientes.ver',
    ['esLogIn' => false,
    'aDatos' => [],
    'sTitlePage' => 'Template',
    'asSubMenu' => $asSubMenu,
    'asMenuTitulo' => []]);
  }
  public function crear(){
    $asSubMenu = [
      ['sId' => 'btnCancelar',
      'sNombre' => 'Cancelar',
      'sIcono' => 'fas fa-ban',
      'sClase' => 'btn btn-warning',
      'sHref' => asset('/template'),
      'asData' => []],
      ['sId' => 'btnGuardar',
      'sNombre' => 'Guardar',
      'sIcono' => 'fas fa-save',
      'sClase' => 'btn btn-success',
      'sHref' => asset('/template'),
      'asData' => []]
    ];
  return view('BioNetPos.views.Clientes.crear',
  ['esLogIn' => false,
  'aDatos' => [],
  'sTitlePage' => 'Template',
  'asSubMenu' => $asSubMenu,
  'asMenuTitulo' => []]);

  }
}
