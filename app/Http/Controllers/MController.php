<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MController extends Controller
{
    public function save(Request $request){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'doc_zip'=>'required'
        ]);
         
        $owner = new Owner();
        $buildings = new Buildings();

        $owner->name = $request->input('name');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');

       
        if($request->hasFile('doc_zip')){
            $file = $request->file('doc_zip');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('webproject/images' , $filename);
            $owner->doc_zip = $filename;
            $owner->save();
        }

        $db = DB::table('owners')->pluck('id')->last();
        $buildings->owner_id = $db;
        $buildings->save();

        return redirect('email/send');
    }
}
