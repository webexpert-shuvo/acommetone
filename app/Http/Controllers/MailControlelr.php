<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountConfirmationMail;

class MailControlelr extends Controller
{
    //

    public function index()
    {

        $maildat = [

            'name'      => 'Shuvo',
            'email'     => 'shuvo@gmail.com',
            'phone'     => '1714461547'
        ];

        Mail::to('cushytools20@gmail.com')->send(new AccountConfirmationMail($maildat));


    }







}
