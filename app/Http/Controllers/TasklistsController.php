<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tasklist;

class TasklistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = [];
		if (\Auth::check()) {
			$user = \Auth::user();
			$tasklists = $user->tasklists()->orderBy('created_at', 'desc')->paginate(10);
			//dd($user->id);
			$data = [
				'user' => $user,
				'tasklists' => $tasklists,
			];
		}
			return view('tasklists.index', $data);

		
		/**	
        $tasklists = Tasklist::all();
		return view('tasklists.index', [
		'tasklists' => $tasklists,
		]);
		**/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasklist = new Tasklist;

	return view('tasklists.create', [
		'tasklist' => $tasklist,
	]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

	$this->validate($request, [
		'status' => 'required|max:10', //added
		'content' => 'required|max:255',
	]);

	$user = \Auth::user();
        $tasklist = new Tasklist;
	$tasklist->user_id = $user->id;
	$tasklist->status = $request->status;
	$tasklist->content = $request->content;
	$tasklist->save();

	return redirect('/'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$user = \Auth::user(); //add
        $tasklist = Tasklist::find($id);
		//dd($tasklist);
		if( $user->id == $tasklist->user_id) {

			return view('tasklists.show', [
			'tasklist' => $tasklist,
			]);
		} else {
			//echo "Have a good night!";	
			return redirect('/'); 
		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$user = \Auth::user(); //add
       	$tasklist = Tasklist::find($id);

		if( $user->id == $tasklist->user_id) {
			return view('tasklists.edit', [
			'tasklist' => $tasklist,
			]);
		} else {
			return redirect('/'); 
		}
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	$this->validate($request, [
		'status' => 'required|max:10', //added
		'content' => 'required|max:255',
	]);

       	$tasklist = Tasklist::find($id);
	$tasklist->status = $request->status;
	$tasklist->content = $request->content;
	$tasklist->save();

	return redirect('/'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$user = \Auth::user(); //add
       	$tasklist = Tasklist::find($id);

		if( $user->id == $tasklist->user_id) {
			$tasklist->delete();
		}

		return redirect('/'); 
    }
}
