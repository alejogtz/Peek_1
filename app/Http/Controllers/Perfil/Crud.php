<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Follows;

class Crud extends Controller {
     // ...

     public function index(){
     }
public function create(Request $request){
  $request->validate([
         'email'=>'required',
         'username'=>'required',
         'password'=>'required'
     ]);
     $usuario = new User([
         'type' => $request->get('type'),
         'email' => $request->get('email'),
         'username' => $request->get('username'),
         'password' => $request->get('password'),
         'profile_photo' => $request->get('profile_photo'),
         'paypal' => $request->get('paypal'),
         'phone' => $request->get('phone'),
         'email_verified_at' => $request->get('email_verified_at')
     ]);
     $usuario->save();
     return redirect('/registro')->with('success', 'Usuario Agregado!');
}


    public function show($id){}

   public function edit($id){
     $usuario = User::find($id);
        return view('usuarios.edit', compact('usuario'));
   }

    public function update(Request $request, $id){
      $request->validate([
            'email'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $usuario = User::find($id);
        $usuario->type =  $request->get('type');
        $usuario->email = $request->get('email');
        $usuario->username = $request->get('username');
        $usuario->password = $request->get('password');
        $usuario->profile_photo = $request->get('profile_photo');
        $usuario->paypal = $request->get('paypal');
        $usuario->phone = $request->get('phone');
        $usuario->email_verified_at = $request->get('email_verified_at');
        $usuario->save();

        return redirect('/usuarios')->with('success', 'Usuario Editado');
    }

    public function destroy($id)
    {
      $usuario = User::find($id);
      $usuario->delete();

      return redirect('/usuario')->with('success', 'Usuario Eliminado!');
    }

    public function createfollow(Request $request){
      $request->validate([
             'user_id'=>'required',
             'user_id_follow'=>'required'
         ]);
         $follow = new Follows([
             'user_id' => $request->get('user_id'),
             'user_id_follow' => $request->get('user_id_follow')
         ]);
         $follow->save();
         return redirect('/follows')->with('success', 'Follow Agregado!');
    }
    public function followers(Request $request,$id){
         $followers = Follows::where('user_id','=',$id)->get();
         return \View::make('list', compact('followers'));

    }
    public function followings(Request $request,$idotro){
         $followers = Follows::where('user_id_follow','=',$idotro)->get();
         return \View::make('list', compact('followers'));

    }


    public function destroyfollow(Request $request,$idotroseguidor)
    {
      $followers = Follows::find($idotroseguidor);
      $followers->delete();
      return redirect()->back();
    }
}
