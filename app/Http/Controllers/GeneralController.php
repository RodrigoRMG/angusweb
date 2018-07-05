<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;

class GeneralController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function menu()
    {
        return view('menu');
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
