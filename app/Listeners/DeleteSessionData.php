<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Session;

use App\Lib\StripeHelper;

class DeleteSessionData
{

    public function __construct()
    {
        //
    }

    public function handle(Logout $event)
    {
        Session::forget('email');
    }
}
