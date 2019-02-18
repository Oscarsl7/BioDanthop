$(function() {
    "use strict";

    $(".preloader").fadeOut();
    // ==============================================================
    // Theme options
    // ==============================================================
    // ==============================================================
    // sidebar-hover
    // ==============================================================

    $(".left-sidebar").hover(
        function() {

            $(".navbar-header").addClass("expand-logo");
            if (!aux)
            {
                 $('#navButtons').css('margin-left', 5);
                $(".sidebartoggler").prop("checked", !1);
                $("#main-wrapper").attr("data-sidebartype", "full");
                $("#user-profile").attr("class", "d-block");

            }

        },
        function() {
            $(".navbar-header").removeClass("expand-logo");

            if(!aux)
            {
                 $('#navButtons').css('margin-left', 170);
                $(".sidebartoggler").prop("checked", !0);
                $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
                $("#user-profile").attr("class", "d-none");

            }
        }
    );
    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").on('click', function() {
        $("#main-wrapper").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("ti-menu");
    });
    $(".nav-lock").on('click', function() {
        $("body").toggleClass("lock-nav");
        $(".nav-lock i").toggleClass("mdi-toggle-switch-off");
        $("body, .page-wrapper").trigger("resize");
    });
    $(".search-box a, .search-box .app-search .srh-btn").on('click', function() {
        $(".app-search").toggle(200);
        $(".app-search input").focus();
    });

    // ==============================================================
    // Right sidebar options
    // ==============================================================
    $(function() {
            $(".service-panel-toggle").on('mouseover', function() {
                $('.customizer').css('display', 'block');


                setTimeout(function() {
                    $(".customizer").addClass('show-service-panel');
                }, 100);
                // setTimeout(function() {
                //     $('.customizer').css('display', 'block');
                // }, 1000);
                // ==============================================================
                // Antiguo metodo para mostar el panel derecho
                // ==============================================================
                //$(".customizer").toggleClass('show-service-panel');

            });
            $('.close').on('click', function() {
                $(".customizer").removeClass('show-service-panel');
                setTimeout(function() {
                    $('.customizer').css('display', 'none');
                }, 300);

            });
        });


    // ==============================================================
    // This is for the floating labels
    // ==============================================================
    $('.floating-labels .form-control').on('focus blur', function(e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

    // ==============================================================
    //tooltip
    // ==============================================================
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    // ==============================================================
    //Popover
    // ==============================================================
    $(function() {
        $('[data-toggle="popover"]').popover()
    })

    // ==============================================================
    // Perfact scrollbar
    // ==============================================================
    $('.message-center, .customizer-body, .scrollable').perfectScrollbar({
        wheelPropagation: !0
    });

    /*var ps = new PerfectScrollbar('.message-body');
    var ps = new PerfectScrollbar('.notifications');
    var ps = new PerfectScrollbar('.scroll-sidebar');
    var ps = new PerfectScrollbar('.customizer-body');*/

    // ==============================================================
    // Resize all elements
    // ==============================================================
    $("body, .page-wrapper").trigger("resize");
    $(".page-wrapper").delay(20).show();
    // ==============================================================
    // To do list
    // ==============================================================
    $(".list-task li label").click(function() {
        $(this).toggleClass("task-done");
    });
    // ==============================================================
    // Collapsable cards
    // ==============================================================
    $('a[data-action="collapse"]').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.card').find('[data-action="collapse"] i').toggleClass('ti-minus ti-plus');
        $(this).closest('.card').children('.card-body').collapse('toggle');
    });
    // Toggle fullscreen
    $('a[data-action="expand"]').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.card').find('[data-action="expand"] i').toggleClass('mdi-arrow-expand mdi-arrow-compress');
        $(this).closest('.card').toggleClass('card-fullscreen');
    });
    // Close Card
    $('a[data-action="close"]').on('click', function() {
        $(this).closest('.card').removeClass().slideUp('fast');
    });
    // ==============================================================
    // LThis is for mega menu
    // ==============================================================
    $(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation()
    });
    // ==============================================================
    // Last month earning
    // ==============================================================
    var sparklineLogin = function() {
        $('.lastmonth').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '35',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#2961ff'
        });

    };
    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();

    // ==============================================================
    // This is for the innerleft sidebar
    // ==============================================================
    $(".show-left-part").on('click', function() {
        $('.left-part').toggleClass('show-panel');
        $('.show-left-part').toggleClass('ti-menu');
    });


    // Disable right click and f12

    $("html").on("contextmenu",function(e){
       return true;
    });
    $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
            return true;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
            return true;
        }
    });


    //Click fuera de la barra derecha
      $(document).on("click",function(e) {

          var container = $(".show-service-panel");

             if (!container.is(e.target) && container.has(e.target).length === 0) {
                  $(".customizer").removeClass('show-service-panel');

                  setTimeout(function() {
                      $('.customizer').css('display', 'none');
                  }, 300);
             }
      });


      //funcion para que muestre el nombre del archivo
      $('.custom-file-input').on('change', function() {
       let fileName = $(this).val().split('\\').pop();
       if(fileName.length > 0)
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        else{
            console.log('entra');
            $(this).next('.custom-file-label').removeClass("selected")}
    });




});
