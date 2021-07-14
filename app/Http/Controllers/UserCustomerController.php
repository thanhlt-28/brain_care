<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;

class UserCustomerController extends Controller
{

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect(route('dashboard'));
        }

        return view('auth.login', [
            'email' => $request->email,
            'msg' => "Tài khoản hoặc mật khẩu không đúng!"
        ]);
    }
}
