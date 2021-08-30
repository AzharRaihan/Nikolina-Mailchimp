<?php

namespace App\Http\Controllers\Frontend;

use App\Models\LetsTalk;
use App\Models\ContactUs;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function courses(){
        return view('frontend.courses');
    }
    public function games(){
        return view('frontend.games');
    }
    public function games2(){
        return view('frontend.games2');
    }
    public function games3(){
        return view('frontend.games3');
    }
    public function podcast(){
        return view('frontend.podcast');
    }
    public function speaking(){
        return view('frontend.speaking');
    }

    public function contactStore(Request $request){
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contact = ContactUs::create([
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        notify()->success("Contact successful","Success");
        if($contact){
            return redirect()->back();
        }
        return redirect()->back()->withInput();
    }

    // public function subscriberStore(Request $request){

    //     $email = $request->email;
    //     Newsletter::subscribe($email);
    //     notify()->success("Subscribed successful","Success");
    //     return redirect()->back();



    //     $request->validate([
    //         'email' => 'required',
    //     ]);
    //     $subscriber = Subscriber::create([
    //         'email' => $request->email,
    //     ]);
    //     notify()->success("Subscribed successful","Success");
    //     if($subscriber){
    //         return redirect()->back();
    //     }
    //     return redirect()->back()->withInput();
    // }






    public function letsTalkStore(Request $request){
        $request->validate([
            'to_email' => 'required',
            'from_email' => 'required',
            'message' => 'required',
        ]);
        $lets_talk = LetsTalk::create([
            'to_email' => $request->to_email,
            'from_email' => $request->from_email,
            'message' => $request->message,
        ]);
        notify()->success("Message successful Sent","Success");
        if($lets_talk){
            return redirect()->back();
        }
        return redirect()->back()->withInput();
    }
    
}
