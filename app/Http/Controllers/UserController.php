<?php
namespace App\Http\Controllers;
use App\cl_user;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function getDashboard() {
		return view('dashboard');
	}

	public function SignIn(Request $request)
	{
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
			return redirect()->route('dashboard');
		}
		return redirect()->back();

	}


	public function signup(Request $request){
		

		$email = $request['email'];
		$password = bcrypt($request['password']);
		
		$user = new cl_user();
		$user->email = $email;
		$user->password = $password;

		$user->save();

		//Auth::login($user);

		return redirect()->route('dashboard');
	}
}