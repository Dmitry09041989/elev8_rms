<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return view('user.profile');
    }

    public function updatePassword()
    {
        return view('user.update-password');
    }
}
