<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;
use App\Categoria;
use App\Menu;

class GeneralController extends Controller
{
    public function index()
    {
        $menus=Menu::take(10)->get();
        return view('index')->with('menus',$menus);
    }

    public function menu()
    {
        $categorias=Categoria::all();
        return view('menu')->with('categorias',$categorias);
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
}
