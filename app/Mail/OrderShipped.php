<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

//use Illuminate\Http\Request;
use Request;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $options;
    public $data;

    protected $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct(Request $request)
     {
         $this->request = $request;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
     public function build()
     {
         return $this->view('create')
                     ->subject('お問い合わせ')
                     ->with([
                         //'contact_name' => $this->request->name,
                         //'contact_message' => $this->request->message
                         'contact_name' => 'Mai cuong',
                         'contact_message' => 'Test'
                     ]);
     }

}
