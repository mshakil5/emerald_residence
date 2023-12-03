<?php

namespace App\Http\Controllers;

use App\Models\Servey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function parking()
    {
        return view('frontend.parking');
    }

    public function facilities()
    {
        return view('frontend.facilities');
    }

    public function rates()
    {
        return view('frontend.rates');
    }

    public function offer()
    {
        return view('frontend.offer');
    }

    public function location()
    {
        return view('frontend.location');
    }

    public function review()
    {
        return view('frontend.review');
    }

    public function serveyStore(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
            'name' => ['required', 'string'],
        ]);

        $data = new Servey;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->overall_cleanliness = $request->overall_cleanliness;
        $data->customer_service = $request->customer_service;
        $data->comport = $request->comport;
        $data->process = $request->process;
        $data->recommend = $request->recommend;
        $data->others = $request->others;
        $data->save();

        $array['name'] = $request->name;
        $array['subject'] = "Diamonds Inn Servey";
        $array['email'] = $request->email;
        $array['message'] = "Diamonds Inn Servey";
        $array['from'] = 'do-not-reply@diamondsinn.co.uk';
        $array['cc'] = $request->email;
        $email = "diamondsvillayork@gmail.com";

        Mail::send('email.servey', compact('array'), function($message)use($array,$email) {
                $message->from($array['from'], 'diamondsinn.co.uk');
                $message->to($email)->cc($array['cc'])->subject($array['subject']);
               });

        return redirect()->route("review")->with("message", "Review submited successfull!");

    }


    public function contactMessage(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
            'name' => ['required', 'string'],
        ]);


        $array['name'] = $request->name;
        $array['subject'] = $request->subject;
        $array['email'] = $request->email;
        $array['message'] = $request->message;
        $array['from'] = 'do-not-reply@diamondsinn.co.uk';
        $email = "diamondsvillayork@gmail.com";

        Mail::send('email.contact', compact('array'), function($message)use($array,$email) {
                $message->from($array['from'], 'diamondsinn.co.uk');
                $message->to($email)->subject($array['subject']);
               });
        return redirect()->route("homepage")->with("message", "Mail send successfull!");

    }
}
