<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class RegisterController extends Controller
{

    public function postRegister(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'password' => 'required|min:6|confirmed',
            ],
            [
                'name.required' => 'Họ và tên là trường bắt buộc',
                'name.max' => 'Họ và tên không quá 191 ký tự',
                'name.unique' => 'Tên đã tồn tại',
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email không đúng định dạng',
                'email.max' => 'Email không quá 255 ký tự',
                'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Mật khẩu là trường bắt buộc',
                'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
                'password.confirmed' => 'Xác nhận mật khẩu không đúng',
            ]
        );

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make('password');
        $users->fill($request->all());
        // dd($users);

        $users->save();
        session()->flash('success', 'Đăng ký thành công');
        return view('auth.login');
    }
}
