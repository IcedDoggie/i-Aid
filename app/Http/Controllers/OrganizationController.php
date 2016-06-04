<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$organizations = Organization::orderBy('id', 'desc')->paginate(10);

		return view('organizations.index', compact('organizations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('organizations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$organization = new Organization();

		$organization->name = $request->input("name");
        $organization->image_url = $request->input("image_url");
        $organization->description = $request->input("description");

		$organization->save();

		return redirect()->route('organizations.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$organization = Organization::findOrFail($id);

		return view('organizations.show', compact('organization'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$organization = Organization::findOrFail($id);

		return view('organizations.edit', compact('organization'));
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
		$organization = Organization::findOrFail($id);

		$organization->name = $request->input("name");
        $organization->image_url = $request->input("image_url");
        $organization->description = $request->input("description");

		$organization->save();

		return redirect()->route('organizations.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$organization = Organization::findOrFail($id);
		$organization->delete();

		return redirect()->route('organizations.index')->with('message', 'Item deleted successfully.');
	}

}
