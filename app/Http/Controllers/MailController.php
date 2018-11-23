<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Mail;
use App\Assistance;
use App\Patient;

class MailController extends Controller
{
    public function sendBasicMail(){
        $subject = 'Greetings from PAW';
        $from = 'unsa.paw@gmail.com';
        $sender = 'PAW 2018 at DI';
        $advertising = 'PAW 2018 by LARAVEL 5.5';
        $data = array('advertising'=>$advertising);

        Mail::send('sending', $data, function($message) use ($advertising){
            $message->to('risso.leonel.92@gmail.com', 'Admin PGSaU')->subject('Greetings from PAW');
            $message->from('unsa.paw@gmail.com','PAW by Laravel');
        });
        echo "Basic email sent successfully. Please check your mail.";

        //return view('index');
    }
    public function absenceReminder(){
        $subject = 'Dirección de Salud (U.N.Sa.)';
        $from = 'dir.unsalud@gmail.com';
        $sender = 'PAW 2018 at DI';
        $advertising = 'Se informa que debe presentar el certificado justificativo de su inasistencia, se cumple la fecha límite, tiene 24hs para realizar el trámite. Gracias!';
        $data = array('advertising'=>$advertising);


        //========================Inicio Envio de Email========================//
        //=====================================================================//
    
        $hoy = Carbon::now()->addDays();
        $assistance = Assistance::all();
        
        // para cada cliente
        foreach ($assistance as $assist){
            if (!$assist->status_mail){
                //$hoy->subDays()
                $fecha = Carbon::create($assist->end_date);
                if ( $hoy>=$fecha ){
                    $patient = Patient::find($assist->patient_id);
                    //Enviar mail
                    $assist->status_mail = true;
                    $assist->save();
                    Mail::send('sending', $data, function($message) use ($advertising, $subject, $patient){
                        $message->to($patient->email, $patient->lastname.' '.$patient->firstnames)->subject($subject);
                        $message->from('dir.unsalud@gmail.com','Administración');
                    });
                }
            }
        }

        //=====================================================================//
        //========================Fin de Envio de Email========================//
        return view('home');
    }

    /*public function sendAttachmentMail(){
        $data = array('name'=>'XXX');
        Mail::send('sending', $data, function($message){
            $message->to('risso.leonel.92@gmail.com','cosito qq')->subject($subject);
            $message->attach('...\images\background\bg-body.jpg');
            $message->attach('..\txt.txt');
            $message->from($subject,$sender);
        });

        echo "Email sent with attachment. Please check your mail";
    }*/
}
