<?php 

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function postSignUp(Request $request)
	{
        //request orqali kelayotgan email,
        // users table yagona bo'lishi kerak va laravelning
        // email ruleiga javob bera olishi kerak
        // required - majburiy
        //max va min uzunliklari
	    $this->validate($request, [
	        'email' => 'required|email|unique:users',
            'first_name' => 'required|max:120',
            'password' => 'required|min:6'
        ]);
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');

	}

	public function postSignIn(Request $request)
	{
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email'=>$request['email'], 'password' => $request['password']])){
                return redirect()->route('timeline');
        }
        return redirect()->back();
	}

	public function getLogout()
    {
	    Auth::logout();
	    return redirect()->route('home');
	}

}


?>