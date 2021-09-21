<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\VerifyEmail;

use App\Models\User;
class AuthSellerController extends Controller
{
    //
    public function login()
    {
        return view('seller.login');
    }

    public function authenticate(Request $request)
    {
        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential)){
            $user = Auth::user();
            if ( $user->is_verified ){
                return redirect()->route('seller.dashboard');
            }else{
                Auth::logout();
                return back()->with('error', 'Akun anda belum diaktivasi');
            }
        }
        return back()->with('error', 'Akun yang dimasukan tidak terdaftar');
    }

    public function register()
    {
        return view('seller.register');
    }

    public function sendRegister(Request $request)
    {
        $user = new User;
        
        // check apakah email sudah terdaftar
        $check_email = User::where('email', $request->email)->first();
        
        $validate = $request->validate([
            'email' => 'required|unique:users|email',
            'name' => 'required',
            'password' => 'required',
        ]);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verif_code = sha1(time());
        $user->save();
        
        $data = [
            'name' => $request->name,
            'verif_code' => $user->verif_code,
        ];

        Mail::to($request->email)->send(new VerifyEmail($data));

        return back()->with('verifikasi', 'silahkan verifikasi email anda');

    }

    public function verifcode($code)
    {
        $user = User::where('verif_code', $code)->first();
        if($user == null){
            return "Verifikasi Kode Salah";
        }
        $user->is_verified = 1;
        $user->email_verified_at = strtotime("now");
        $user->save();
        return redirect()->route('seller.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('seller.login');
    }
}
