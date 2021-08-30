<?php

namespace App\Http\Controllers\Backend;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LetsTalk;
use App\Models\Subscriber;

class AdminDashboardController extends Controller
{
    
    public function dashboard(){
        $data = [];
        $data ['contact'] = ContactUs::count();
        $data ['subscribers'] = Subscriber::count();
        $data ['lets_talk'] = LetsTalk::count();
        return view('backend.dashboard', $data);
    }
}
