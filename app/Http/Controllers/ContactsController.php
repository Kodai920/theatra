<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Contact::$types;
        $genders = Contact::$genders;

        return view('contacts.index',compact('types','gender'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = new Contact($request->all());

        //「お問い合わせの種類(checkbox)」を配列から文字列に
        $type = '';
        if(isset($request->type)){
            $type = implode(', ', $request->type);
        }
        return view('contacts.confirm',compact('contact','type'));
    }

    public function complete(ContactRequest $request)
    {
        $input = $request->except('action');

        if($request->action === '戻る'){
            return redirect()->action('ContactsController@index')->withInput($input);
        }

        //チェックボックス（配列）を「,」区切りの文字に
        if(isset($request->type)){
            $request->merge(['type' => implode(', ', $request->type)]);
        }

        //データを保存
        Contact::create($request->all());

        //二重送信防止
        $request->session()->regenerateToken();

        return view('contacts.complete');
    }
}
