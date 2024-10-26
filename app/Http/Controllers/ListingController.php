<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listings
    public function index(){ 
        return view('listings.index', [
            'listings' => Listing::latest()->filter
            (request(['tag', 'search']))->paginate(6 )
        ]);
    }

    // show single listing
    public function show($id){
        $listing = Listing::find($id);
        if ($listing) {
            return view('listings.show', [
            'listing' => Listing::find($id)
        ]);
        }else{
            abort(404);
        }
    }


    // show create listing form
    public function create(){
        return view('listings.create');
    }

    // store listing
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'tags' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->logo->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing Created!');
    }

    public function edit(Listing $listing){
        return view('listings.edit', compact('listing'));
    }

    // show edit listing form
    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'tags' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->logo->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing Updated!');
        
    }

    // delete listing
    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Listing Deleted!');
    }
}
