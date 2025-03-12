<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudents = User::where('role', 'student')->count();
        $totalRooms = Room::count();
        $occupiedRooms = Room::where('status', 'occupied')->count();
        $availableRooms = $totalRooms - $occupiedRooms;
        $recentPayments = Payment::with('user')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalStudents',
            'totalRooms',
            'occupiedRooms',
            'availableRooms',
            'recentPayments'
        ));
    }
}
