<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    public function contact(Request $request){
        //$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
        $subject = "Asunto del correo";
        $for = "crisfer.4217@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("crisfer.4217@gmail.com","NombreQueApareceráComoEmisor");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
