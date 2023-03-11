<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Booking;
use App\Models\Contact;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviewCount = Review::all()->count();
        $bookingCount = Booking::all()->count();
        $contactCount = Contact::all()->count();

        // seven day ago date
        $sevenDaysAgo = Carbon::now()->subDays(7);
        $recentBookingLists = Booking::where('created_at', '>=', $sevenDaysAgo)->get();
        $recentContactLists = Contact::where('created_at', '>=', $sevenDaysAgo)->get();
        return view('admin.dashboard', compact('reviewCount','bookingCount','contactCount','recentBookingLists','recentContactLists'));
    }
}
