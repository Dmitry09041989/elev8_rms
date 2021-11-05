<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailCustomer extends Mailable
{
    use Queueable, SerializesModels;

    protected $username, $userEmail, $name, $title, $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $userEmail, $name, $title, $content)
    {
        $this->username = $username;
        $this->userEmail = $userEmail;
        $this->name = $name;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->userEmail, $this->username)->subject($this->title)->view('messages.email')->with([
            'fromName' => $this->username,
            'toName' => $this->name,
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}
