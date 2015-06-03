<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreatePlaceRequest;
use App\Repository\PlaceRepository;
use Illuminate\Support\Facades\App;use Illuminate\Support\Facades\Input;

class PlacesController extends Controller {

	/**
	 * @var PlaceRepository
	 */
	private $place;
	/**
	 * @var CreatePlaceRequest
	 */

	public function __construct(PlaceRepository $place){

		$this->place = $place;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//		return $this->place->getAll();
		$places = $this->place->returnWithPaginate(10);
		return view('places.index', ['places' => $places ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('places.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param CreatePlaceRequest $request
	 * @return Response
	 */
	public function store(CreatePlaceRequest $request)
	{
		return $this->place->create($request->all());
//		return Input::all();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
