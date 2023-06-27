<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RealtorListingController extends Controller
{
    public function index()
    {
        return inertia(
            'Realtor/Index',
            ['listings' => Auth::user()->listings]
        );
    }
}
