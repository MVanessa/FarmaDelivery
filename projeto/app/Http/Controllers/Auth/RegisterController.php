<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Cidadao;
use App\Farmaceutico;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

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
            'cpf' => 'required|unique:users',
            'data_nasc' => 'required',
            'password' => 'required|string|min:3|confirmed',
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_type' => Input::get('user_type'),
            'cpf' => $data['cpf'],
            'data_nasc' => $data['data_nasc'],
            'password' => Hash::make($data['password']),
        ]);

        if ($user->user_type == 1) {
            Cidadao::create([
                'id_user' => $user->id,
                'endereco' => $data['endereco'],
            ]);
        } else {
            Farmaceutico::create([
                'id_user' => $user->id,
                'crf' => $data['crf'],
            ]);
        }

        return $user;
    }
}
