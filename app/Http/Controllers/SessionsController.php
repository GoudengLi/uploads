<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
public function create()
{
    return view('sessions.create');
}

public function store()
{
    $attributes=request()->validate([
        'email'=>'required|exists:users,email',
        'password'=>'required'
    ]);

    if(auth()->attempt($attributes)){
        $user = auth()->user();

        if (!isset($user->visit_times)) {
            $user->visit_times = 0;
        }

        $user->visit_times = $user->visit_times + 1;

        User::where('id', $user->id)->update(['visit_times' => $user->visit_times]);

        session()->regenerate();
      
       
  if ($user->visit_times < 2) {
            return view('about')->with('success','Welcome Back!'); 
        }else{
          
          return redirect('/')->with('success','Welcome Back!');
        //   return view('about')->with('success','Welcome Back!');
        }
    }
    return back()
    ->withInput()
    ->withErrors(['email'=>'credentials could not be verified.']);
}
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','Goodbye!');

    }
}
