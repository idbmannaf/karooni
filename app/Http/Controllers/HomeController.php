<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_order = Order::where('order_status','approved')->get()->count();
        $total_buyer = Buyer::count();
        $total_user = User::count();
        $total_role = Role::count();
        return view('home', compact('total_order', 'total_buyer', 'total_user', 'total_role'));
    }

    public function adminDashboard()
    {
        $total_order = Order::where('order_status','approved')->get()->count();
        $total_buyer = Buyer::count();
        $total_user = User::count();
        $total_role = Role::count();
        return view('authors.adminDashboard', compact('total_order', 'total_buyer', 'total_user', 'total_role'));
    }

    public function merchandiserDashboard()
    {
        $total_order = Order::where('order_status','approved')->get()->count();
        $total_buyer = Buyer::count();
        $total_user = User::count();
        $total_role = Role::count();
        return view('authors.merchandiserDashboard', compact('total_order', 'total_buyer', 'total_user', 'total_role'));
    }
    public function productStoreDashboard()
    {
        $total_order = Order::where('order_status','approved')->get()->count();
        $total_buyer = Buyer::count();
        $total_user = User::count();
        $total_role = Role::count();
        return view('authors.productStoreDashboard', compact('total_order', 'total_buyer', 'total_user', 'total_role'));
    }
}
