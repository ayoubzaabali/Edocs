<?php

namespace App\Listeners;

use App\Events\beforeRunningApp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class clearMycache
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
     * @param  beforeRunningApp  $event
     * @return void
     */
    public function handle(beforeRunningApp $event)
    {
        //
    }
}
