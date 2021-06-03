<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendOtp;
use App\Models\Customer;

class UserController extends Controller
{
    //

    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $credential = $request->only('email', 'password');
        if( Auth::guard('customer')->attempt($credential) ){
            return redirect()->route('home');
        }

        return back()->withInput()->withErrors('Username/Password Salah');
        
    }

    public function register()
    {
        return view('user.register');
    }

    public function generateOTP()
    {
        // Generate OTP
        $otp = rand(100000,999999);

        return $otp;
    }

    public function storeRegister(Request $request)
    {
        $customer = new Customer;

        $validate = $request->validate([
            'email' => 'required|unique:customers|email',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        $customer->customer_name = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->customer_address = $request->address;
        $customer->phone = $request->phone;
        $customer->save();

        $request->session()->put('otp', $this->generateOTP());

        mail::to($request->email)->send(new SendOtp($request->session()->get('otp')));
        
        return redirect()->route('user.inputOTP', ['id' => $customer->id]);

    }


    public function inputOtp($id)
    {
        return view('user.inputOtp', ['id' => $id]);
    }

    public function verifOtp(Request $request, $id)
    {
        $customer = Customer::where('id', $id)->first();
        if($request->otp == $request->session()->get('otp')){
            $customer->is_verified = 1;
            $customer->verif_code = $request->otp;
            $customer->email_verified_at = strtotime("now");
            $request->session()->forget('otp');
            $customer->save();
            return redirect()->route('user.login');
        }else{
            return back()->with('errorOTP', 'Kode OTP Tidak sesuai');
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('home');
    }

}
