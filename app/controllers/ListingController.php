<?php

class ListingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the listings
        $listings = Listing::all();


       $listings = DB::table('listings')->paginate(15);



        // load the view and pass the nerds
        return View::make('listings.index')
            ->with('listings', $listings);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/nerds/create.blade.php)
        return View::make('listings.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'description'      => 'required',
            'date'      => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('listings/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $listing = new Listing;
            $listing->title       = Input::get('title');
            $listing->description      = Input::get('description');
            $listing->date      = Input::get('date');
            $listing->save();

            // redirect
            Session::flash('message', 'Successfully created Listing!');
            return Redirect::to('listings');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
        $listing = Listing::find($id);

        // show the view and pass the listing to it
        return View::make('listings.show')
            ->with('listing', $listing);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the listing
        $listing = Listing::find($id);

        // show the edit form and pass the nerd
        return View::make('listings.edit')
            ->with('listing', $listing);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'description'      => 'required',
            'date'      => 'required',
           
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('listings/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $listing = Listing::find($id);
            $listing->title       = Input::get('title');
            $listing->description      = Input::get('description');
            $listing->date     = Input::get('date');
            $listing->save();

            // redirect
            Session::flash('message', 'Successfully updated listing!');
            return Redirect::to('listings');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
        $listing = Listing::find($id);
        $listing->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the listing!');
        return Redirect::to('listings');
	}


}
