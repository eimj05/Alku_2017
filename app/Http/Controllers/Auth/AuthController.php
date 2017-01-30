<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|regex:/^.*(?=.{3,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%@]).*$/|confirmed|min:8|max:16',
            'terms' => 'required',
          //  'g-recaptcha-response' => 'required|captcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
         

            $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            //'password' => md5($data['password']),

            'password_updated_at' => date('Y-m-d H:i:s')
            ]);

            
            $values = array('cliente_id' => $user->id,'roles1_id' => 3);
            DB::table('cliente_roles1')->insert($values);

            return $user;

    }
}
