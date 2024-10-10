<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegistrationRequest;
use App\Services\RegistrationService;

class RegistrationController extends Controller
{

    protected $registrationService;

    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }


    public function userRegister()
    {
        $centers = $this->registrationService->registerFormShow();
        return view('user.registration_form',compact('centers'));
    }

    public function registerSubmit(StoreRegistrationRequest $request)
    {

        $this->registrationService->registerSubmit($request);

        return redirect()->route('users.form')->with('success', 'Registration successful. An E-mail has been sent with Scheduled Date and Center Name.');
    }

}
