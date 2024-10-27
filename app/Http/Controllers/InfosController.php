<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infos;

class InfosController extends Controller
{
    public function store(Request $request){
        $infos = new Infos;
        $infos->firstName = $request->firstName;
        $infos->lastName = $request->lastName;
        $infos->email = $request->email;
        $infos->sms = $request->sms;
        $infos->save().session()->flash('success', 'Product created successfully');
        return redirect()->route('/facebookContact');
    }
}
