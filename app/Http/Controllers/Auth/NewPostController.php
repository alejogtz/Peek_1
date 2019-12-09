<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Pet;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewPostController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/newpost';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
   /* protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
        ]);
    }*/


    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
  /*  protected function registered(Request $request, $user)
    {
        // Segun el usuario se le redirige a pedir datos extra.
        $r = 'auth.extraInfoPet';
        if ($user->type == 'company') {
            $r = 'auth.extraInfoCompany';
        }
        return view($r, ['user_id' => $user->id]);
    }*/

    public function verVista()
    {
        return view('uploadImage');
    }

    public function saveNewPost(Request $request)
    {
        //code...
        // Extra data
       /* $editar = User::find(Auth::id());

        $editar-> = $request->input('paypal');
        $editar->phone = $request->input('phone');
        // Capturar Avatar :v
        //if ($request->hasFile('profile_photo')) {
        // $avatar = $request->file('avatar');
        $path = $request->file('photo')->store('avatars');
        $editar->photo = $path;*/
        $path = $request->file('photo')->store('avatars');

        //}
       // $editar->save();

        Post::create([
            'user_id' => Auth::id(),
            'photo' => $path,
            'description' => $request->input('description'),
            'hashtags' => $request->input('hashtags')
        ]);


        return redirect()->to('/feed2'); //->with('user_id', $user_id);

    }


    public function cancelRegister(Request $request)
    {

        return redirect()->to('login');
    }
}
