<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Booking;
use App\Models\Contact;
use DB;
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

        // Report for Booking
        $booking_info = DB::table('bookings')
                 ->select('email', DB::raw('count(*) as total'))
                 ->groupBy('email')
                 ->get();
                 
        $booking_info_array = [];
        foreach($booking_info as $key => $val){
        $booking_info_array[$val->email] = $val->total;
        }
        
        // Report for review
        $review_info = DB::table('reviews')
        ->select('email', DB::raw('count(*) as total'))
        ->groupBy('email')
        ->get();
        
        $review_info_array = [];
        foreach($review_info as $key => $val){
           $review_info_array[$val->email] = $val->total;
        }

        // Report for contacts
        $contact_info = DB::table('contacts')
        ->select('email', DB::raw('count(*) as total'))
        ->groupBy('email')
        ->get();

        $contact_info_array = [];
        foreach($contact_info as $key => $val){
           $contact_info_array[$val->email] = $val->total;
        }
       
        $first = DB::table('bookings')
        ->select('full_name','email');

        $second = DB::table('reviews')
        ->select('name','email');


        $third = DB::table('contacts')
        ->select('name','email');


        $userData = $first->union($second)
                ->union($third)
                ->get();


        return view('admin.dashboard', compact('reviewCount','bookingCount',
        'contactCount','recentBookingLists','recentContactLists', 'userData','booking_info_array','review_info_array','contact_info_array'
    ));
    }
}
