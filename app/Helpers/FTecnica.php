<?php
//app/Helpers/FTecnica.php
namespace App\Helpers;

use Session;
use Cassandra;

class FTecnica {

  public static function usuario($label, $aDatos = [], $href = "#"){
    $popover = "";
    if($label != ""){
      if(count($aDatos) > 0){
        $ficha = '<div class="row">';
        $ficha .= '<div class="col-md-4">';
        $ficha .= '<img src="' . asset($aDatos["usu_imagen_perfil"]) . '" alt="Usuarios" class="rounded-circle" width="70" />';
        $ficha .= '</div>';
        $ficha .= '<div class="col-md-8">';
        $ficha .= '<label class="control-label">Nombre:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' .
        $aDatos["usu_nombre"] . ' ' . $aDatos["usu_apellido_paterno"] . ' ' . $aDatos["usu_apellido_materno"] .
        '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Teléfono:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . $aDatos["usu_numero_telefono"] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Email:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . $aDatos["usu_correo_electronico"] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Perfil:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . $aDatos["per_nombre"] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Administrador:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . (((bool)$aDatos["usu_administrador"]) ? 'SI' : 'NO') . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Sucursal(es):</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["suc_nombre"] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Código Acceso:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . $aDatos["usu_codigo_acceso"] .'</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Escaneo de Huella Digital:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . (((bool)$aDatos["usu_escaneo_huella_digital"]) ? "SI" : "NO") . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Escaneo Facial:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . (((bool)$aDatos["usu_escaneo_facial"]) ? "SI" : "NO") . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $popover = "<a href='$href'
        data-trigger='hover'
        data-container='body'
        title='Usuario'
        data-toggle='popover'
        data-placement='right'
        data-html='true'
        data-content='$ficha'>
        $label
        </a>";
      }else{
        $popover = $label;
      }
    }
    return $popover;
  }

  public static function cliente($label, $aDatos = [], $href = "#"){
    $popover = "";
    if($label != ""){
      if(count($aDatos) > 0){
        $ficha = '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Nombre:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["cli_nombre"] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Correo Electrónico:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["cli_correo_electronico"] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Teléfono:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["cli_telefono"] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<h6>Dirección</h6>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Calle:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["cli_direccion"]['cli_calle'] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-6">';
        $ficha .= '<label class="control-label">N. Int.:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["cli_direccion"]['cli_numero_interior'] . '</label>';
        $ficha .= '</div>';
        $ficha .= '<div class="col-md-6">';
        $ficha .= '<label class="control-label">N. Ext.:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["cli_direccion"]['cli_numero_exterior'] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-6">';
        $ficha .= '<label class="control-label">Colonia:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["cli_direccion"]['cli_colonia'] . '</label>';
        $ficha .= '</div>';
        $ficha .= '<div class="col-md-6">';
        $ficha .= '<label class="control-label">Ciudad:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["cli_direccion"]['cli_ciudad'] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Código Posta:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . @$aDatos["cli_direccion"]['cli_codigo_postal'] .'</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Estado:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' .@$aDatos["cli_direccion"]['cli_estado'] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<h6>Datos de Facturación</h6>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">RFC:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' .@$aDatos["cli_rfc"] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Razón Social:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' .@$aDatos["cli_razon_social"] . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Mismo email que email personal:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . (((bool)$aDatos["cli_correos_iguales"]) ? 'SI' : 'NO') . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $ficha .= '<div class="row">';
        $ficha .= '<div class="col-md-12">';
        $ficha .= '<label class="control-label">Misma ubicación que dirección personal:</label>';
        $ficha .= '<label class="control-label text-info" >&nbsp' . (((bool)$aDatos["cli_direcciones_iguales"]) ? 'SI' : 'NO') . '</label>';
        $ficha .= '</div>';
        $ficha .= '</div>';

        $popover = "<a href='$href'
        data-trigger='hover'
        data-container='body'
        title='Cliente'
        data-toggle='popover'
        data-placement='right'
        data-html='true'
        data-content='$ficha'>
        $label
        </a>";
      }else{
        $popover = $label;
      }
    }
    return $popover;
  }

}
