<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    //
    public function sendmail()
    {
        # code...
        $details=[
            'title'=>'mail from me',
            'body'=>'test mail',

        ];
        Mail::to('seo11ats@gmail.com')->send(new Testmail($details));
        return 'sented';
    }
}
