<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Brand;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    /**
     * Dashboard
     */
    public function index()
    {
        /*User::create([
            'name' => 'lionelle',
            'email' => 'lionelle@gmail.com',
            'password' => Hash::make('lionie123'),
        ]);*/
        $countBrands = Brand::count();
        return view('dashboard', compact('countBrands'));
    }
}
