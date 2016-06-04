<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$donations = Donation::orderBy('id', 'desc')->paginate(10);

		return view('donations.index', compact('donations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('donations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$donation = new Donation();

		$donation->title = $request->input("title");
        $donation->body = $request->input("body");

		$donation->save();

		return redirect()->route('donations.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$donation = Donation::findOrFail($id);

		return view('donations.show', compact('donation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$donation = Donation::findOrFail($id);

		return view('donations.edit', compact('donation'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$donation = Donation::findOrFail($id);

		$donation->title = $request->input("title");
        $donation->body = $request->input("body");

		$donation->save();

		return redirect()->route('donations.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$donation = Donation::findOrFail($id);
		$donation->delete();

		return redirect()->route('donations.index')->with('message', 'Item deleted successfully.');
	}

}
