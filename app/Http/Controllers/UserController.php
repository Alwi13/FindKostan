<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

    public function getLogin()
    {
        return view('user.login');
    }

    public function getRegister()
    {
        return view('user.register');
    }

    public function postLogin(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);

        if(!$validate->fails())
        {
            $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];
            if(Auth::guard('web')->attempt($credentials))
            {
                return redirect('/');
            }
            else{
                return redirect()->back()->with('status','Email or Password is Invalid');
            }
        }else{
            return redirect()->back()->withErrors($validate);
        }
    }

    public function postRegister(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email'     => 'required|email|unique:users',
            'password'  => 'required|alpha_num|min:5|confirmed',
            'picture'   => 'required|image|max:5000',
            'gender'    => 'required',
            'dob'       => 'required|date',
            'address'   => 'required|min:10',
        ]);

        if(!$validate->fails())
        {
            $file = $request['picture'];
            $filename = "";

            if($file)
            {
                $filename = $file->getClientOriginalName();
                Storage::disk('local')->put($filename,File::get($file));
            }

            $user = new User();
            $user->email = $request->get('email');
            $user->password = bcrypt($request->get('password'));
            $user->gender = $request->get('gender');
            $user->date_of_birth = $request->get('dob');
            $user->address = $request->get('address');
            $user->picture = $filename;
            $user->created_at = Carbon::now();
            $user->updated_at = Carbon::now();
            $user->remember_token = $request->get('_token');
            $user->save();

            $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];

            if(Auth::guard('web')->attempt($credentials))
            {
                return redirect('/');
            }
        }
        else{
            return redirect()->back()->withErrors($validate);
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function getProfile()
    {
        return view('user.update');
    }

    public function postProfile(Request $request,$id)
    {
        $validate = Validator::make($request->all(),[
            'email'     => 'required|email',
            'picture'   => 'required|image|max:5000',
            'gender'    => 'required',
            'dob'       => 'required|date',
            'address'   => 'required|min:10',
        ]);

        if(!$validate->fails())
        {
            $file = $request['picture'];
            $filename = "";

            $user = User::find($id);

            if($file)
            {
                $filename = $file->getClientOriginalName();
                if(Storage::disk('local')->has($user->picture))
                {
                    Storage::disk('local')->delete($user->picture);
                }
                Storage::disk('local')->put($filename,File::get($file));
            }

            $user->email = $request->get('email');
            $user->gender = $request->get('gender');
            $user->date_of_birth = $request->get('dob');
            $user->address = $request->get('address');
            $user->picture = $filename;
            $user->save();

            return redirect()->route('get.profile',['id'=>Auth::user()->id]);
        }else{
            return redirect()->back()->withErrors($validate);
        }
    }

    public function getUserImage($filename)
    {
        $image = Storage::disk('local')->get($filename);
        return response($image,200)->header('Content-Type','Image/JPEG');
    }

}
