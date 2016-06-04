<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Donate;
use App\Organization;
use Illuminate\Http\Request;

class DonateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$donates = Donate::orderBy('id', 'desc')->paginate(10);

		return view('donates.index', compact('donates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('donates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
/*	public function store(Request $request)
	{
		$donate = new Donate();

		$donate->amount = $request->input("amount");

		$donate->save();

		return redirect()->route('donates.index')->with('message', 'Item created successfully.');
	}*/

	public function store($listId, DonateCreateFormRequest $request)
    {
    	echo $id;
        //$user = User::find(\Auth::id());
        if ($user->owns($listId)) {
            $list = Organization::findOrFail($listId);
            $task = new Organization(array(
                'amount' => $request->get('amount'),
                //'due' => $request->get('due'),
                //'done' => true ? $request->get('done') == 'true' : false
            ));
            $task = $list->tasks()->save($task);
            return \Redirect::route('organizations.show', array($list->id))
                ->with('message', 'Your task has been created!');
        } else {
            return Redirect::route('home')
                ->with('message', 'Authorization error: you do not own this list.');
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
		$donate = Donate::findOrFail($id);

		return view('donates.show', compact('donate'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$donate = Donate::findOrFail($id);

		return view('donates.edit', compact('donate'));
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
		$donate = Donate::findOrFail($id);

		$donate->amount = $request->input("amount");

		$donate->save();

		return redirect()->route('donates.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$donate = Donate::findOrFail($id);
		$donate->delete();

		return redirect()->route('donates.index')->with('message', 'Item deleted successfully.');
	}

}
