<?php namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        return Auth::guard('api')->user();
    }

    public function show(User $user)
    {
        return $user;
    }
}