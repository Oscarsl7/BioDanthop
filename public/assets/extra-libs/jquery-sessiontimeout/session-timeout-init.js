var SessionTimeout = function() {
    var i = function() {
        $.sessionTimeout({
            title: "Sessión Finalizada",
            message: "Tu sessión a finalizado.",
            redirUrl: "authentication-lockscreen.html",
            logoutUrl: "authentication-login1.html",
            warnAfter: 5e3,
            redirAfter: 2e4,
            ignoreUserActivity: !0,
            countdownMessage: "Redireccionar al login en {timer} segundos.", countdownBar: !0
        })
        };
        return {
            init: function() {
                i()
            }
        }
    }();
$(function() {
    SessionTimeout.init()
});
