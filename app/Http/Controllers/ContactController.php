<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail; 

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('ddddfff');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validate($request, [
            'name'   => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ],
        [
            'captcha' => 'Invalid Captcha code entered'
        ]);

        $contact = new Contact;
    
        $contact->name  = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $to_name = 'Indian Tours: Contact Us';
        $to_email = 'udaydeveloper@gmail.com';
        $from_name = $request->name;
        $from_email = $request->email;

        $data = array('body' => $contact, 'name' => $from_name, 'booking_date' => $request->booking_date);
        Mail::send('emails.contact', $data, function($message) use ($to_name, $to_email, $from_name, $from_email) {
        $message->to($to_email, $to_name)
        ->subject('India Tours Contact Us page Enquiry by'.$from_name);
        $message->from($from_email, $from_name);
        });
      
        return back()->with('success', 'Your booking requested successfully.');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
