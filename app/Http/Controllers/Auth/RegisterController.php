<?php

namespace App\Http\Controllers\Auth;

use App\Models\UserInfo;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    const AVATAR_DELETED = '/static/img/public/user/no_login_default_avatar.jpg';
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_phone' => 'required|digits:11|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user_id = User::insertGetId([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_phone' => $data['mobile_phone'],
            'password' => bcrypt($data['password']),
            'avatar' => self::AVATAR_DELETED,
            'status' => self::STATUS_ACTIVE,
        ]);
        if (!empty($user_id)){
            $user_info = UserInfo::firstOrCreate([
                'user_id' => $user_id,
                'score' => '0',
                'money' => '0.00',
                'register_ip' => request()->getClientIp(),
                'login_number' => '1',
                'last_login_ip' => request()->getClientIp(),
                'last_login_time' => time(),
            ]);
            if ($user_info){
                return User::find($user_id);
            }else{
                User::find($user_id)->delete();
                return false;
            }
        }

        /*return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_phone' => $data['mobile_phone'],
            'password' => bcrypt($data['password']),
            'avatar' => self::AVATAR_DELETED,
            'status' => self::STATUS_ACTIVE,
        ]);*/
    }
}
