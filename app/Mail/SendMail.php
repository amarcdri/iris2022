<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->from($this->data['from_email'], $this->data['from_name'])
                    ->subject($this->data['subject'])
                    ->replyTo($this->data['reply_to_email'], $this->data['reply_to_name'])
                    ->view($this->data['page'])
                    ->with($this->data['content']);
    }
}
