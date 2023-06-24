<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAccountController extends Controller
{
    public function create()
    {
        return inertia('UserAccount/Create');
    }
}
