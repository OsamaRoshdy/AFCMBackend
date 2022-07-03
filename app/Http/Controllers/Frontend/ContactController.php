<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $data['email'] = $request->email;
        $data['type'] = Contact::SUBSCRIBE;
        Contact::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->back();
    }

    public function contact_us(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'message' => 'required|string',
        ]);
        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['message'] = $request->message;
        $data['type'] = Contact::CONTACT;
        Contact::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->back();
    }
}
