<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // All Listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    // Single Listing
    public function show(Listing $listing) {
        return view('listings.show', [
                'listing' => $listing
            ]);

    }

    // Show Create Form
    public function create() {
        return view('listings.create');
    }

    // Store created listing
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        Listing::create($formFields);


        return redirect('/')->with('message', 'Unternehmen erfolgreich hinzugefügt!');
    }
}
