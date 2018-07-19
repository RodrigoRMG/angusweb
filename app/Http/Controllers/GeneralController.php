<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;
use App\Categoria;
use App\Menu;
use App\Evento;
use Illuminate\Support\Facades\Mail;
use App\Mail\NuevoContato;
use App\Mail\NuevaFactura;

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

    public function facturar()
    {
        $eventos=Evento::all();
        return view('facturar')->with('eventos',$eventos);
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

        $body = "Nombre: $name <br><br> E-Mail: $email <br><br> Mensaje:\n $message";

        $headers = "De: ".$from;


        //send the email
        $result = '';
        Mail::to($to)->send(new NuevoContato($name,$message,$from));

        $result .= '<div class="alert alert-success alert-dismissible" role="alert">';
        $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        $result .= 'Gracias, nos pondremos en contacto con usted muy pronto.';
        $result .= '</div>';

        echo $result;
        die();


        echo $result;
    }

    public function sendMailFactura()
    {
        $errors = array();

        // Check if name has been entered
        if (!isset($_POST['facidtoken'])) {
            $errors['facidtoken'] = 'Por favor ingresa el ID de la factura';
        }

        if (!isset($_POST['facnombre'])) {
            $errors['facnombre'] = 'Por favor ingresa tu nombre';
        }

        if (!isset($_POST['facrfc'])) {
            $errors['facrfc'] = 'Por favor ingresa tu R.F.C.';
        }

        if (!isset($_POST['facdireccion'])) {
            $errors['facdireccion'] = 'Por favor ingresa tu nombre';
        }

        // Check if email has been entered and is valid
        if (!isset($_POST['facemail']) || !filter_var($_POST['facemail'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Por favor ingresa un email válido';
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



        $idtoken = $_POST['facidtoken'];
        $nombre = $_POST['facnombre'];
        $rfc = $_POST['facrfc'];
        $direccion = $_POST['facdireccion'];
        $email = $_POST['facemail'];
        


        //send the email
        $result = '';
        Mail::to('rodrigo_2392@hotmail.com')->send(new NuevaFactura($idtoken,$nombre,$rfc,$email,$direccion));

        $result .= '<div class="alert alert-success alert-dismissible" role="alert">';
        $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        $result .= 'Muy pronto le haremos llegar su factura, gracias por su preferencia.';
        $result .= '</div>';

        echo $result;
    }
}
