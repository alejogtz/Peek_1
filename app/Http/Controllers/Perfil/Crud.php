<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Models\Follower;
use App\Models\Pet;

class Crud extends Controller {
     // ...

     public function index(){
     }
public function create(Request $request){

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
public function registergeneraldata(Request $request){

     $usuario = new User([
         'paypal' => $request->get('paypal'),
         'phone' => $request->get('phone'),
         'profile_photo' => $request->get('profile_photo')
     ]);
     $usuario->save();

     $mascota=new Pet([
       'user_id' => $request->get('user_id'),
       'name' => $request->get('name'),
       'age' => $request->get('age'),
       'sex' => $request->get('sex'),
       'specie' => $request->get('specie'),
       'description' => $request->get('description')
     ]);
     $mascota->save();
     return redirect('/registro')->with('success', 'Usuario Agregado!');
}


    public function show($id){
      $usuario = User::find($id);
      $mascota= Pet::find($id);
      $publicaciones=Post::where('user_id','=',$id)->get();
      $datos = ['usuario' => $usuario, 'mascota' => $mascota,'publicaciones'=>$publicaciones];
      return view('usuarios.show', compact('datos'));
    }

   public function edit($id){
     $usuario = User::find($id);
     $mascota= Pet::find($id);
     $datos = ['usuario' => $usuario, 'mascota' => $mascota];

        return view('usuarios.edit', compact('datos'));
   }

    public function update(Request $request, $id){

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
    public function updategeneraldata(Request $request, $id){
        $usuario = User::find($id);
        $usuario->profile_photo = $request->get('profile_photo');
        $usuario->paypal = $request->get('paypal');
        $usuario->phone = $request->get('phone');
        $usuario->save();

        $mascota=Pet::find($id);
        $mascota->name=$request->get('name');
        $mascota->age=$request->get('age');
        $mascota->sex=$request->get('sex');
        $mascota->specie=$request->get('specie');
        $mascota->description=$request->get('description');
        $mascota->save();


        return redirect('/usuarios')->with('success', 'Usuario Editado');
    }

    public function destroy($id)
    {
      $usuario = User::find($id);
      $usuario->delete();

      return redirect('/usuario')->with('success', 'Usuario Eliminado!');
    }

    public function createfollow(Request $request){

         $follow = new Follower([
             'user_id' => $request->get('user_id'),
             'user_id_follow' => $request->get('user_id_follow')
         ]);
         $follow->save();
         return redirect('/follows')->with('success', 'Follow Agregado!');
    }
    /*public function followers(Request $request,$id){
         $followers = Follower::where('user_id','=',$id)->get();
         return \View::make('list', compact('followers'));

    }*/
    public function followers($id){
         $followers = User::find($id)->followers();
         return \View::make('list', compact('followers'));

    }
    public function followings($idotro){
         $followers = User::find($id)->followings();
         return \View::make('list', compact('followers'));

    }


    public function destroyfollow(Request $request,$idotroseguidor)
    {
      $followers = Follower::find($idotroseguidor);
      $followers->delete();
      return redirect()->back();
    }
}
