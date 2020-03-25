<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);
        return view('profiles.index');
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
        $user = User::Where('username', $username)->firstOrFail();
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
        $this->authorize('edit', $user);
        return view('profile.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $username
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, $username)
    {
        $user = User::Where('username', $username)->firstOrFail();
        $this->authorize('edit', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $username
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy($username)
    {
        $user = User::Where('username', $username)->firstOrFail();
        $this->authorize('delete', $user);
    }
}
