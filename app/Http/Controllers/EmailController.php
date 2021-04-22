<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;


class EmailController extends Controller
{
    public function send(){
        $object = new \stdClass();
        $info = DB::table('owners')->pluck('email')->last();
        Mail::to($info)->send(new Email($object));
        return redirect('index');
    }
}
