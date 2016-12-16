<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 15/12/16
 * Time: 23:35
 */

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;
use Exception;

class AuthController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try{
            $google = Socialite::driver('google')->user();
        }catch(Exception $e){
            return redirect('/');
        }

        $user = User::where('google_id', $google->getId())->first();

        if(!$user){
            $user = User::create([
                'google_id' => $google->getId(),
                'name' => $google->getName(),
                'email' => $google->getEmail(),
                'password' => bcrypt($google->getId()),
                'profile_pic' => $google->getAvatar(), ]);
        }


        auth()->login($user);

        return view('user', compact('user'));
    }
}