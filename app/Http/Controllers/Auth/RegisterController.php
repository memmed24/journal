<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notification;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/';

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
            // 'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users'
            // 'password' => 'required|string|min:6|confirmed',
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
        $user = [
            'title' => $data['title'],
            'name' => $data['name'],
            'mid_name' => $data['mid_name'],
            'surname' => $data['surname'],
            'username' => $data['username'],
            'degree' => $data['degree'],
            'nickaneme' => $data['nickname'],
            'primary_phone' => $data['primary_phone'],
            'secondary_phone' => $data['secondary_phone'],
            'fax' => $data['fax_number'],
            'position' => $data['position'],
            'insitution' => $data['insitution'],
            'department' => $data['department'],
            'street_address' => $data['street_address'],
            'city' => $data['city'],
            'province' => $data['province'],
            'zip' => $data['zip'],
            'country' => $data['country'],
            'reviewer' => $data['reviewer'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ];
        if (isset($data['address_for'])) {
            $user['address_for'] = $data['address_for'];
        }

        if (isset($data['secondary_phone_aim'])) {
            $user['secondary_phone_aim'] = $data['secondary_phone_aim'];
        }

        if (isset($data['prefered_contact_method'])) {
            $user['prefered_contact_method'] = $data['prefered_contact_method'];
        }

        $user = User::create($user);
        $notification = new Notification();
        $notification->user_id = $user->id;
        $notification->notification_type = 2;
        $notification->save();
        return $user;
    }
}
