<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $data = array();
        $data['msg'] = $request->msg;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['url'] = $request->url;
        
        return $this->from('admin@gmail.com')
                ->view('mail',compact('data'))
                ->to('rostomali4444@gmail.com');
    }
}
