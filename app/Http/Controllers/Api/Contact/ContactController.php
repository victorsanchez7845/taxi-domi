<?php

namespace App\Http\Controllers\Api\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Traits\GeneralTrait;
use App\Traits\MailjetTrait;

class ContactController extends Controller
{    
    use GeneralTrait, MailjetTrait;
    
    public function index(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:75',
            'email' => 'required|email|max:75',
            'subject' => 'required|max:75',
            'phone' => 'required|max:25',
            'message' => 'required|max:200',
        ]);

        if ($validator->fails()) {
            return response()->json([
                    'error' => [
                        'code' => 'required_params', 
                        'message' =>  $validator->errors()->all() 
                    ]
                ], 422);
        }

        $message = 'Nombre del cliente: '.$request->name." \n";
        $message .= 'Asunto: '.$request->subject." \n";
        $message .= 'E-mail: '.$request->email." \n";
        $message .= 'Teléfono: '.$request->phone." \n";
        $message .= 'Mensaje: '.$request->message." \n";
       
        $response = GeneralTrait::validateCaptcha( $request->g_recaptcha_response );
        if($response):
            
            $data = array(
                "Messages" => array(
                    array(
                        "From" => array(
                            "Email" => "sales@taxirivieramaya.com",
                            "Name" => "Sales"
                        ),
                        "To" => array(
                            array(
                                "Email" => "sales@taxirivieramaya.com",
                                "Name" => "Sales"
                            )
                        ),
                        "Subject" => "E-mail de contacto | Taxi Riviera Maya",
                        "TextPart" => $message
                    )
                )
            );

            MailjetTrait::sendMailjet( $data );

            return response()->json(["status" => true], 200);
        else:
            return response()->json(["status" => false], 404);
        endif;        
    }
    
    public function quote(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'last_name' => 'max:35',
            'email' => 'required|email|max:75',
            'phone' => 'required|max:25',
            'service_type' => 'required',
            'origin' => 'required|max:50',
            'destination' => 'required|max:50',
            'passengers' => 'required|max:50',
            'arrival_date' => 'max:25',
            'arrival_airline' => 'max:25',
            'arrival_flight_number' => 'max:25',
            'departure_date' => 'max:25',
            'departure_airline' => 'max:25',
            'departure_flight_number' => 'max:25',
            'message' => 'max:200',
        ]);

        if ($validator->fails()) {
            return response()->json([
                    'error' => [
                        'code' => 'required_params', 
                        'message' =>  $validator->errors()->all() 
                    ]
                ], 422);
        }

        $message = 'Nombre del cliente: '.$request->name." \n";
        $message .= 'Apellidos: '.$request->last_name." \n";
        $message .= 'E-mail: '.$request->email." \n";
        $message .= 'Teléfono: '.$request->phone." \n";
        $message .= 'Tipo de servicio: '.$request->service_type." \n";
        $message .= 'Origen: '.$request->origin." \n";
        $message .= 'Destino: '.$request->destination." \n";
        $message .= 'Pasajeros: '.$request->passengers." \n";
        $message .= 'Fecha de llegada: '.$request->arrival_date." \n";
        $message .= 'Aerolínea de llegada: '.$request->arrival_airline." \n";
        $message .= 'Número de vuelo de llegada: '.$request->arrival_flight_number." \n";
        $message .= 'Fecha de regreso: '.$request->departure_date." \n";
        $message .= 'Aerolínea de salida: '.$request->departure_airline." \n";
        $message .= 'Número de vuelo de salida: '.$request->departure_flight_number." \n";
        $message .= 'Mensaje: '.$request->message." \n";

        $response = GeneralTrait::validateCaptcha( $request->g_recaptcha_response );
        if($response):
            
            $data = array(
                "Messages" => array(
                    array(
                        "From" => array(
                            "Email" => "sales@taxirivieramaya.com",
                            "Name" => "Sales"
                        ),
                        "To" => array(
                            array(
                                "Email" => "sales@taxirivieramaya.com",
                                "Name" => "Sales"
                            )
                        ),
                        "Subject" => "E-mail de cotización | Taxi Riviera Maya",
                        "TextPart" => $message
                    )
                )
            );

            MailjetTrait::sendMailjet( $data );

            return response()->json(["status" => true], 200);
        else:
            return response()->json(["status" => false], 404);
        endif;        
    }
}