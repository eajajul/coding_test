<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{    
    /**
     * Index login view
     *
     * @return view
     */
    public function Index()
    {
        return view('home.index');
    }
    
    /**
     * LogOut current user
     *
     * @return view
     */
    public function LogOut()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
