<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\User;

use App\Http\Booking;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function handleAdmin()
    {
        $bookings = DB::table('bookings')
            ->get();

        $users = DB::table('users')
            ->get();
        return view('admin.dashboard', compact('bookings','users'));
    }

    public function profileadmin()
    {
        return view('admin.profileadmin');
    }

    public function users(){
        $users = DB::table("users")->get();
        return view('admin/users', compact('users'));
    }

    public function booking(){
        $booking = DB::table('bookings')
            ->get();
    }


    public function destroy(User $user)
    {

        $user->delete();

        return back()
            ->with('success', 'User deleted successfully');
    }

}