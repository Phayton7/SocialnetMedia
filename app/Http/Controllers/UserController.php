<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
  public function getDashboard()
  {
    return view('dashboard');
  }

  //Sign UP
  public function postSignUp(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email|unique:users',
      'first_name' => 'required|max:120',
      'password' => 'required|min:4'
    ]);

    $email = $request['email'];
    $first_name = $request['first_name'];
    $password = bcrypt($request['password']);

    $user = new User();
    $user->email = $email;
    $user->first_name = $first_name;
    $user->password = $password;

    $user->save();

    return redirect()->route('dashboard');
  }

  // Sign IN
  public function postSignIn(Request $request)
  {
    $this->validate($request, [
      'email' => 'required',
      'password' => 'required'
    ]);

    if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
      return redirect()->route('dashboard');
    }
    return redirect()->back();
  }
}

?>
