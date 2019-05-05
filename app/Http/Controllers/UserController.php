<?php 

namespace App\Http\Controllers;

use App\Mail\VerifyMail;
use App\User;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
            'first-name' => 'required|max:50',
            'password' => 'required|min:6',
            'last-name' => 'required|max:50',
            'birthday' => 'date'
        ]);
        $email = $request['email'];
        $first_name = $request['first-name'];
        $last_name = $request['last-name'];
        $birthday = $request['birthday'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;
        $user->last_name = $last_name;
        $user->birthday = $birthday;

        $user->save();

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));

        //Auth::login($user);

        return redirect()->route('login')->with(['message' => "We have sent activation link to your email. Go to your email and activate your account."]);

	}

	public function postSignIn(Request $request)
	{
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', $request['email'])->first();
        if (!$user->verified) {
            auth()->logout();
            return back()->with(['err' => "You need to verify your account"]);
        }

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

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $id = $verifyUser->user_id;
            $user = User::where('id', $id)->first();
            if($user == NULL)
                return redirect('/');
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            }else{
                $message = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect()->route('login')->with('err', "Sorry your email cannot be identified.");
        }

       return redirect()->route('login')->with('message', $message);
    }

}


?>