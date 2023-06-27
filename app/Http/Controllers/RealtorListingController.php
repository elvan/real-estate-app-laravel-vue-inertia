<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RealtorListingController extends Controller
{
    public function index()
    {
        return inertia('Realtor/Index');
    }
}
