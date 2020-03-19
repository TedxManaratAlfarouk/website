<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserRegistration;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use PhpParser\Node\Scalar\String_;

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
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

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
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'bio' => $data['bio'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * shows registration form
     *
     * @param $key string
     * @return Factory|ؤView
     */
    public function showRegistration()
    {
        return view('auth.key');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function redirectToRegistrationForm(Request $request)
    {
        $key = $request->input('key');
        if (UserRegistration::where('key', $key)->doesntExist()) {
            return redirect(route('auth.register'))->withErrors(['key' => 'Key Not Found']);
        }
        return redirect(route('auth.registrationform', $key));

    }


    /**
     * @param $key String
     * @return Factory|View
     */
    public function showRegistrationForm($key)
    {
        $userRegistration = UserRegistration::where('key', $key)->firstOrFail();
        return view('auth.register')->with('user', $userRegistration);
    }
}
