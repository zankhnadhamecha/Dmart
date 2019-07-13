<?php

namespace App\Http\Controllers;

use App\Mail\MarkdownMail;
use App\Mail\TestMail;
use App\Notifications\MyTestNotification;
use App\Notifications\TestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Mail::to(Auth::user()->email)->send(new TestMail());
        // Mail::to(Auth::user()->email)->send(new MarkdownMail());
        $user = Auth::user();
        // $user->notify(new MyTestNotification("Kiran"));
        // dd("Home Controller");
        return view('pages.dashboard');
    }
}
