<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;
use App\Categoria;
use App\Menu;
use App\Evento;
use Illuminate\Support\Facades\Mail;
use App\Mail\NuevoContato;

class GeneralController extends Controller
{
    public function index()
    {
        $menus=Menu::take(10)->orderBy('created_at','desc')->get();
        $eventos=Evento::all();
        return view('index')->with('menus',$menus)->with('eventos',$eventos);
    }

    public function menu()
    {
        $eventos=Evento::all();
        $categorias=Categoria::all();
        return view('menu')->with('categorias',$categorias)->with('eventos',$eventos);
    }

    public function suscribe()
    {


        $email   = $_POST['email'];
        $MailChimp = new MailChimp('be3f634c4aa2d7eee38b438e06114d2d-us18');

        $list_id = 'e495275d5a';

        $result = $MailChimp->post("lists/$list_id/members", [
				'email_address' => $email,
				'status'        => 'subscribed',
		]);

        echo json_encode($result);
    }

    public function contacto()
    {
        $eventos=Evento::all();
        return view('contacto')->with('eventos',$eventos);
    }

    public function sendMailContact()
    {
        $errors = array();

        // Check if name has been entered
        if (!isset($_POST['name'])) {
            $errors['name'] = 'Por favor ingresa tu nombre';
        }

        // Check if email has been entered and is valid
        if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Por favor ingresa tu dirección';
        }

        //Check if message has been entered
        if (!isset($_POST['message'])) {
            $errors['message'] = 'Por favor ingresa tu mensaje';
        }

        $errorOutput = '';

        if(!empty($errors)){

            $errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
            $errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

            $errorOutput  .= '<ul>';

            foreach ($errors as $key => $value) {
                $errorOutput .= '<li>'.$value.'</li>';
            }

            $errorOutput .= '</ul>';
            $errorOutput .= '</div>';

            echo $errorOutput;
            die();
        }



        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = $email;
        $to = 'rodrigo_2392@hotmail.com';  // please change this email id
        $subject = 'Nuevo mensaje de contacto Angus Santa Fe web';

        $body = "Nombre: $name <br> E-Mail: $email <br> Mensaje:\n $message";

        $headers = "De: ".$from;


        //send the email
        $result = '';
        Mail::to($to)->send(new NuevoContato($body));

        $result .= '<div class="alert alert-success alert-dismissible" role="alert">';
        $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        $result .= 'Gracias, nos pondremos en contacto con usted muy pronto.';
        $result .= '</div>';

        echo $result;
        die();


        echo $result;
    }
}
