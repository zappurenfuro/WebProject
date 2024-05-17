<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function redirectToBooking($destination)
    {
        // Query the database for the destination
        $destinationData = DB::table('tourism_infos')->where('name', $destination)->first();

        // Check if destination exists
        if ($destinationData) {
            // Build the URL for the booking site with the location query
            $bookingUrl = "https://www.booking.com/searchresults.html?ss=" . urlencode($destinationData->location);

            // Redirect to the booking URL
            return redirect()->away($bookingUrl);
        } else {
            // If the destination is not found, show an error or redirect to a default page
            return redirect()->route('home')->with('error', 'Destination not found');
        }
    }
}

