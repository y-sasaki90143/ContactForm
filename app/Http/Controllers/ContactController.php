<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\FormValidateRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSent;

class ContactController extends Controller
{
    public function index()
    {
        $form = new Contact;
        return view('contact', ['form' => $form]);
    }

    public function confirm(FormValidateRequest $request)
    {
        $contact = new Contact($request->all());
        return view('confirm')->with([
            'request' => $request,
            'contact' => $contact
        ]);
    }

    public function done(FormValidateRequest $request)
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');
        if($action === '送信') {
            $form_value = [
                "name" => $request['name'],
                "mail_address" => $request['mail_address'],
                "title" => $request['title'],
                "content" => $request['content']
            ];
            $contact = new Contact;
            $contact = $contact->create($form_value);
            Mail::to($contact->mail_address)->send(new ContactSent($contact));
            //$contact->mail_addressでフォームに入力したアドレスにメールが送られる
            $request->session()->regenerateToken();
            return view('done');
        } else {
            return redirect()->action('ContactController@index')->withInput($input);
        }
    }
}
