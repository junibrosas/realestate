<?php

namespace App\Listeners;

use App\Events\FileWasUploaded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class File
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  FileWasUploaded  $event
     * @return void
     */
    public function handle(FileWasUploaded $event)
    {
        
    }


    public function uploaded(FileWasUploaded $event)
    {
        var_dump($event->greeting . " your file has been uploaded.");
    }
}
