<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Welcome;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $data = [
            'subject' => 'My Car - Boas Vindas',
            'body' => 'Olá! Seja bem-vindo ao My Car.',
            'name' => 'MyCar'

        ];

        try {
            
            Mail::to('elzo.santos.sousa@gmail.com')->send(new Welcome($data));
            return response()->json(['Ok! Olhe seu email.']);
        } catch (\Throwable $th) {
            dd($th);
            return response()->json(['Não foi possível']);
        }
    }
}
