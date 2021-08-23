<?php

namespace App\Projects\Tms\Http\Controllers\Auth;

use App\Mainframe\Http\Controllers\Auth\ConfirmPasswordController as MfConfirmPasswordController;
use App\Projects\Tms\Providers\RouteServiceProvider;

class ConfirmPasswordController extends MfConfirmPasswordController
{
    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

}