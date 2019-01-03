<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register (Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $userCount = User::where('email', $data['email'])->count();
            if ($userCount > 0) {
                return redirect()->back()->with('flash_message_error','Email already exists!');
            } else {
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();

                if (Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])) {
                    return redirect('/admin');
                }

            }
        }
    }
}
