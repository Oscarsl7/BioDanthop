<?php
//app/Helpers/Funciones.php
namespace App\Helpers;

use DB;
use \Linq\LinqFactory;
use Session;
use DateTime;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Funciones {

  public static function createUuid($sTexto = "", $tipo = "uuid"){
    $sTexto = (trim($sTexto) == "") ? (microtime(true)) : trim($sTexto);
    $sUuid = "";
    $sUuid = \Uuid::generate(5, $sTexto, \Uuid::NS_DNS);

    if($tipo == "string")
    $sUuid = (string)$sUuid;

    return $sUuid;
  }

  public static function stringToUuid($sUuid = ""){
    if(trim($sUuid) != ""){
      return \Uuid::import($sUuid);
    }else{
      return Funciones::createUuid();
    }
  }

  public static function crearCarpeta($carpeta){
    try{
      $root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
      $dir = $root . $carpeta;
      $old = umask(0);
      if(file_exists($dir) == false) {
        mkdir($dir, 0777, true);
      }
      umask($old);
    } catch (Exception $e) {
      $dir = $root;
      //echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
    return $dir;
  }

  public static function datosColumna($aDatos, $iCols = 0){
    $datos = [];
    $i = 0;
    $ii = 0;

    if($iCols > 0){
      foreach ($aDatos as $key) {
        $datos[$ii][] = $key;
        if($iCols == $i){
          $i = 0;
          $ii++;
        }
        else
        $i++;
      }
    }else{
      $datos = Funciones::datosQuery($aDatos);
    }

    return $datos;
  }

  public static function datosQuery($result){
    $datos = [];
    foreach ($result as $key => $value) {
      array_push($datos, $value);
    }
    return $datos;
  }

  public static function validar($dato, $tipo){
    $ok = false;
    switch ($tipo) {
      case 'vacio':
      if(trim($dato) == ""){
        $ok = true;
      }
      break;
      case 'correo':
      if(preg_match("/[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/", $dato)){
        $ok = true;
      }
      break;
      case 'numero':
      if(preg_match("/^[0-9]+$/", $dato)){
        $ok = true;
      }
      break;
      case 'rfc':
      $rfc_pattern_pm = "^(([A-ZÑ&]{3})([0-9]{2})([0][13578]|[1][02])(([0][1-9]|[12][\\d])|[3][01])([A-Z0-9]{3}))|" +
      "(([A-ZÑ&]{3})([0-9]{2})([0][13456789]|[1][012])(([0][1-9]|[12][\\d])|[3][0])([A-Z0-9]{3}))|" +
      "(([A-ZÑ&]{3})([02468][048]|[13579][26])[0][2]([0][1-9]|[12][\\d])([A-Z0-9]{3}))|" +
      "(([A-ZÑ&]{3})([0-9]{2})[0][2]([0][1-9]|[1][0-9]|[2][0-8])([A-Z0-9]{3}))$";

      $rfc_pattern_pf = "^(([A-ZÑ&]{4})([0-9]{2})([0][13578]|[1][02])(([0][1-9]|[12][\\d])|[3][01])([A-Z0-9]{3}))|" +
      "(([A-ZÑ&]{4})([0-9]{2})([0][13456789]|[1][012])(([0][1-9]|[12][\\d])|[3][0])([A-Z0-9]{3}))|" +
      "(([A-ZÑ&]{4})([02468][048]|[13579][26])[0][2]([0][1-9]|[12][\\d])([A-Z0-9]{3}))|" +
      "(([A-ZÑ&]{4})([0-9]{2})[0][2]([0][1-9]|[1][0-9]|[2][0-8])([A-Z0-9]{3}))$";
      if(preg_match($rfc_pattern_pm, $dato)){
        $ok = true;
      }
      if(preg_match($rfc_pattern_pf, $dato)){
        $ok = true;
      }
      break;
      case 'url':
      if(preg_match("/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g", $dato)){
        $ok = true;
      }
      break;
      case 'hora':
      if(preg_match("^([01]?[0-9]|2[0-3]):[0-5][0-9]$", $dato)){
        $ok = true;
      }
      break;
    }
    return $ok;
  }
  public static function urlAmigable($sCadena){
    $sCadena = Funciones::sanearString($sCadena);
    $sCadena = str_ireplace(" ","-", $sCadena);
    $sCadena = strtolower($sCadena);
    return $sCadena;
  }

  public static function sanearString($sCadena)
  {
    $sCadena = trim($sCadena);

    $sCadena = str_replace(
      array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
      array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
      $sCadena
    );

    $sCadena = str_replace(
      array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
      array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
      $sCadena
    );

    $sCadena = str_replace(
      array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
      array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
      $sCadena
    );

    $sCadena = str_replace(
      array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
      array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
      $sCadena
    );

    $sCadena = str_replace(
      array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
      array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
      $sCadena
    );

    $sCadena = str_replace(
      array('ñ', 'Ñ', 'ç', 'Ç'),
      array('n', 'N', 'c', 'C',),
      $sCadena
    );

    //Esta parte se encarga de eliminar cualquier caracter extraño
    $sCadena = str_replace(
      array("¨", "º", "-", "~",
      "#", "@", "|", "!", '"',
      "·", "$", "%", "&", "/",
      "(", ")", "?", "'", "¡",
      "¿", "[", "^", "<code>", "]",
      "+", "}", "{", "¨", "´",
        ">", "< ", ";", ",", ":",
        "."),
        '',
        $sCadena
      );

      $sCadena = str_ireplace("\\",'', $sCadena);

      return $sCadena;
    }

    public static function sessionActiva($iIdUsuario){
      if($iIdUsuario != ""){
        return true;
      }else{
        return false;
      }
    }

    public static function enviarCorreo(
      $asCorreo = ["sDe" => "equipo@bionet.com", "sPara"=> "", "sCc"=> "", "sAsunto"=> "", "sMensaje"=> "", "asAddAttachment" => array(), "sNombreNegocio" => ""],
      $asServidor = ['sSrvSMTP' => "", "sPuertoSMTP" => "", "sSMTPSecure" => "tls", "sUsuario" => "", "sContrasenia" => ""]
    ){
      try {
        if(@$asServidor['sSrvSMTP'] != "" &&
        @$asServidor['sPuertoSMTP'] != "" &&
        @$asServidor['sUsuario'] != "" &&
        @$asServidor['sContrasenia'] != ""){
          $resultado = Funciones::ejecutarPHPMailer($asCorreo, $asServidor);
        }else{
          $resultado = Funciones::ejecutarMail($asCorreo);
        }
      } catch (Exception $exception) {
        $resultado = false;
      }
      return $resultado;
    }

    public static function ejecutarMail($asCorreo){
      try {
        //enviar correo
        $sMensaje = Funciones::templateCorreo(@$asCorreo['sMensaje']);

        //dirección del remitente
        @$headers .= "From: " . @$asCorreo['sNombreNegocio'] ." [BioNet] <".@$asCorreo['sDe'].">\r\n";
        if(@$asCorreo['sCc'] != ""){
          @$headers .= "Cc: " . @$asCorreo['sCc'] . "\r\n";
        }

        if(count(@$asCorreo['asAddAttachment']) > 0){
          // boundary
          $semi_rand = md5(time());
          $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

          // headers for attachment
          @$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

          // multipart boundary
          $sMensaje = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
          "Content-Transfer-Encoding: 7bit\n\n" . $sMensaje . "\n\n";

          foreach (@$asCorreo['asAddAttachment'] as $key => $value) {
            $sArchivo = $value['sArchivo'];
            $sNombre = (isset($value['sNombre']) && $value['sNombre'] != "") ? $value['sNombre'] : basename($sArchivo);
            if(is_file($sArchivo)){
              $sMensaje .= "--{$mime_boundary}\n";
              $fp =    @fopen($sArchivo,"rb");
              $data =  @fread($fp,filesize($sArchivo));

              @fclose($fp);
              $data = chunk_split(base64_encode($data));
              $sMensaje .= "Content-Type: application/octet-stream; name=\"".$sNombre."\"\n" .
              "Content-Description: ".basename($sArchivo)."\n" .
              "Content-Disposition: attachment;\n" . " filename=\"".$sNombre."\"; size=".filesize($sArchivo).";\n" .
              "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
          }

          $sMensaje .= "--{$mime_boundary}--";
          $returnpath = "-f" . @$asCorreo['sDe'];

          //Enviamos el mensaje y archivos
          if (mail(@$asCorreo['sPara'], @$asCorreo['sAsunto'], $sMensaje, @$headers, $returnpath)) {
            $resultado = true;
          } else {
            $resultado = false;
          }

        }else{
          //cabecera
          @$headers = "MIME-Version: 1.0\r\n";
          @$headers .= "Content-type: text/html; charset=utf-8\r\n";

          //Enviamos el mensaje a tu_dirección_email
          if (mail(@$asCorreo['sPara'], @$asCorreo['sAsunto'], $sMensaje, @$headers)) {
            $resultado = true;
          } else {
            $resultado = false;
          }
        }

      } catch (Exception $exception) {
        $resultado = false;
      }

      return $resultado;
    }

    public static function ejecutarPHPMailer($asCorreo, $asServidor){
      try {
        $sMensaje = Funciones::templateCorreo(@$asCorreo['sMensaje']);
        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = 0;                               // Enable verbose debug output
        $mail->isSMTP();                                    // Set mailer to use SMTP
        $mail->Host = @$asServidor['sSrvSMTP'];              // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                             // Enable SMTP authentication
        $mail->Username = @$asCorreo['sDe'];                // SMTP username @$asServidor['sUsuario'];
        $mail->Password = @$asServidor['sContrasenia'];      // SMTP password
        $mail->SMTPSecure = @$asServidor['sSMTPSecure'];     // Enable TLS encryption, `ssl` also accepted
        $mail->Port = @$asServidor['sPuertoSMTP'];           // TCP port to connect to

        //Recipients
        $mail->setFrom(@$asServidor['sUsuario'], @$asCorreo['sNombreNegocio'] . " [BioNet]");

        $mail->addAddress(@$asCorreo['sPara']);              // Add a recipient $mail->addAddress($para, $nombreOpcional)

        if(@$asCorreo['sCc'] != ""){
          $mail->addCC(@$asCorreo['sCc']);
        }

        if(count(@$asCorreo['asAddAttachment']) > 0){
          foreach (@$asCorreo['asAddAttachment'] as $key => $value) {
            if(is_file($value['sArchivo'])){
              $sNombre = (isset($value['sNombre']) && $value['sNombre'] != "") ? $value['sNombre'] : basename($sArchivo);
              $mail->addAttachment($value['sArchivo'], $sNombre);  //Add attachments $mail->addAttachment($rutaArchivo, $nombreOpcional)
            }
          }
        }

        //Content
        $mail->isHTML(true);                                // Set email format to HTML
        $mail->Subject = @$asCorreo['sAsunto'];
        $mail->Body = $sMensaje;
        //dd($mail);
        if($mail->send()){
          $resultado = true;
        }else{
          $resultado = Funciones::ejecutarMail($asCorreo);
        }

      } catch (Exception $exception) {
        $resultado = Funciones::ejecutarMail($asCorreo);
      }
      return $resultado;
    }

    public static function templateCorreo($sMensaje){
      return "<p>" . $sMensaje . "</p>";
    }

    public static function usuarioDisponible($usu_correo_electronico)
    {
      $bd = Session::has('BD') ? Session::get('BD') : 'bionet_pro';

      $bDisponible = false;
      $aUsuarios = DB::table($bd .'.'.'usuarios')
      ->where('usu_correo_electronico', $usu_correo_electronico)
      ->get();
      $rowUsuarios = Funciones::datosQuery($aUsuarios);
      if (count($rowUsuarios) == 0){
        $bDisponible = true;
      }else{
        $bDisponible = false;
      }
      return $bDisponible;
    }
    public static function encripta($pass)
    {
      $opciones = [
        'cost' => 12,
      ];
      return password_hash($pass, PASSWORD_BCRYPT, $opciones);
    }
    public static function getEstatus($estatus, $tabla)
    {
      $est_id = "";
      $estatus = trim(strtolower($estatus));
      $tabla = trim(strtolower($tabla));
      $aEstatus = DB::table('bionet_sistema.estatus')
      ->where('est_nombre', $estatus)
      ->where('est_tabla', $tabla)
      ->where('est_activo', true)
      ->get();
      $rowEstatus = Funciones::datosQuery($aEstatus);
      if (count($rowEstatus) == 0){
        $est_id = Funciones::createUuid($tabla . "-" . microtime(true));
        $aEstatus = [
          'est_id' => $est_id,
          'est_nombre' => $estatus,
          'est_tabla' => $tabla,
          'est_activo' => 'true',
          'est_fecha_hora_creo' => date("Y-m-d H:i:s"),
          'est_fecha_hora_modifico' => date("Y-m-d H:i:s")
        ];
        $result = DB::table('bionet_sistema.estatus')->insert($aEstatus);
      }else{
        $est_id = $rowEstatus[0]['est_id'];
      }
      return $est_id;
    }

    public static function getDateTimeStamp($fecha, $formato = 'Y-m-d H:i:s'){
      $timeStamp = json_decode(json_encode($fecha), true)['seconds'];//(string)$fecha;
      $date = new DateTime();
      $date->setTimestamp($timeStamp);
      return $date->format($formato);
    }

    public static function addDay($timeStamp, $dias = 1, $formato = 'Y-m-d H:i:s'){
      $timeStamp = json_decode(json_encode($timeStamp), true)['seconds'];//(string)$fecha;
      $nuevafecha = strtotime ( "+$dias day" , $timeStamp ) ;
      return date ( $formato , $nuevafecha );
    }

    public static function template_pdf($titulo, $contenido){
      $html = "<html>";
      $html .= "<head>";
      $html .= "</head>";
      $html .= "<body>";
      $html .= "<table>";
      $html .= "<thead>";
      $html .= "<tr>";
      $html .= "<th style='width:180px;'>  <img src='" . asset('img/logo_business.png') . "' style='width:180px;' alt='homepage' /></th>";
      $html .= "<th>";
      $html .= ($titulo == "" ? "bio-Net": $titulo);
      $html .= "</th>";
      $html .= "<th style='width:120px;''>" . date("d-m-Y") . "</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      $html .= "<tbody>";
      $html .= "<tr>";
      $html .= "<td colspan='3'>";
      $html .= $contenido;
      $html .= "</td>";
      $html .= "</tr>";
      $html .= "</tbody>";
      $html .= "</table>";
      $html .= "</body>";
      $html .= "</html>";
      return $html;
    }
  }
