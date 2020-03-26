<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);
        return view('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param $username
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $this->authorize('view', $user);
        return view('profile.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $username
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit($username)
    {
        $user = User::Where('username', $username)->firstOrFail();
        $this->authorize('update', $user);
        return view('profile.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $username
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $this->authorize('update', $user);
        $this->validator($request->all() , $user->id)->validate();
        $this->updateUser($user , $request->all());
        return redirect(route('profile.show', $user->username));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $username
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Exception
     */
    public function destroy($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $this->authorize('delete', $user);
        $user->delete();
    }


    /**
     * @param array $data
     * @param $user_id
     * @return \Illuminate\Contracts\Validation\Validator|\Illuminate\Validation\Validator
     */
    private function validator(array $data, $user_id)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string', 'max:500'],
            'email' => ['required', 'string', 'email', 'max:255',
                Rule::unique('users')->ignore($user_id),
                ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param User $user
     * @param array $data
     * @return bool
     */
    private function updateUser(User $user,array $data)
    {
        return $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'bio' => $data['bio'],
        ]);
    }
}
