<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use Mail;


class ContactController extends Controller
{
   public function contactPost(Request $request) 
   {
        $validator = Validator::make($request->all(), [ 'email' => 'required|email' ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $contact = Contact::create($request->all());
        Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'position' => $request->get('position'),
                'company' => $request->get('company'),
                'subject' => $request->get('subject'),
                'bodyMessage' => $request->get('message')
            ), function($message)
            {
                global $request;
                $message->from($request->get('email'));
                $message->to('mail@ready-plan.ru', $request->get('name'))->subject($request->get('subject'));
            }
        );
        return response()->json([
            'massage' => 'Данные успешно отправлены'
        ], 200);
   }
}