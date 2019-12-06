<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialFacebookAccountService;
use App\User;

class SocialAuthFacebookController extends Controller
{
  /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    
    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialFacebookAccountService $service)
    {
        $provide_user = Socialite::driver('facebook')->user();
        
        $existe = $service->yaExiste($provide_user);

        $user = $service->createOrGetUser($provide_user);
        auth()->login($user);

        if (!$existe){
            return view('auth.choiceTypeAccount');
        }
        
        return redirect()->to('/home');
    }
}