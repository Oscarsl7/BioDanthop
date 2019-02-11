<?php

namespace App\Http\Middleware;

use Closure;

use App\Helpers\Funciones;
use DB;
use Session;
use DateTime;

class ValidarSessionActiva
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    var $iiMinutosTolerancia = 100;
    public function handle($request, Closure $next)
    {
        $esApp = isset($esApp) ? $esApp : 0;
        $idUsuario = (string)Session::get('usu_id');

        try{
            $esApp = (int)$request->input('esApp');
        }catch (Exception $e){
            $esApp = 0;
        }

        if($esApp == 0){

        }else{


        }

        return $next($request);
    }
}
