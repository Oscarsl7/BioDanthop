
//****************************
// Tablas
//****************************
var aux =true;
var DataTables = function (tabla) {
  "use strict";
  if ($(tabla).length !== 0) {
    $(tabla).DataTable({
      lengthMenu: [[-1,20, 40, 60],["Todos","20","40","60"]],
      fixedHeader: {
        header: true,
        headerOffset: $('#header').height()
      },
      responsive: true,
      //lengthMenu: [[-1, 10, 25, 50], ["Todos", "10", "25", "50"]],
      autoWidth: !1,
      processing: true,
      language: {
        lengthMenu: "Mostrar _MENU_ ",
        info: "Mostrando pagina _PAGE_ de _PAGES_",
        zeroRecords: "No se encontraron Registros",
        infoEmpty: "No hay registros para mostrar.",
        infoFiltered: "(TOTAL Registros de MAX)",
        search: "Buscar:",
        processing: "Cargando Información",
        decimal: ".",
        thousands: ",",
        paginate: {
          first: "Primera Página",
          last: "Ultima Página",
          next: "Siguiente",
          sPrevious: "Anterior"
        }
      }
    });
  }
}

var modal = {
  error: function (mensaje, asError){
    let ModalTitulo = Handlebars.compile($("#modal-titulo").html());
    let ModalMensajeLista = Handlebars.compile($("#modal-mensaje-lista-error").html());
    let ModalBotones = Handlebars.compile($("#modal-botones").html());
    $(".layout-modal").removeAttr("data-modal-color").attr("data-modal-color", "red");

    $(".layout-modal").modal({
      show: true,
      keyboard: false,
      backdrop: "static"
    });
    $(".layout-modal div.modal-dialog").removeClass().addClass("modal-dialog");//modal-lg, modal-sm
    $('#modal-title').empty().append(ModalTitulo({ titulo: 'Alerta' }));
    $('#modal-contenido').empty().append(ModalMensajeLista({'mensaje': mensaje, 'asError': asError }));
    $('#modal-footer').empty().append(ModalBotones());
  },
  success: function (mensaje){
    let ModalTitulo = Handlebars.compile($("#modal-titulo").html());
    let ModalMensajeLista = Handlebars.compile($("#modal-mensaje-success").html());
    let ModalBotones = Handlebars.compile($("#modal-botones").html());
    $(".layout-modal").removeAttr("data-modal-color").attr("data-modal-color", "green");

    $(".layout-modal").modal({
      show: true,
      keyboard: false,
      backdrop: "static"
    });

    $(".layout-modal div.modal-dialog").removeClass().addClass("modal-dialog modal-sm");//modal-lg, modal-sm
    $('#modal-title').empty().append(ModalTitulo({ titulo: '' }));
    $('#modal-contenido').empty().append(ModalMensajeLista({'mensaje': mensaje }));
    $('#modal-footer').empty().append({'':''});
  },
  end_success: function (sMensaje, iEstatus, asMensajeError, sRecargaUrl){
    var modals = this;
    modals.close("-preloader");
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
    if(iEstatus === 1){
      $(".layout-modal-preloader").hide(function () {
        $(".layout-modal, .layout-modal-preloader").modal("hide");
        setTimeout(function (){
          modals.success(sMensaje);
          var width = 0;//parseInt($("#progress-time")[0].style.width)-1;
          setInterval(function(){
            $("#progress-time").css("width", width+"%");
            if(width === 100){
              if(sRecargaUrl !== ""){
                window.location.href = sRecargaUrl;
              }
            }
            width++;
          }, 10);
        },400);
      });
    }else{
      modals.error(sMensaje, asMensajeError);
      return false
    }
  },
  end_error: function (sMensaje, asMensajeError){
    var modale = this;
    modale.close("-preloader");
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
    $(".layout-modal-preloader").hide(function () {
      $(".layout-modal, .layout-modal-preloader").modal("hide");
      modale.error(sMensaje, asMensajeError);
    });
  },
  preloader: function(){
    var modalp = this;
    modalp.close();

    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
    $(".layout-modal").hide(function () {
      $(".layout-modal-preloader").modal({
        show: true,
        keyboard: false,
        backdrop: "static"
      });
    });
  },
  close: function (es){
    $(".layout-modal" + es).modal("hide");

    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
  }
};

var validar = {
  vacio: function (valor){
    valor = (valor + "").toString();
    var ok = true;
    if (valor === null || valor === 'null' || valor === '' || valor === 'undefined' || valor.length === 0 || /^\s+$/.test(valor)) {
      ok = true;
    } else {
      ok = false;
    }
    return ok;
  },
  correo: function (email){
    var ok = false;
    var femail = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    if (femail.test(email)) {
      ok = true;
    }
    return ok;
  },
  numero: function (numero){
    var ok = false;
    if(numero === "" || numero === true)
    ok = false;
    else
    ok = (isNaN(numero) === false) ?  true : false;
    return ok;
  },
  usuarioDisponible: function (usu_correo_electronico){
    var ok = false;
    return ok;
  },
  soloNumeros: function (e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46))
    return true;

    return /\d/.test(String.fromCharCode(keynum));
  },
  url: function (url) {
    var ok = false;
    var res = url.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
    if (res == null)
    ok = false;
    else
    ok = true;

    return ok;
  },
  rfc: function (rfc){
    rfc = rfc.toUpperCase();
    var ok = false;
    // patron del RFC, persona moral
    var rfc_pattern_pm = "^(([A-ZÑ&]{3})([0-9]{2})([0][13578]|[1][02])(([0][1-9]|[12][\\d])|[3][01])([A-Z0-9]{3}))|" +
    "(([A-ZÑ&]{3})([0-9]{2})([0][13456789]|[1][012])(([0][1-9]|[12][\\d])|[3][0])([A-Z0-9]{3}))|" +
    "(([A-ZÑ&]{3})([02468][048]|[13579][26])[0][2]([0][1-9]|[12][\\d])([A-Z0-9]{3}))|" +
    "(([A-ZÑ&]{3})([0-9]{2})[0][2]([0][1-9]|[1][0-9]|[2][0-8])([A-Z0-9]{3}))$";
    // patron del RFC, persona fisica
    var rfc_pattern_pf = "^(([A-ZÑ&]{4})([0-9]{2})([0][13578]|[1][02])(([0][1-9]|[12][\\d])|[3][01])([A-Z0-9]{3}))|" +
    "(([A-ZÑ&]{4})([0-9]{2})([0][13456789]|[1][012])(([0][1-9]|[12][\\d])|[3][0])([A-Z0-9]{3}))|" +
    "(([A-ZÑ&]{4})([02468][048]|[13579][26])[0][2]([0][1-9]|[12][\\d])([A-Z0-9]{3}))|" +
    "(([A-ZÑ&]{4})([0-9]{2})[0][2]([0][1-9]|[1][0-9]|[2][0-8])([A-Z0-9]{3}))$";

    if (rfc.match(rfc_pattern_pm) || rfc.match(rfc_pattern_pf))
    ok = true;
    else
    ok = false;

    return ok;
  },
  hora: function (hora){

    var ok = false;
    var formato_hora = "^([01]?[0-9]|2[0-3]):[0-5][0-9]$";

    if (hora.match(formato_hora))
    ok = true;
    else
    ok = false;

    return ok;
  }
};

function primeraLetraMayuscula(cadena){
  var a = cadena.split(" ");
  var b="";
  for (n in a) {
    b+=" "+a[n].substr(0,1).toUpperCase()+a[n].substr(1).toLowerCase();
  }
  return b;
}

function padl(n, length) {
  n = n.toString();
  while (n.length < length)
  n = "0" + n;
  return n;
}

function padr(n, length) {
  n = n.toString();
  while (n.length < length)
  n = n + "0";
  return n;
}

// Admin Panel settings
$.fn.AdminSettings = function (settings) {
  var myid = this.attr("id");
  // General option for vertical header
  var defaults = {
    Theme: true, // this can be true or false ( true means dark and false means light ),
    Layout: 'vertical', //
    LogoBg: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
    NavbarBg: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
    SidebarType: 'full', // You can change it full / mini-sidebar
    SidebarColor: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
    SidebarPosition: false, // it can be true / false
    HeaderPosition: false, // it can be true / false
    BoxedLayout: false, // it can be true / false
  };
  var settings = $.extend({}, defaults, settings);
  // Attribute functions
  var AdminSettings = {
    // Settings INIT
    AdminSettingsInit: function () {
      AdminSettings.ManageTheme();
      AdminSettings.ManageThemeLayout();
      AdminSettings.ManageThemeBackground();
      AdminSettings.ManageSidebarType();
      AdminSettings.ManageSidebarColor();
      AdminSettings.ManageSidebarPosition();
      AdminSettings.ManageBoxedLayout();
    }
    , //****************************
    // ManageThemeLayout functions
    //****************************
    ManageTheme: function () {
      var themeview = settings.Theme;
      switch (settings.Layout) {
        case 'vertical':
        if (themeview == true) {
          $('body').attr("data-theme", 'dark');
          $("#theme-view").prop("checked", !0);
        }
        else {
          $('#' + myid).attr("data-theme", 'mini-sidebar');
          $("body").prop("checked", !1);
        }
        break;

        default:
      }
    }
    , //****************************
    // ManageThemeLayout functions
    //****************************
    ManageThemeLayout: function () {
      switch (settings.Layout) {
        case 'horizontal':
        $('#' + myid).attr("data-layout", "horizontal");
        break;
        case 'vertical':
        $('#' + myid).attr("data-layout", "vertical");
        $('.scroll-sidebar').perfectScrollbar({ });
        break;
        default:
      }
    }
    , //****************************
    // ManageSidebarType functions
    //****************************
    ManageThemeBackground: function () {
      // Logo bg attribute
      /*function setlogobg() {
      var lbg = settings.LogoBg;
      if (lbg != undefined && lbg != "") {
      $('#' + myid + ' .topbar .top-navbar .navbar-header').attr("data-logobg", lbg);
    }
    else {
    $('#' + myid + ' .topbar .top-navbar .navbar-header').attr("data-logobg", "skin1");
  }
};
setlogobg();*/
// Navbar bg attribute
/*function setnavbarbg() {
var nbg = settings.NavbarBg;
if (nbg != undefined && nbg != "") {
$('#' + myid + ' .topbar .navbar-collapse').attr("data-navbarbg", nbg);
$('#' + myid + ' .topbar').attr("data-navbarbg", nbg);
$('#' + myid).attr("data-navbarbg", nbg);
}
else {
$('#' + myid + ' .topbar .navbar-collapse').attr("data-navbarbg", "skin1");
$('#' + myid + ' .topbar').attr("data-navbarbg", "skin1");
$('#' + myid).attr("data-navbarbg", "skin1");
}
};
setnavbarbg();*/
}
, //****************************
// ManageThemeLayout functions
//****************************
ManageSidebarType: function () {
  switch (settings.SidebarType) {
    //****************************
    // If the sidebar type has full
    //****************************
    case 'full':
    $('#' + myid).attr("data-sidebartype", "full");
    //****************************
    /* This is for the mini-sidebar if width is less then 1170*/
    //****************************
    var setsidebartype = function () {

      var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
      if (width < 1170) {
        $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
      }
      else {
        $("#main-wrapper").attr("data-sidebartype", "full");
      }
       $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
    };
    $(window).ready(setsidebartype);
    $(window).on("resize", setsidebartype);
    //****************************
    /* This is for sidebartoggler*/
    //****************************
    $('.sidebartoggler').on("click", function () {
      $("#main-wrapper").toggleClass("mini-sidebar");
      aux = !aux;
      if ($("#main-wrapper").hasClass("mini-sidebar")) {
        //$(".sidebartoggler").prop("checked", !0);
        //$("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
      }
      else {
        $("#user-profile").attr("class", "d-block");

        $(".sidebartoggler").prop("checked", !1);
        $("#main-wrapper").attr("data-sidebartype", "full");
      }
    });
    break;
    //****************************
    // If the sidebar type has mini-sidebar
    //****************************
    case 'mini-sidebar':
    $('#' + myid).attr("data-sidebartype", "mini-sidebar");
    //****************************
    /* This is for sidebartoggler*/
    //****************************
    $('.sidebartoggler').on("click", function () {
      console.log('segundo console');

      $("#main-wrapper").toggleClass("mini-sidebar");
      if ($("#main-wrapper").hasClass("mini-sidebar")) {
        $(".sidebartoggler").prop("checked", !0);
        $("#main-wrapper").attr("data-sidebartype", "full");
      }
      else {
        $(".sidebartoggler").prop("checked", !1);
        $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
      }
    });
    break;
    //****************************
    // If the sidebar type has iconbar
    //****************************
    case 'iconbar':
    $('#' + myid).attr("data-sidebartype", "iconbar");
    //****************************
    /* This is for the mini-sidebar if width is less then 1170*/
    //****************************
    var setsidebartype = function () {
      var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
      if (width < 1170) {
        $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
        $("#main-wrapper").addClass("mini-sidebar");
      }
      else {
        $("#main-wrapper").attr("data-sidebartype", "iconbar");
        $("#main-wrapper").removeClass("mini-sidebar");
      }

    };
    $(window).ready(setsidebartype);
    $(window).on("resize", setsidebartype);
    //****************************
    /* This is for sidebartoggler*/
    //****************************
    $('.sidebartoggler').on("click", function () {
      console.log('tercer console');

      $("#main-wrapper").toggleClass("mini-sidebar");
      if ($("#main-wrapper").hasClass("mini-sidebar")) {
        $(".sidebartoggler").prop("checked", !0);
        $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
      }
      else {
        $(".sidebartoggler").prop("checked", !1);
        $("#main-wrapper").attr("data-sidebartype", "iconbar");
      }
    });
    break;
    //****************************
    // If the sidebar type has overlay
    //****************************
    case 'overlay':
    $('#' + myid).attr("data-sidebartype", "overlay");
    var setsidebartype = function () {
      var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
      if (width < 767) {
        $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
        $("#main-wrapper").addClass("mini-sidebar");
      }
      else {
        $("#main-wrapper").attr("data-sidebartype", "overlay");
        $("#main-wrapper").removeClass("mini-sidebar");
      }
    };
    $(window).ready(setsidebartype);
    $(window).on("resize", setsidebartype);
    //****************************
    /* This is for sidebartoggler*/
    //****************************
    $('.sidebartoggler').on("click", function () {
      console.log('primer console');

      $("#main-wrapper").toggleClass("show-sidebar");
      if ($("#main-wrapper").hasClass("show-sidebar")) {
        //$(".sidebartoggler").prop("checked", !0);
        //$("#main-wrapper").attr("data-sidebartype","mini-sidebar");
      }
      else {
        //$(".sidebartoggler").prop("checked", !1);
        //$("#main-wrapper").attr("data-sidebartype","iconbar");
      }
    });
    break;
    default:
  }
}
, //****************************
// ManageSidebarColor functions
//****************************
ManageSidebarColor: function () {
  // Logo bg attribute
  /*function setsidebarbg() {
  var sbg = settings.SidebarColor;
  if (sbg != undefined && sbg != "") {
  $('#' + myid + ' .left-sidebar').attr("data-sidebarbg", sbg);
} else {
$('#' + myid + ' .left-sidebar').attr("data-sidebarbg", "skin1");
}
};
setsidebarbg();*/
}
, //****************************
// ManageSidebarPosition functions
//****************************
ManageSidebarPosition: function () {
  var sidebarposition = settings.SidebarPosition;
  var headerposition = settings.HeaderPosition;
  switch (settings.Layout) {
    case 'vertical':
    if (sidebarposition == true) {
      $('#' + myid).attr("data-sidebar-position", 'fixed');
      $("#sidebar-position").prop("checked", !0);
    }
    else {
      $('#' + myid).attr("data-sidebar-position", 'absolute');
      $("#sidebar-position").prop("checked", !1);
    }
    if (headerposition == true) {
      $('#' + myid).attr("data-header-position", 'fixed');
      $("#header-position").prop("checked", !0);
    }
    else {
      $('#' + myid).attr("data-header-position", 'relative');
      $("#header-position").prop("checked", !1);
    }
    break;
    default:
  }
}
, //****************************
// ManageBoxedLayout functions
//****************************
ManageBoxedLayout: function () {
  var boxedlayout = settings.BoxedLayout;
  switch (settings.Layout) {
    case 'vertical':
    if (boxedlayout == true) {
      $('#' + myid).attr("data-boxed-layout", 'boxed');
      $("#boxed-layout").prop("checked", !0);
    }
    else {
      $('#' + myid).attr("data-boxed-layout", 'full');
      $("#boxed-layout").prop("checked", !1);
    }
    break;
    case 'horizontal':
    if (boxedlayout == true) {
      $('#' + myid).attr("data-boxed-layout", 'boxed');
      $("#boxed-layout").prop("checked", !0);
    }
    else {
      $('#' + myid).attr("data-boxed-layout", 'full');
      $("#boxed-layout").prop("checked", !1);
    }
    break;
    default:
  }
}
, };
AdminSettings.AdminSettingsInit();
};
//****************************
// This is for the chat customizer setting
//****************************
$(function () {
  var chatarea = $("#chat");
  $('#chat .message-center a').on('click', function () {
    var name = $(this).find(".mail-contnet h5").text();
    var img = $(this).find(".user-img img").attr("src");
    var id = $(this).attr("data-user-id");
    var status = $(this).find(".profile-status").attr("data-status");
    if ($(this).hasClass("active")) {
      $(this).toggleClass("active");
      $(".chat-windows #user-chat" + id).hide();
    }
    else {
      $(this).toggleClass("active");
      if ($(".chat-windows #user-chat" + id).length) {
        $(".chat-windows #user-chat" + id).removeClass("mini-chat").show();
      }
      else {
        var msg = msg_receive('I watched the storm, so beautiful yet terrific.');
        msg += msg_sent('That is very deep indeed!');
        var html = "<div class='user-chat' id='user-chat" + id + "' data-user-id='" + id + "'>";
        html += "<div class='chat-head'><img src='" + img + "' data-user-id='" + id + "'><span class='status " + status + "'></span><span class='name'>" + name + "</span><span class='opts'><i class='ti-close closeit' data-user-id='" + id + "'></i><i class='ti-minus mini-chat' data-user-id='" + id + "'></i></span></div>";
        html += "<div class='chat-body'><ul class='chat-list'>" + msg + "</ul></div>";
        html += "<div class='chat-footer'><input type='text' data-user-id='" + id + "' placeholder='Type & Enter' class='form-control'></div>";
        html += "</div>";
        $(".chat-windows").append(html);
      }
    }
  });
  $(document).on('click', ".chat-windows .user-chat .chat-head .closeit", function (e) {
    var id = $(this).attr("data-user-id");
    $(".chat-windows #user-chat" + id).hide();
    $("#chat .message-center .user-info#chat_user_" + id).removeClass("active");
  });
  $(document).on('click', ".chat-windows .user-chat .chat-head img, .chat-windows .user-chat .chat-head .mini-chat", function (e) {
    var id = $(this).attr("data-user-id");
    if (!$(".chat-windows #user-chat" + id).hasClass("mini-chat")) {
      $(".chat-windows #user-chat" + id).addClass("mini-chat");
    }
    else {
      $(".chat-windows #user-chat" + id).removeClass("mini-chat");
    }
  });
  $(document).on('keypress', ".chat-windows .user-chat .chat-footer input", function (e) {
    if (e.keyCode == 13) {
      var id = $(this).attr("data-user-id");
      var msg = $(this).val();
      msg = msg_sent(msg);
      $(".chat-windows #user-chat" + id + " .chat-body .chat-list").append(msg);
      $(this).val("");
      $(this).focus();
    }
    $(".chat-windows #user-chat" + id + " .chat-body").perfectScrollbar({
      suppressScrollX: true
    });
  });
  $(".page-wrapper").on('click', function (e) {
    $('.chat-windows').addClass('hide-chat');
    $('.chat-windows').removeClass('show-chat');
  });
  $(".service-panel-toggle").on('click', function (e) {
    $('.chat-windows').addClass('show-chat');
    $('.chat-windows').removeClass('hide-chat');
  });
});

function msg_receive(msg) {
  var d = new Date();
  var h = d.getHours();
  var m = d.getMinutes();
  return "<li class='msg_receive'><div class='chat-content'><div class='box bg-light-info'>" + msg + "</div></div><div class='chat-time'>" + h + ":" + m + "</div></li>";
}

function msg_sent(msg) {
  var d = new Date();
  var h = d.getHours();
  var m = d.getMinutes();
  return "<li class='odd msg_sent'><div class='chat-content'><div class='box bg-light-info'>" + msg + "</div><br></div><div class='chat-time'>" + h + ":" + m + "</div></li>";
}

function generate_token(length) {
  //edit the token allowed characters
  //var a = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890".split("");
  var a = "1234567890".split("");
  var b = [];
  for (var i = 0; i < length; i++) {
    var j = (Math.random() * (a.length - 1)).toFixed(0);
    b[i] = a[j];
  }
  return b.join("");
}

String.prototype.bool = function() {
  switch(this.toLowerCase().trim()){
    case "true": case "yes": case "1": return true;
    case "false": case "no": case "0": case "": case null: return false;
    default: return Boolean(string);
  }
};
function StrToJSON(strJson) {
  var JsonStr = [];
  try {
    JsonStr = JSON.parse(strJson);
  } catch (e) {
    try {
      var gJson = JSON.stringify(eval('(' + strJson + ')'));
      var JSONObj=JSON.parse(gJson);
      JsonStr = JSONObj;
    } catch (e) {
      try {
        JsonStr = JSONize(strJson);
      } catch (e) {
        try {
          JsonStr = JSON.parse(JSONize(strJson))
        } catch (e) {
          var errorString= strJson;
          var jsonValidString = JSON.stringify(eval("(" + errorString+ ")"));
          var JSONObj=JSON.parse(jsonValidString);
          JsonStr = JSONObj;
        }
      }
    }
  }
  return JsonStr;
}

function JSONize(str) {
  return str
  // wrap keys without quote with valid double quote
  .replace(/([\$\w]+)\s*:/g, function(_, $1){return '"'+$1+'":'})
  // replacing single quote wrapped ones to double quote
  .replace(/'([^']+)'/g, function(_, $1){return '"'+$1+'"'})
}

Array.prototype.unique=function(a){
  return function(){return this.filter(a)}}(function(a,b,c){return c.indexOf(a,b+1)<0
  });
  $("#main-wrapper").addClass("mini-sidebar");
