<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
//    function enviar(Request $request){
//
//        $remetente = $request->remetente;
//        $destinatario = $request->destinatario;
//        $view = $request->view;
//        $msg = $request->msg;
//
//        $from = $remetente;
//        $to = $destinatario;
//
//        Mail::send($view, ['mensagem' => $msg] , function($config, $from , $to){
//           $config->from($from, 'Edijanio');
//           $config->to($to);
//       });
//    }

    function enviar(string $view, array $msg, string $destinatario){

        $view = $view;
        $msg = $msg;
        $from = 'edinhox2@gmail.com';
        $to = $destinatario;

        Mail::send($view, $msg , function($config) use ($to, $from) {
            $config->from($from, 'Edijanio');
            $config->to($to);
        });
    }
}
