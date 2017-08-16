<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Http\Requests;


class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public $cart;

    public function __construct($cart) 
    {
        //
        $this->cart = $cart;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('emails.myMail');
        
        
        return $this->view('emails.myMail')
                //->with(['cart'=>$cart])
                ->from('jaimelme007@gmail.com')
                ->subject('Bienvenido!');
    }
}
