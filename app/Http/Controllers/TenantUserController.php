<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class TenantUserController extends Controller
{
    public function index()
    {
        return response()->json(User::get());
    }
}
