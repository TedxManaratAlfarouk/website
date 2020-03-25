<?php


namespace App\Http\View\Composers;

use App\User;
use Illuminate\View\View;

class ProfileComposer
{
    private $users;

    public function __construct()
    {
        $this->users = User::orderBy('first_name', 'asc')->get();
    }

    public function compose(View $view)
    {
        $view->with('users', $this->users);
    }
}
