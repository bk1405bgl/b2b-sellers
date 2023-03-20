<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // All Listings
    public function index() {
        return view('listings', [
            'listings' => Listing::all()
        ]);
    }

    // Single Listing
    public function show(Listing $listing) {
        $listing = Listing::find($id);

        if($listing) {
            return view('listing', [
                'listing' => $listing
            ]);
        } else {
            abort('404');
        }

    }
}
