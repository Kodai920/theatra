<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function index(){
        return view('profiles.index')->with('profiles',Auth::user());
    }

    public function update(UpdateProfileRequest $request){
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->about = $request->about;

        $user->save();
        $user->profile->save();

        if($request->hasFile('avator')){
            $avator = $request->avator;
            $avator_new_name = time().$avator->getClientOriginalName();
            $avator->move('uploads/avator/',$avator_new_name);
            $user->profile->avator = 'uploads/avator/'.$avator_new_name;
            $user->profile->save();
        }

        if($request->has('password')){
            $user->password = bcrypt($request->password);
            $user->save();
        }

        Session::flash('success','更新完了');
        return redirect()->back();
    }
}
