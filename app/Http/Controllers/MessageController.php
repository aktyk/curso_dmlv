<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store() {
    	$message = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	], [
    		// Se puede aplicar una validación que aplique para un form en específico. Se deja como referencia
    		'name.required' => __('I need your full name')
    	]);

        //Envío de email
        //Mail::to('jmgm240676@hotmail.com')->queue(new MessageReceived($message));
        Mail::to(request('email'))->queue(new MessageReceived($message));
        //return new MessageReceived($message);

    	return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}
