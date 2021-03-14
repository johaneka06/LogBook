<?php

namespace App\Mail;

use App\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewEntry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $log = null;
    private $name = "";
    private $id = "";

    public function __construct(Log $log, $name, $id)
    {
        $this->log = $log;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return ($this->log == null ) ? $this->subject('New Log Entry: NULL')->view('email.nullitem') 
            : $this->subject('New Log Entry: ' . $this->log->title)->view('email.log-entry', ['id' => $this->id, 'log' => $this->log, 'name' => $this->name]);
    }
}
